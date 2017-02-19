<?php

namespace HWP;

include_once('gen_inc/SendChatMessageRequest.php');
include_once('gen_inc/ClientVersion.php');
include_once('gen_inc/ClientId.php');
include_once('gen_inc/RequestHeader.php');
include_once('gen_inc/EventRequestHeader.php');
include_once('gen_inc/ConversationId.php');
include_once('gen_inc/SyncRecentConversationsRequest.php');
include_once('gen_inc/SyncRecentConversationsResponse.php');
include_once('gen_inc/ResponseHeader.php');
include_once('gen_inc/EventContinuationToken.php');
include_once('gen_inc/SyncFilter.php');

class Conversation {


	public static function loadConversationList($client) {

		$request = new \SyncRecentConversationsRequest();

		$header = Hangouts::make_client_header();
		$request->setRequestHeader($header);

		$request->setMaxEventsPerConversation(1);
		$request->setMaxConversations(100);
		$request->setLastEventTimestamp( 0 );
//		$request->setLastEventTimestamp( time() - (3600 * 24 * 30) );

		$request->appendSyncFilter(\SyncFilter::SYNC_FILTER_ARCHIVED);
		$request->appendSyncFilter(\SyncFilter::SYNC_FILTER_INBOX);

		$response = $client->sendData(NULL, $request, 'conversations/syncrecentconversations');
		var_dump($response->body);
		$syncResponse = new \SyncRecentConversationsResponse();
		$syncResponse->parseFromString(
			base64_decode($response->body)
		);
		echo "D/Conversation: response body is... \n";
		var_dump($syncResponse);
//		echo ($response->body);
		return $syncResponse;
	}
}
