<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * NetworkType enum
 */
final class NetworkType
{
    const NETWORK_TYPE_UNKNOWN = 0;
    const NETWORK_TYPE_BABEL = 1;
    const NETWORK_TYPE_GOOGLE_VOICE = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'NETWORK_TYPE_UNKNOWN' => self::NETWORK_TYPE_UNKNOWN,
            'NETWORK_TYPE_BABEL' => self::NETWORK_TYPE_BABEL,
            'NETWORK_TYPE_GOOGLE_VOICE' => self::NETWORK_TYPE_GOOGLE_VOICE,
        );
    }
}
}