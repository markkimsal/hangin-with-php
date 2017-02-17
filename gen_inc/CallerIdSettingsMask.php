<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * CallerIdSettingsMask enum
 */
final class CallerIdSettingsMask
{
    const CALLER_ID_SETTINGS_MASK_UNKNOWN = 0;
    const CALLER_ID_SETTINGS_MASK_PROVIDED = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'CALLER_ID_SETTINGS_MASK_UNKNOWN' => self::CALLER_ID_SETTINGS_MASK_UNKNOWN,
            'CALLER_ID_SETTINGS_MASK_PROVIDED' => self::CALLER_ID_SETTINGS_MASK_PROVIDED,
        );
    }
}
}