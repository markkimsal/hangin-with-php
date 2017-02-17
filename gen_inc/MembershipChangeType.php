<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * MembershipChangeType enum
 */
final class MembershipChangeType
{
    const MEMBERSHIP_CHANGE_TYPE_JOIN = 1;
    const MEMBERSHIP_CHANGE_TYPE_LEAVE = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'MEMBERSHIP_CHANGE_TYPE_JOIN' => self::MEMBERSHIP_CHANGE_TYPE_JOIN,
            'MEMBERSHIP_CHANGE_TYPE_LEAVE' => self::MEMBERSHIP_CHANGE_TYPE_LEAVE,
        );
    }
}
}