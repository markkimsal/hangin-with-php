<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * SoundState enum
 */
final class SoundState
{
    const SOUND_STATE_UNKNOWN = 0;
    const SOUND_STATE_ON = 1;
    const SOUND_STATE_OFF = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'SOUND_STATE_UNKNOWN' => self::SOUND_STATE_UNKNOWN,
            'SOUND_STATE_ON' => self::SOUND_STATE_ON,
            'SOUND_STATE_OFF' => self::SOUND_STATE_OFF,
        );
    }
}
}