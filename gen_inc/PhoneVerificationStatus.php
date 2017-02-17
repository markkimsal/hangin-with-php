<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * PhoneVerificationStatus enum
 */
final class PhoneVerificationStatus
{
    const PHONE_VERIFICATION_STATUS_UNKNOWN = 0;
    const PHONE_VERIFICATION_STATUS_VERIFIED = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'PHONE_VERIFICATION_STATUS_UNKNOWN' => self::PHONE_VERIFICATION_STATUS_UNKNOWN,
            'PHONE_VERIFICATION_STATUS_VERIFIED' => self::PHONE_VERIFICATION_STATUS_VERIFIED,
        );
    }
}
}