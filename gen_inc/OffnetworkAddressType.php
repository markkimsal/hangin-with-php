<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * OffnetworkAddressType enum
 */
final class OffnetworkAddressType
{
    const OFFNETWORK_ADDRESS_TYPE_UNKNOWN = 0;
    const OFFNETWORK_ADDRESS_TYPE_EMAIL = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'OFFNETWORK_ADDRESS_TYPE_UNKNOWN' => self::OFFNETWORK_ADDRESS_TYPE_UNKNOWN,
            'OFFNETWORK_ADDRESS_TYPE_EMAIL' => self::OFFNETWORK_ADDRESS_TYPE_EMAIL,
        );
    }
}
}