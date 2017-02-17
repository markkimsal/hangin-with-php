<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * ReplyToInviteType enum
 */
final class ReplyToInviteType
{
    const REPLY_TO_INVITE_TYPE_UNKNOWN = 0;
    const REPLY_TO_INVITE_TYPE_ACCEPT = 1;
    const REPLY_TO_INVITE_TYPE_DECLINE = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'REPLY_TO_INVITE_TYPE_UNKNOWN' => self::REPLY_TO_INVITE_TYPE_UNKNOWN,
            'REPLY_TO_INVITE_TYPE_ACCEPT' => self::REPLY_TO_INVITE_TYPE_ACCEPT,
            'REPLY_TO_INVITE_TYPE_DECLINE' => self::REPLY_TO_INVITE_TYPE_DECLINE,
        );
    }
}
}