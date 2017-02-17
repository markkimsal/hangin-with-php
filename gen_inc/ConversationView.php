<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * ConversationView enum
 */
final class ConversationView
{
    const CONVERSATION_VIEW_UNKNOWN = 0;
    const CONVERSATION_VIEW_INBOX = 1;
    const CONVERSATION_VIEW_ARCHIVED = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'CONVERSATION_VIEW_UNKNOWN' => self::CONVERSATION_VIEW_UNKNOWN,
            'CONVERSATION_VIEW_INBOX' => self::CONVERSATION_VIEW_INBOX,
            'CONVERSATION_VIEW_ARCHIVED' => self::CONVERSATION_VIEW_ARCHIVED,
        );
    }
}
}