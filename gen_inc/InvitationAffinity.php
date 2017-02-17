<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * InvitationAffinity enum
 */
final class InvitationAffinity
{
    const INVITE_AFFINITY_UNKNOWN = 0;
    const INVITE_AFFINITY_HIGH = 1;
    const INVITE_AFFINITY_LOW = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'INVITE_AFFINITY_UNKNOWN' => self::INVITE_AFFINITY_UNKNOWN,
            'INVITE_AFFINITY_HIGH' => self::INVITE_AFFINITY_HIGH,
            'INVITE_AFFINITY_LOW' => self::INVITE_AFFINITY_LOW,
        );
    }
}
}