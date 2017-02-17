<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * FocusType enum
 */
final class FocusType
{
    const FOCUS_TYPE_UNKNOWN = 0;
    const FOCUS_TYPE_FOCUSED = 1;
    const FOCUS_TYPE_UNFOCUSED = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'FOCUS_TYPE_UNKNOWN' => self::FOCUS_TYPE_UNKNOWN,
            'FOCUS_TYPE_FOCUSED' => self::FOCUS_TYPE_FOCUSED,
            'FOCUS_TYPE_UNFOCUSED' => self::FOCUS_TYPE_UNFOCUSED,
        );
    }
}
}