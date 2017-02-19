<?php

namespace HWP;

class Client {

	public $isConnected  = FALSE;
	public $session;
	public $refreshToken = '';
	public $accessToken  = '';
	public $config       = [];
	public $cookies      = [];
	public $givenId      = NULL;

	public function __construct($session, $config) {
		$this->config = $config;
		$this->session = $session;
	}

	public function connect() {
		try {
			if ($this->getRefreshToken()) {
				$tokenJson = $this->getAccessFromRefresh();
			} else {
				$authCode  = $this->getAuthCode();
				$tokenJson = $this->getTokensFromCode($authCode);
				$this->saveRefreshToken($tokenJson['refresh_token']);
			}

			$startSessionResponse = $this->startHangoutSession($this->session, $this->accessToken);

			$sapisidCookie  = $startSessionResponse->offsetGet('SAPISID');
			$this->cookies['sapisid'] = $sapisidCookie->value;

/*
			$this->startBackChannel();
			$this->getNewClientId();
*/
		} catch (\Exception $e) {
			$this->isConnected = FALSE;
			throw $e;
		}
		$this->isConnected = TRUE;
	}

	public function startBackChannel() {

		$scookie = $this->cookies['sapisid'];
		# API key for from Hangouts web client
		$API_KEY = 'AIzaSyAfFJCeph-euFSwtmqFZi0kaKk-cZ5wufM';
		$headers = Hangouts::makeAuthorizationHeaders($scookie);
		$headers += [
			'X-Goog-Encode-Response-If-Executable' => 'base64',
			'Content-Type'                         => 'application/json',
		];

		$params = [
				'VER'   => 8,  # channel protocol version
				'RID'   => 81188,  # request identifier
				'ctype' => 'hangouts',  # client type
			];

		$ep  = 'channel/bind';
		$pbUrl = 'https://0.client-channel.google.com/client-channel/'.$ep.'?'.http_build_query($params);
		echo sprintf("D/Client: channel bind: %s\n", $pbUrl);

		$response = $this->session->post($pbUrl,
			$headers,
			json_encode(['ofs'=>0, 'count'=>0])
		);
		echo sprintf("D/Client: channel bind response: %s\n", $response->status_code);
		$parts         = explode("\n", $response->body);
		$len           = array_shift($parts);
		$struct        = json_decode( implode('', $parts), TRUE);
		$this->sid     = $struct[0][1][1];
		$this->gsessid = $struct[1][1][0]['gsid'];
		echo "I/Client: got new SID: ".$this->sid."\n";
		echo "I/Client: got new GSESSID: ".$this->gsessid."\n";

	}

