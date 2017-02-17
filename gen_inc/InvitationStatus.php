<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * InvitationStatus enum
 */
final class InvitationStatus
{
    const INVITATION_STATUS_UNKNOWN = 0;
    const INVITATION_STATUS_PENDING = 1;
    const INVITATION_STATUS_ACCEPTED = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'INVITATION_STATUS_UNKNOWN' => self::INVITATION_STATUS_UNKNOWN,
            'INVITATION_STATUS_PENDING' => self::INVITATION_STATUS_PENDING,
            'INVITATION_STATUS_ACCEPTED' => self::INVITATION_STATUS_ACCEPTED,
        );
    }
}
}