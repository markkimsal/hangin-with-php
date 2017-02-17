<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * ConversationType enum
 */
final class ConversationType
{
    const CONVERSATION_TYPE_UNKNOWN = 0;
    const CONVERSATION_TYPE_ONE_TO_ONE = 1;
    const CONVERSATION_TYPE_GROUP = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'CONVERSATION_TYPE_UNKNOWN' => self::CONVERSATION_TYPE_UNKNOWN,
            'CONVERSATION_TYPE_ONE_TO_ONE' => self::CONVERSATION_TYPE_ONE_TO_ONE,
            'CONVERSATION_TYPE_GROUP' => self::CONVERSATION_TYPE_GROUP,
        );
    }
}
}