	public function getNewClientId() {
		$cookieJar = new \Amp\Artax\Cookie\ArrayCookieJar();
		foreach ($this->session->cookies as $_c) {
			$cookieJar->store(
				new \Amp\Artax\Cookie\Cookie(
					$_c->name,
					$_c->value,
					$_c->attributes->offsetGet('expires'),
					$_c->attributes->offsetGet('path'),
					'.'.$_c->attributes->offsetGet('domain')
				)
			);
		}

		$reactor = \Amp\reactor();
		$client = new \Amp\Artax\Client($cookieJar);

        $params = [
            'VER'        => 8,  # channel protocol version
            'gsessionid' => $this->gsessid,
            'RID'        => 'rpc',  # request identifier
            't'          => 1,  # trial
            'SID'        => $this->sid,  # session ID
            'CI'         => 0,  # 0 if streaming/chunked requests should be used
            'ctype'      => 'hangouts',  # client type
            'TYPE'       => 'xmlhttp',  # type of request
        ];

		$scookie = $this->cookies['sapisid'];
		# API key for from Hangouts web client
		$API_KEY = 'AIzaSyAfFJCeph-euFSwtmqFZi0kaKk-cZ5wufM';
		$headers = Hangouts::makeAuthorizationHeaders($scookie);

		$ep  = 'channel/bind';
		$pbUrl = 'https://0.client-channel.google.com/client-channel/'.$ep.'?'.http_build_query($params);
		echo sprintf("D/Client: channel bind: %s\n", $pbUrl);

		$request = (new \Amp\Artax\Request)
			->setUri($pbUrl)
			->setMethod('GET');

		foreach ($headers as $_k => $_v) {
			$request->setHeader($_k, $_v);
		}
		$promise = $client->request($request, [\Amp\Artax\Client::OP_DEFAULT_USER_AGENT => 'php-requests/1.6-dev', \Amp\Artax\Client::OP_MS_TRANSFER_TIMEOUT => 12000]);
		$promise->watch( array($this, 'notifyCallback') );



		$params = [
			'VER'        => 8,  # channel protocol version
			'RID'        => 81188,  # request identifier
			'ctype'      => 'hangouts',  # client type
			'gsessionid' => $this->gsessid,
			'SID'        => $this->sid,
		];

		$pbUrl = 'https://0.client-channel.google.com/client-channel/'.$ep.'?'.http_build_query($params);
		echo sprintf("D/Client: channel bind: %s\n", $pbUrl);
		$request2 = (new \Amp\Artax\Request)
			->setUri($pbUrl)
			->setMethod('POST')
			->setBody('{\'req0_p\': \'{"3": {"1": {"1": "babel"}}}\', \'count\': 1, \'ofs\': 0}');

		foreach ($headers as $_k => $_v) {
			$request->setHeader($_k, $_v);
		}
		$promise2 = $client->request($request2, [\Amp\Artax\Client::OP_DEFAULT_USER_AGENT => 'php-requests/1.6-dev', \Amp\Artax\Client::OP_MS_TRANSFER_TIMEOUT => 12000]);
	
			$response = \Amp\wait($promise2);
var_dump($response);

		try {
			$response = \Amp\wait($promise);
		} catch (\Amp\Artax\TimeoutException $e) {
			//TODO. run in background, signal src/Conversation
			//without blocking
		}

		/*
		$response = $this->session->post($pbUrl,
			$headers,
			json_encode(['ofs'=>0, 'count'=>0])
		);
		var_dump($response->body);
		 */
		/*
		echo sprintf("D/Client: channel bind response: %s\n", $response->getStatus());
		$parts         = explode("\n", $response->getBody());
		$len           = array_shift($parts);
		$struct        = json_decode( implode('', $parts), TRUE);
		var_dump($struct);
		 */

	}

	public function notifyCallback(array $notifyData) {
		$event = array_shift($notifyData);
		switch ($event) {
			case \Amp\Artax\Notify::SOCK_DATA_IN:
				$d = array_shift($notifyData);
				$parts = explode("\n", $d);
				$unknown = array_shift($parts);
				$len     = array_shift($parts);
				$parts   = implode("\n", $parts);
				$message = json_decode($parts, TRUE);
				if (array_key_exists('p', $message[0][1][0])) {
					$json = json_decode($message[0][1][0]['p'], TRUE);
					echo "I/Client: Got given ID of ".$json['3']['2']."\n";
					$this->givenId = $json['3']['2'];

					$x = Conversation::loadConversationList($this);
				}
				break;

			case \Amp\Artax\Notify::SOCK_DATA_OUT:
				break;
		}
	}

	public function sendChatMessage($convId, $txt) {
		include_once('src/Hangouts.php');
		echo "I/Hangouts: Sending chat message - conversation ID: ".$convId." strlen: ".strlen($txt)."\n";
		$rq = Hangouts::sendChatMessageRequest($convId, $txt);
		$this->sendData($this->session, $rq);
	}

	public function startHangoutSession($http, $accessToken ) {

		$headers = [
			'Authorization' => sprintf('Bearer %s', $accessToken)
		];

		$response = $http->get('https://accounts.google.com/accounts/OAuthLogin'.
							 '?source=hangups&issueuberauth=1', $headers);
		echo "I/Hangouts: startHangoutSession \n";
//		print $response->raw;
//		print $accessToken."\n";

		$response->throw_for_status();

		$uberauth = $response->body;

		$response = $http->get('https://accounts.google.com/MergeSession?'
							 .'service=mail&'
							 .'continue=http://www.google.com&uberauth='.$uberauth, $headers);

		$response->throw_for_status();

		$cookies = $response->cookies;
		//TODO: filter by domain = '*.google.com' like hangups does
		return $cookies;

	}

	public function getAccessFromRefresh() {
		$data = [
			'client_id'     => $this->config['OAUTH2_CLIENT_ID'],
			'client_secret' => $this->config['OAUTH2_CLIENT_SECRET'],
			'grant_type'    => 'refresh_token',
			'refresh_token' => $this->refreshToken,
		];

		//$x = $http->post($OAUTH2_TOKEN_REQUEST_URL, array(), $data);
		$response = $this->session->post(
			$this->config['OAUTH2_TOKEN_REQUEST_URL'],
			[],
			$data
		);
		$x  = json_decode($response->body, TRUE);
		$this->accessToken  = $x['access_token'];
		return 	$x;
	}

