<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * EventType enum
 */
final class EventType
{
    const EVENT_TYPE_UNKNOWN = 0;
    const EVENT_TYPE_REGULAR_CHAT_MESSAGE = 1;
    const EVENT_TYPE_SMS = 2;
    const EVENT_TYPE_VOICEMAIL = 3;
    const EVENT_TYPE_ADD_USER = 4;
    const EVENT_TYPE_REMOVE_USER = 5;
    const EVENT_TYPE_CONVERSATION_RENAME = 6;
    const EVENT_TYPE_HANGOUT = 7;
    const EVENT_TYPE_PHONE_CALL = 8;
    const EVENT_TYPE_OTR_MODIFICATION = 9;
    const EVENT_TYPE_PLAN_MUTATION = 10;
    const EVENT_TYPE_MMS = 11;
    const EVENT_TYPE_DEPRECATED_12 = 12;
    const EVENT_TYPE_OBSERVED_EVENT = 13;
    const EVENT_TYPE_GROUP_LINK_SHARING_MODIFICATION = 14;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'EVENT_TYPE_UNKNOWN' => self::EVENT_TYPE_UNKNOWN,
            'EVENT_TYPE_REGULAR_CHAT_MESSAGE' => self::EVENT_TYPE_REGULAR_CHAT_MESSAGE,
            'EVENT_TYPE_SMS' => self::EVENT_TYPE_SMS,
            'EVENT_TYPE_VOICEMAIL' => self::EVENT_TYPE_VOICEMAIL,
            'EVENT_TYPE_ADD_USER' => self::EVENT_TYPE_ADD_USER,
            'EVENT_TYPE_REMOVE_USER' => self::EVENT_TYPE_REMOVE_USER,
            'EVENT_TYPE_CONVERSATION_RENAME' => self::EVENT_TYPE_CONVERSATION_RENAME,
            'EVENT_TYPE_HANGOUT' => self::EVENT_TYPE_HANGOUT,
            'EVENT_TYPE_PHONE_CALL' => self::EVENT_TYPE_PHONE_CALL,
            'EVENT_TYPE_OTR_MODIFICATION' => self::EVENT_TYPE_OTR_MODIFICATION,
            'EVENT_TYPE_PLAN_MUTATION' => self::EVENT_TYPE_PLAN_MUTATION,
            'EVENT_TYPE_MMS' => self::EVENT_TYPE_MMS,
            'EVENT_TYPE_DEPRECATED_12' => self::EVENT_TYPE_DEPRECATED_12,
            'EVENT_TYPE_OBSERVED_EVENT' => self::EVENT_TYPE_OBSERVED_EVENT,
            'EVENT_TYPE_GROUP_LINK_SHARING_MODIFICATION' => self::EVENT_TYPE_GROUP_LINK_SHARING_MODIFICATION,
        );
    }
}
}