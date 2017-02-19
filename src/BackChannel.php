<?php

namespace HWP;

class BackChannel {

	public $client = NULL;
	public function __construct($client) {
		$this->client = $client;
	}

	public function startBackChannel() {

		$scookie = $this->client->cookies['sapisid'];
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

		$response = $this->client->session->post($pbUrl,
			$headers,
			json_encode(['ofs'=>0, 'count'=>0])
		);
		echo sprintf("D/Client: channel bind response: %s\n", $response->status_code);
		$parts         = explode("\n", $response->body);
		$len           = array_shift($parts);
		$struct        = json_decode( implode('', $parts), TRUE);
		$this->client->sid     = $struct[0][1][1];
		$this->client->gsessid = $struct[1][1][0]['gsid'];
		echo "I/Client: got new SID: ".$this->client->sid."\n";
		echo "I/Client: got new GSESSID: ".$this->client->gsessid."\n";

	}

	public function getNewClientId() {
		$cookieJar = new \Amp\Artax\Cookie\ArrayCookieJar();
		foreach ($this->client->session->cookies as $_c) {
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
            'gsessionid' => $this->client->gsessid,
            'RID'        => 'rpc',  # request identifier
            't'          => 1,  # trial
            'SID'        => $this->client->sid,  # session ID
            'CI'         => 0,  # 0 if streaming/chunked requests should be used
            'ctype'      => 'hangouts',  # client type
            'TYPE'       => 'xmlhttp',  # type of request
        ];

		$scookie = $this->client->cookies['sapisid'];
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
			'gsessionid' => $this->client->gsessid,
			'SID'        => $this->client->sid,
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
		$response = $this->client->session->post($pbUrl,
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
					$this->client->givenId = $json['3']['2'];
				}
				break;

			case \Amp\Artax\Notify::SOCK_DATA_OUT:
				break;
		}
	}
}
