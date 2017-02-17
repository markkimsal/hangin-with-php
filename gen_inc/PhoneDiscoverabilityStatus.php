<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * PhoneDiscoverabilityStatus enum
 */
final class PhoneDiscoverabilityStatus
{
    const PHONE_DISCOVERABILITY_STATUS_UNKNOWN = 0;
    const PHONE_DISCOVERABILITY_STATUS_OPTED_IN_BUT_NOT_DISCOVERABLE = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'PHONE_DISCOVERABILITY_STATUS_UNKNOWN' => self::PHONE_DISCOVERABILITY_STATUS_UNKNOWN,
            'PHONE_DISCOVERABILITY_STATUS_OPTED_IN_BUT_NOT_DISCOVERABLE' => self::PHONE_DISCOVERABILITY_STATUS_OPTED_IN_BUT_NOT_DISCOVERABLE,
        );
    }
}
}