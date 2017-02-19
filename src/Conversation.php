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
include_once('gen_inc/Event.php');
include_once('gen_inc/HangoutEvent.php');
include_once('gen_inc/Formatting.php');
include_once('gen_inc/LinkData.php');
include_once('gen_inc/Attachment.php');
include_once('gen_inc/EmbedItem.php');
include_once('gen_inc/PlusPhoto.php');
include_once('gen_inc/PlusPhoto_Thumbnail.php');
include_once('gen_inc/PlusPhoto_MediaType.php');
include_once('gen_inc/Place.php');
include_once('gen_inc/UserEventState.php');
include_once('gen_inc/HashModifier.php');
include_once('gen_inc/MembershipChange.php');
include_once('gen_inc/ChatMessage.php');
include_once('gen_inc/ConversationRename.php');
include_once('gen_inc/ClientIdentifier.php');
include_once('gen_inc/ConversationState.php');
include_once('gen_inc/Conversation.php');
include_once('gen_inc/ConversationParticipantData.php');
include_once('gen_inc/UserConversationState.php');
include_once('gen_inc/UserReadState.php');
include_once('gen_inc/ParticipantId.php');
include_once('gen_inc/DeliveryMedium.php');
include_once('gen_inc/DeliveryMediumOption.php');

class Conversation {


	public static function loadConversationList($client, $timestamp=0) {
//		while ($client->givenId == NULL) {
//			sleep(1);
//		}

		$request = new \SyncRecentConversationsRequest();

		$header = Hangouts::make_client_header();
		/*
		$identifier = new \ClientIdentifier();
		$identifier->setResource($client->givenId);
		echo "I/Conversation: Adding given ID to header: ".$client->givenId."\n";
		$header->setClientIdentifier(
			$identifier
		);
		 */
		$request->setRequestHeader($header);

		$request->setMaxEventsPerConversation(1);
		$request->setMaxConversations(100);
		if ($timestamp >0 ) {
			$request->setLastEventTimestamp($timestamp);
		}

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
