<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * ParticipantType enum
 */
final class ParticipantType
{
    const PARTICIPANT_TYPE_UNKNOWN = 0;
    const PARTICIPANT_TYPE_GAIA = 2;
    const PARTICIPANT_TYPE_GOOGLE_VOICE = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'PARTICIPANT_TYPE_UNKNOWN' => self::PARTICIPANT_TYPE_UNKNOWN,
            'PARTICIPANT_TYPE_GAIA' => self::PARTICIPANT_TYPE_GAIA,
            'PARTICIPANT_TYPE_GOOGLE_VOICE' => self::PARTICIPANT_TYPE_GOOGLE_VOICE,
        );
    }
}
}