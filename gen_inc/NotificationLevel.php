<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * NotificationLevel enum
 */
final class NotificationLevel
{
    const NOTIFICATION_LEVEL_UNKNOWN = 0;
    const NOTIFICATION_LEVEL_QUIET = 10;
    const NOTIFICATION_LEVEL_RING = 30;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'NOTIFICATION_LEVEL_UNKNOWN' => self::NOTIFICATION_LEVEL_UNKNOWN,
            'NOTIFICATION_LEVEL_QUIET' => self::NOTIFICATION_LEVEL_QUIET,
            'NOTIFICATION_LEVEL_RING' => self::NOTIFICATION_LEVEL_RING,
        );
    }
}
}