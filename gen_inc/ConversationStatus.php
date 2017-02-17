<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * ConversationStatus enum
 */
final class ConversationStatus
{
    const CONVERSATION_STATUS_UNKNOWN = 0;
    const CONVERSATION_STATUS_INVITED = 1;
    const CONVERSATION_STATUS_ACTIVE = 2;
    const CONVERSATION_STATUS_LEFT = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'CONVERSATION_STATUS_UNKNOWN' => self::CONVERSATION_STATUS_UNKNOWN,
            'CONVERSATION_STATUS_INVITED' => self::CONVERSATION_STATUS_INVITED,
            'CONVERSATION_STATUS_ACTIVE' => self::CONVERSATION_STATUS_ACTIVE,
            'CONVERSATION_STATUS_LEFT' => self::CONVERSATION_STATUS_LEFT,
        );
    }
}
}