<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * Gender enum
 */
final class Gender
{
    const GENDER_UNKNOWN = 0;
    const GENDER_MALE = 1;
    const GENDER_FEMALE = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'GENDER_UNKNOWN' => self::GENDER_UNKNOWN,
            'GENDER_MALE' => self::GENDER_MALE,
            'GENDER_FEMALE' => self::GENDER_FEMALE,
        );
    }
}
}