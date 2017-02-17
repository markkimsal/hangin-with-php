<?php

namespace HWP;

include_once('gen_inc/SendChatMessageRequest.php');
include_once('gen_inc/ClientVersion.php');
include_once('gen_inc/ClientId.php');
include_once('gen_inc/RequestHeader.php');
include_once('gen_inc/EventRequestHeader.php');
include_once('gen_inc/ConversationId.php');
include_once('gen_inc/Segment.php');
include_once('gen_inc/MessageContent.php');

class Hangouts {


	public static function sendChatMessageRequest($conv_id, $convText) {

		$convId = new \ConversationId();
		$convId->setId($conv_id);

		$request = new \SendChatMessageRequest();

		$header = Hangouts::make_client_header();

		$evtHdr = new \EventRequestHeader();
		$evtHdr->setConversationId($convId);
		$evtHdr->setClientGeneratedId(rand(0, PHP_INT_MAX));

		$request->setRequestHeader($header);
		$request->setEventRequestHeader(
			$evtHdr
		);


		$segment = new \Segment();
		$segment->setType(\Segment::TEXT);
		$segment->setText($convText);//Segment::TYPE_TEXT);

		$content = new \MessageContent();
		$content->appendSegment($segment);

		$request->setMessageContent($content);

		return $request;

	}

	public static function make_client_header() {
		$version = new \ClientVersion();
		$version->setClientId(\ClientId::CLIENT_ID_WEB_HANGOUTS);
		$version->setMajorVersion('hanginwithphp-0.0.1');
		$header = new \RequestHeader();
		$header->setClientVersion($version);
		$header->setLanguageCode('en');
		return $header;
	}


	public static function makeAuthorizationHeaders($sapisid_cookie) {
		$origin_url = 'https://talkgadget.google.com';

		$t           = time()*1000;
		$auth        = sprintf('%s %s %s', $t, $sapisid_cookie, $origin_url);
		$authHash    = sha1($auth);
		$sapisidHash = sprintf('SAPISIDHASH %s_%s', $t, $authHash);
		return [
			'Authorization'   => $sapisidHash,
			'X-Origin'        => $origin_url,
			'X-Goog-Authuser' => '0',
		];
	}
}
