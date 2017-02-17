<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * DeliveryMediumType enum
 */
final class DeliveryMediumType
{
    const DELIVERY_MEDIUM_UNKNOWN = 0;
    const DELIVERY_MEDIUM_BABEL = 1;
    const DELIVERY_MEDIUM_GOOGLE_VOICE = 2;
    const DELIVERY_MEDIUM_LOCAL_SMS = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'DELIVERY_MEDIUM_UNKNOWN' => self::DELIVERY_MEDIUM_UNKNOWN,
            'DELIVERY_MEDIUM_BABEL' => self::DELIVERY_MEDIUM_BABEL,
            'DELIVERY_MEDIUM_GOOGLE_VOICE' => self::DELIVERY_MEDIUM_GOOGLE_VOICE,
            'DELIVERY_MEDIUM_LOCAL_SMS' => self::DELIVERY_MEDIUM_LOCAL_SMS,
        );
    }
}
}