	public function getTokensFromCode($authCode) {
		$data = [
			'client_id'     => $this->config['OAUTH2_CLIENT_ID'],
			'client_secret' => $this->config['OAUTH2_CLIENT_SECRET'],
			'code'          => $authCode,
			'grant_type'    => 'authorization_code',
			'redirect_uri'  => 'urn:ietf:wg:oauth:2.0:oob',
		];
		$response = $this->session->post(
			$this->config['OAUTH2_TOKEN_REQUEST_URL'],
			[],
			$data
		);
		$x  = json_decode($response->body, TRUE);
		$this->refreshToken = $x['refresh_token'];
		$this->accessToken  = $x['access_token'];
		return 	$x;
	}

	public function getAuthCode() {
		if (empty($this->config['email'])) {
			throw new \Exception ('Cannot get auth code without email and password.');
		}
		if (empty($this->config['password'])) {
			throw new \Exception ('Cannot get auth code without email and password.');
		}

		$authUrl = $this->config['OAUTH2_LOGIN_URL']
			.'?scope='. implode(' ', $this->config['OAUTH2_SCOPES'])
			.'&client_id='.$this->config['OAUTH2_CLIENT_ID'];

		$response = $this->session->get(
			$authUrl
		);
		$response->throw_for_status();

		$inputs  = $this->_getFormInputs($response->body);
		$authUrl = $this->_getFormUrl($response->body);

		$response = $this->session->post(
			$authUrl,
			[],
			['Email' => $this->config['email']] + $inputs
		);
		$response->throw_for_status();

		$inputs  = $this->_getFormInputs($response->body);
		$authUrl = $this->_getFormUrl($response->body);

		$response = $this->session->post(
			$authUrl,
			[],
			['Passwd' => $this->config['password']] + $inputs
		);

		$response->throw_for_status();

		//$inputs  = $this->_getFormInputs($response->body);
		//TODO:: handle verification: two step or PIN
		//sample python from Hangups project
		/*
    if browser.has_selector(VERIFICATION_FORM_SELECTOR):
        if browser.has_selector(TOTP_CODE_SELECTOR):
            input_selector = TOTP_CODE_SELECTOR
        elif browser.has_selector(PHONE_CODE_SELECTOR):
            input_selector = PHONE_CODE_SELECTOR
        else:
            raise GoogleAuthError('Unknown verification code input')
        verfification_code = credentials_prompt.get_verification_code()
        browser.submit_form(
            VERIFICATION_FORM_SELECTOR, {input_selector: verfification_code}
        )
		 */

		$authCode  = $response->cookies->offsetGet('oauth_code');
		return $authCode->value;
	}

	/**
	 */
	public function getRefreshToken() {
		if (is_file($this->config['refreshTokenFile'])) {
			$this->refreshToken =  file_get_contents($this->config['refreshTokenFile']);
			echo "D/Client: got refresh token: ". $this->refreshToken." from file: ".$this->config['refreshTokenFile']."\n";
		
			return (bool)strlen($this->refreshToken);
		}
		return FALSE;
	}

	/**
	 */
	public function saveRefreshToken($token) {
		$d = dirname($this->config['refreshTokenFile']);
		if (!is_dir($d)) {
			mkdir($d, 0777, TRUE);
		}

		$x = file_put_contents(
				$this->config['refreshTokenFile'],
				$token
		);
	}

	public function sendData($http, $request, $endpoint='conversations/sendchatmessage') {
		if ($http == NULL ) {
			$http = $this->session;
		}
		return $this->_baseRequest($http, $request, $endpoint);
	}

