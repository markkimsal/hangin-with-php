<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * TypingType enum
 */
final class TypingType
{
    const TYPING_TYPE_UNKNOWN = 0;
    const TYPING_TYPE_STARTED = 1;
    const TYPING_TYPE_PAUSED = 2;
    const TYPING_TYPE_STOPPED = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'TYPING_TYPE_UNKNOWN' => self::TYPING_TYPE_UNKNOWN,
            'TYPING_TYPE_STARTED' => self::TYPING_TYPE_STARTED,
            'TYPING_TYPE_PAUSED' => self::TYPING_TYPE_PAUSED,
            'TYPING_TYPE_STOPPED' => self::TYPING_TYPE_STOPPED,
        );
    }
}
}