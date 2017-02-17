<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * FocusDevice enum
 */
final class FocusDevice
{
    const FOCUS_DEVICE_UNSPECIFIED = 0;
    const FOCUS_DEVICE_DESKTOP = 20;
    const FOCUS_DEVICE_MOBILE = 300;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'FOCUS_DEVICE_UNSPECIFIED' => self::FOCUS_DEVICE_UNSPECIFIED,
            'FOCUS_DEVICE_DESKTOP' => self::FOCUS_DEVICE_DESKTOP,
            'FOCUS_DEVICE_MOBILE' => self::FOCUS_DEVICE_MOBILE,
        );
    }
}
}