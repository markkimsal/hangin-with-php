<?php

$argDefs = [
	[
		'name' => 'refreshTokenFile',
		'keys' => [
			'r',
			'refresh-token',
		],
		'default' => '',
	],
	[
		'name' => 'watch',
		'keys' => [
			'w',
			'watch',
		],
		'default' => 'hangouts',
	],
	[
		'name' => 'conversationId',
		'keys' => [
			'conversation-id',
			'conversationid',
			'convid',
			'cid'
		],
		'default' => '',
	],
	[
		'name' => 'email',
		'keys' => [
			'email',
			'e'
		],
		'default' => ''
	],
	[
		'name' => 'password',
		'keys' => [
			'password',
			'p'
		],
		'default' => ''
	],
	[
		'name' => 'beanstalkdIp',
		'keys' => [
			'ip',
			'i'
		],
		'default' => '127.0.0.1'
	],
	[
		'name' => 'beanstalkdPort',
		'keys' => [
			'port',
			'o'
		],
		'default' => '11300'

	]
];
$h = getenv('HOME');
if ($h) {
	$argDefs[0]['default'] = $h.'/.cache/hwp/refresh-token.txt';
}

$defaults = [
	'OAUTH2_LOGIN_URL'         => 'https://accounts.google.com/o/oauth2/programmatic_auth',
	'OAUTH2_TOKEN_REQUEST_URL' => 'https://accounts.google.com/o/oauth2/token',
	'OAUTH2_CLIENT_SECRET'     => 'KWsJlkaMn1jGLxQpWxMnOox-',
	//'OAUTH2_LOGIN_URL' => 'https://accounts.google.com/o/oauth2/v2/auth',
	'OAUTH2_SCOPES'            => [
		'https://www.googleapis.com/auth/userinfo.email',
		'https://www.google.com/accounts/OAuthLogin',
	],
	'OAUTH2_CLIENT_ID' => '936475272427.apps.googleusercontent.com',

];
$o = [
	'conversation-id:',
	'convid:',
	'refresh-token:',
	'watch:',
	'ip:',
	'port:',
];

$options = getopt('c:w:r:i:o:', $o);
$config = array_merge($defaults);

foreach ($argDefs as $arg) {
	foreach ($options as $k => $v) {
		if (array_key_exists('default', $arg)) {
			$config[ $arg['name'] ] = $arg['default'];
		} else {
			$config[ $arg['name'] ] = NULL;
		}
		if (in_array($k, $arg['keys'])) {
			$config[ $arg['name'] ] = $v;
			continue 2;
		}
	}
}

include(dirname(__DIR__).'/vendor/autoload.php');
$session = new Requests_Session();

include('src/Client.php');
try {
	$hwpclient = new HWP\Client($session, $config);


	//try connecting over and over, if there's an authorization 
	// error, wait increasing time and try again
	Amp\repeat(function() use ($hwpclient){

		if ($hwpclient->isConnected) {
			return;
		}

		if (!$hwpclient->getRefreshToken()) {
			echo "W/Hangouts: Cannot read refresh token.  Will try again later.\n";
			return;
		}

		try {
			$hwpclient->connect();
		} catch (\Exception $e) {
			$hwpclient->isConnected = FALSE;
			echo "E/Hangouts: Exception in Hangouts connection. ".$e->getMessage()."\n";
		}

	}, $msInterval=5000);

} catch (Exception $e) {
	echo "Error: ".$e->getMessage()."\n";
	die(1);
}


Amp\run(function () use ($config, $hwpclient) {
try {
	$client = new Amp\Beanstalk\BeanstalkClient($config['beanstalkdIp'].':'.$config['beanstalkdPort']);

	$client->watch($config['watch']);

	Amp\repeat(function() use ($client, $config, $hwpclient){

		try {
			//echo "I/Job: waiting for reserve ...\n";
			$promise = $client->reserve(0);
			//echo "I/Job: got promise\n";
		} catch (Exception $e) {
			if ($e instanceOf Amp\Beanstalk\DeadlineSoonException) {
				var_dump($e->getJob());
			}
		}
		$promise->when( function($error, $result, $cbData) use ($client, $config, $hwpclient) {
			if ($error instanceOf Amp\Beanstalk\TimedOutException) {
				return;
			}
			if ($error instanceOf Amp\Beanstalk\DeadlineSoonException) {
				echo "E/Job: DeadLineSoon: ".$e->getMessage()."\n";
				return;
			}
			if ($result) {
				echo "I/Job: RESERVED JOB: ".$result[0]."\n";
			}

			if (!$result) {
				return;
			}

			try {
				$id = $result[0];

				//var_dump($result);
				$params = json_decode($result[1], TRUE);
				//var_dump($params, TRUE);
				$convId = $config['conversationId'];
				if (array_key_exists('convid', $params)) {
					$convId = $params['convid'];
				}
				if (array_key_exists('text', $params)) {
					$convText = $params['text'];
					$hwpclient->sendChatMessage($convId, $convText);
				}

				$k  = $client->delete($id);
				$k->when( function($err, $res) use ($client, $id) {
					echo "I/Job: DELETING JOB: " . $id."\n";
				});
			} catch (Exception $e) {
				echo "E/Job: Exception: ".$e->getMessage()."\n";
			}
		});
	}, $msInterval=50);


} catch (Exception $e) {
	var_dump($e->getMessage());
}

});















function helpText() {
	echo "php ./bin/cli_send_message.php [-c|--convid 123456] [-t|--text \"Your Text\"] \n";
	echo "Parmeters:\n";
	echo "  -w --watch:             Tube to watch for messages\n";
	echo "                          (defaults to 'hangouts')\n";
	echo "  -c --convid:            The unique conversation ID\n";
	echo "  -r --refresh-token:     The filename to use as refresh token cache.\n";
	echo "  -i --ip:                The IP address of the beanstalkd server\n";
	echo "                          (defaults to '127.0.0.1')\n";
	echo "  -o --port:              The port number of the beanstalkd server\n";
	echo "                          (defaults to '11300')\n";
	echo "  -e --email:             Email for sign-in.\n";
	echo "                          (only required one time if --refresh-token is used)\n";
	echo "                          (Using email and password is strongly discouraged\n";
	echo "                          use cli_auth_once.php and set --refresh-token file location)\n";
	echo "  -p --password:          Password for sign-in.\n";
	echo "                          (only required one time if --refresh-token is used)\n";
	echo "                          (Using email and password is strongly discouraged,\n";
	echo "                          use cli_auth_once.php and set --refresh-token file location)\n";
}
