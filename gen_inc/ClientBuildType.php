<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * ClientBuildType enum
 */
final class ClientBuildType
{
    const BUILD_TYPE_UNKNOWN = 0;
    const BUILD_TYPE_PRODUCTION_WEB = 1;
    const BUILD_TYPE_PRODUCTION_APP = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'BUILD_TYPE_UNKNOWN' => self::BUILD_TYPE_UNKNOWN,
            'BUILD_TYPE_PRODUCTION_WEB' => self::BUILD_TYPE_PRODUCTION_WEB,
            'BUILD_TYPE_PRODUCTION_APP' => self::BUILD_TYPE_PRODUCTION_APP,
        );
    }
}
}