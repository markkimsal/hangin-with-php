# hangin-with-php
Send Hangout messages with PHP and Beanstalkd

## setup

Run the send_message script once to authorize to Google and obtain a refresh token.
```
php ./bin/cli_send_message.php --email youremail --password password --refresh-token /home/user/.cache/hwp/refresh-token.txt --text "Hello World"
```

After a few seconds hit Ctrl+C to stop the process.  You have now done your first time registration and the system has access
to a refresh token and no longer needs your email and password.

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
