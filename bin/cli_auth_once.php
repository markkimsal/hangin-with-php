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
	'password:',
	'email:',
	'refresh-token:',
];
$options = getopt('p:e:r:', $o);
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

include('vendor/autoload.php');
$session = new Requests_Session();

include('src/Client.php');
try {
	$client = new HWP\Client($session, $config);
	$authCode  = $client->getAuthCode();
	$tokenJson = $client->getTokensFromCode($authCode);
	$client->saveRefreshToken($tokenJson['refresh_token']);

} catch (Exception $e) {
	echo "Error: ".$e->getMessage()."\n";
	die(1);
}



function helpText() {
	echo "php ./bin/cli_auth_once.php [-e|--email youremail] [-p|--password \"pAssw0rd#\"] \n";
	echo "Authenticate to Google and store a long term refresh token.\n";
	echo "Parmeters:\n";
	echo "  -r --refresh-token:     The filename to use as refresh token cache.\n";
	echo "  -e --email:             Email for sign-in.\n";
	echo "  -p --password:          Password for sign-in.\n";
}
