<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * FieldMask enum
 */
final class FieldMask
{
    const FIELD_MASK_REACHABLE = 1;
    const FIELD_MASK_AVAILABLE = 2;
    const FIELD_MASK_MOOD = 3;
    const FIELD_MASK_IN_CALL = 6;
    const FIELD_MASK_DEVICE = 7;
    const FIELD_MASK_LAST_SEEN = 10;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'FIELD_MASK_REACHABLE' => self::FIELD_MASK_REACHABLE,
            'FIELD_MASK_AVAILABLE' => self::FIELD_MASK_AVAILABLE,
            'FIELD_MASK_MOOD' => self::FIELD_MASK_MOOD,
            'FIELD_MASK_IN_CALL' => self::FIELD_MASK_IN_CALL,
            'FIELD_MASK_DEVICE' => self::FIELD_MASK_DEVICE,
            'FIELD_MASK_LAST_SEEN' => self::FIELD_MASK_LAST_SEEN,
        );
    }
}
}