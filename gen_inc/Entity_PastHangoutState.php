<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * PastHangoutState enum embedded in Entity message
 */
final class Entity_PastHangoutState
{
    const PAST_HANGOUT_STATE_UNKNOWN = 0;
    const PAST_HANGOUT_STATE_HAD_PAST_HANGOUT = 1;
    const PAST_HANGOUT_STATE_NO_PAST_HANGOUT = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'PAST_HANGOUT_STATE_UNKNOWN' => self::PAST_HANGOUT_STATE_UNKNOWN,
            'PAST_HANGOUT_STATE_HAD_PAST_HANGOUT' => self::PAST_HANGOUT_STATE_HAD_PAST_HANGOUT,
            'PAST_HANGOUT_STATE_NO_PAST_HANGOUT' => self::PAST_HANGOUT_STATE_NO_PAST_HANGOUT,
        );
    }
}
}