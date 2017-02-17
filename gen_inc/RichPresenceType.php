<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * RichPresenceType enum
 */
final class RichPresenceType
{
    const RICH_PRESENCE_TYPE_UNKNOWN = 0;
    const RICH_PRESENCE_TYPE_IN_CALL_STATE = 1;
    const RICH_PRESENCE_TYPE_UNKNOWN_3 = 3;
    const RICH_PRESENCE_TYPE_UNKNOWN_4 = 4;
    const RICH_PRESENCE_TYPE_UNKNOWN_5 = 5;
    const RICH_PRESENCE_TYPE_DEVICE = 2;
    const RICH_PRESENCE_TYPE_LAST_SEEN = 6;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'RICH_PRESENCE_TYPE_UNKNOWN' => self::RICH_PRESENCE_TYPE_UNKNOWN,
            'RICH_PRESENCE_TYPE_IN_CALL_STATE' => self::RICH_PRESENCE_TYPE_IN_CALL_STATE,
            'RICH_PRESENCE_TYPE_UNKNOWN_3' => self::RICH_PRESENCE_TYPE_UNKNOWN_3,
            'RICH_PRESENCE_TYPE_UNKNOWN_4' => self::RICH_PRESENCE_TYPE_UNKNOWN_4,
            'RICH_PRESENCE_TYPE_UNKNOWN_5' => self::RICH_PRESENCE_TYPE_UNKNOWN_5,
            'RICH_PRESENCE_TYPE_DEVICE' => self::RICH_PRESENCE_TYPE_DEVICE,
            'RICH_PRESENCE_TYPE_LAST_SEEN' => self::RICH_PRESENCE_TYPE_LAST_SEEN,
        );
    }
}
}