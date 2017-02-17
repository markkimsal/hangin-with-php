<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * HangoutEventType enum
 */
final class HangoutEventType
{
    const HANGOUT_EVENT_TYPE_UNKNOWN = 0;
    const HANGOUT_EVENT_TYPE_START = 1;
    const HANGOUT_EVENT_TYPE_END = 2;
    const HANGOUT_EVENT_TYPE_JOIN = 3;
    const HANGOUT_EVENT_TYPE_LEAVE = 4;
    const HANGOUT_EVENT_TYPE_COMING_SOON = 5;
    const HANGOUT_EVENT_TYPE_ONGOING = 6;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'HANGOUT_EVENT_TYPE_UNKNOWN' => self::HANGOUT_EVENT_TYPE_UNKNOWN,
            'HANGOUT_EVENT_TYPE_START' => self::HANGOUT_EVENT_TYPE_START,
            'HANGOUT_EVENT_TYPE_END' => self::HANGOUT_EVENT_TYPE_END,
            'HANGOUT_EVENT_TYPE_JOIN' => self::HANGOUT_EVENT_TYPE_JOIN,
            'HANGOUT_EVENT_TYPE_LEAVE' => self::HANGOUT_EVENT_TYPE_LEAVE,
            'HANGOUT_EVENT_TYPE_COMING_SOON' => self::HANGOUT_EVENT_TYPE_COMING_SOON,
            'HANGOUT_EVENT_TYPE_ONGOING' => self::HANGOUT_EVENT_TYPE_ONGOING,
        );
    }
}
}