	public function _baseRequest($http, $request, $ep) {
		$scookie = $this->cookies['sapisid'];
		# API key for from Hangouts web client
		$API_KEY = 'AIzaSyAfFJCeph-euFSwtmqFZi0kaKk-cZ5wufM';
		$headers = Hangouts::makeAuthorizationHeaders($scookie);
		$headers += [
			'X-Goog-Encode-Response-If-Executable' => 'base64',
			'Content-Type'                         => 'application/x-protobuf',
		];

		/*
		 *
{'alt': 'proto', 'key': 'AIzaSyAfFJCeph-euFSwtmqFZi0kaKk-cZ5wufM'}
https://clients6.google.com/chat/v1/conversations/syncrecentconversations
fwrite($f, "content-type: application/x-protobuf\n");
fwrite($f, "authorization: SAPISIDHASH 1487431873226_a0d2e5c5a8d0a577a9684ec7e79c440c2fb02244\n");
fwrite($f, "x-origin: https://talkgadget.google.com\n");
fwrite($f, "x-goog-authuser: 0\n");
fwrite($f, "X-Goog-Encode-Response-If-Executable: base64\n");
fwrite($f, "Cookies: APISID=Yp6iSTVc6H2RlGAH/AH7AokTo7SdT0iWs-; SAPISID=cdqGOEneAv4tZPV7/AfW3LYCiTQsodl4_i; SSID=AjM5ExIv31lSvPlyr; HSID=ATi8KpE1P5KFLl_Pa; SID=WgRzSpILTQmvPoXW_G7MlSjSmVRUpMvX7oPm7wWf_TNnjCStMBRl8nr7itA1_IYnJQEIHw.; 

");
{'alt': 'proto', 'key': 'AIzaSyAfFJCeph-euFSwtmqFZi0kaKk-cZ5wufM'}
https://clients6.google.com/chat/v1/contacts/getselfinfo

*/
		$pbUrl = 'https://clients6.google.com/chat/v1/'.$ep.'?key='.$API_KEY.'&alt=proto';
		echo $pbUrl."\n";
		echo($request->dump())."\n";

		//$response = $http->post('https://clients6.google.com/chat/v1/'.$ep.'?key='.$API_KEY.'&alt=protojson',
		$response = $http->post($pbUrl,
			$headers,
			$request->serializeToString()
		);
		return $response;
		/*
		echo "D/Hangouts: _baseRequest: ".$request->serializeToString()."\n";
		echo "D/Hangouts: _baseRequest: status ". $response->status_code."\n";
		echo "D/Hangouts: _baseRequest: response body...".$response->body."\n";
		echo $response->body."\n";
		 */
	}


	public function _getFormInputs($html) {
		$matches = [];
		$inputs  = [];
		preg_match_all("/<input(.*?)>/", $html, $matches);
		/*
		 *
array(2) {
  [0]=>
  array(14) {
    [0]=>
    string(66) "<input name="Page" type="hidden" value="PasswordSeparationSignIn">"
    [1]=>
    string(53) "<input type="hidden" name="GALX" value="udxZc5noaZI">"
    [2]=>
    string(89) "<input type="hidden" name="gxf" value="AFoagUU1u9nzgT0muiooGNctU7WPzRZqQQ:1487284556458">"
  }
  [1]=>
  array(14) {
    [0]=>
    string(59) " name="Page" type="hidden" value="PasswordSeparationSignIn""
    [1]=>
    string(46) " type="hidden" name="GALX" value="udxZc5noaZI""
    [2]=>
    string(82) " type="hidden" name="gxf" value="AFoagUU1u9nzgT0muiooGNctU7WPzRZqQQ:1487284556458""
  }

		*/


		foreach ($matches[1] as $string) {
			$kv = explode(' ', $string);
			$n = '';
			$v = '';
			foreach ($kv as $part) {
				if ($part == '') continue;
				if (strpos($part, 'name') === 0) {
					list($x, $y) = explode('=', $part);
					$n = substr($y, 1, -1);
				}
				if (strpos($part, 'value') === 0) {
					$partList = explode('=', $part);
					array_shift($partList);

					$v =  implode('=', $partList);
					$v = substr($v, 1, -1);
					$v = str_replace('&amp;', '&', $v);
				}
			}
			$inputs[$n] = $v;
		}
		return $inputs;
	}

	public function _getFormUrl($html) {
		$matches = [];
//		<\s*form[^>]*\s+action=(["'])(.*?)\1
		preg_match("/<form[^>]*\s+action=[\"'](.*?)[\"']/", $html, $matches);
		/*
		array(2) {
		  [0]=>
		  string(84) "<form novalidate method="post" action="https://accounts.google.com/signin/v1/lookup""
		  [1]=>
		  string(44) "https://accounts.google.com/signin/v1/lookup"
		}
		*/

		if (isset($matches[1])) {
			return $matches[1];
		}
		if (!isset($matches[0])) {
			var_dump($html);
			echo "Not HERE!";
			exit();
		}

		die("not here \n");
		/*
		var_dump($matches);
		return $matches[0];
		 */
	}
}
