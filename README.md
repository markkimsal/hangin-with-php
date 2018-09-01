# hangin-with-php
Send Hangout messages with PHP and Beanstalkd

### protobuf-php dependency

    git clone https://github.com/allegro/php-protobuf
	cd php-protobuf
	phpize
	./configure
	make
	sudo make install
	php -d extension=protobuf.so

## setup

Run the bin/cli_auth_once.php script once to authorize to Google and obtain a refresh token.
```
php ./bin/cli_auth_once.php --email youremail --password password --refresh-token $(pwd)/refresh-token.txt
```

The OAuth2 refresh token will be stored in the file provided.  This refresh token means you will not have to type
your email and password for any subsequent commands.  The refresh token's access to your account can be revoked 
from Google's device access page.  This script presents itself as an iOS device for various reasons.

Not often do you have to put a password on command line.  Remember to escape your password special chars from bash
with quotes and back slashes.

    --password "IAmV\#ryL33t\!"


## sending a message

Once you have obtained a refresh token, you can send a message to a conversation.

```
php ./bin/cli_send_message.php --refresh-token $(pwd)/refresh-token.txt --convid XXXXXX --text "Your Test Message"
```

The conversation ID can be obtained by inspecting your network in the Gmail Web client, or by using the "build conversation list"
example in the hangups project's examples folder.


## beanstalk client

```
php./bin/beanstalk_listener.php --refresh-token /home/user/.cache/hwp/refresh-token --ip 127.0.0.1 --port 11300
```

Send a message to the "hangouts" tube as json with the conversation ID and the message you want as the "text" key

```
{"convid":".........", "text": "Hello World"}
```

Or,  you can supply a conversation ID on the command line to use as a default.  Any beanstalk job with a convid will override the one supplied
on the command line.

```
php./bin/beanstalk_listener.php --refresh-token /home/user/.cache/hwp/refresh-token --convid XXXXX
```
