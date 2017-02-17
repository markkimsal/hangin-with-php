<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * SegmentType enum
 */
final class SegmentType
{
    const SEGMENT_TYPE_TEXT = 0;
    const SEGMENT_TYPE_LINE_BREAK = 1;
    const SEGMENT_TYPE_LINK = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'SEGMENT_TYPE_TEXT' => self::SEGMENT_TYPE_TEXT,
            'SEGMENT_TYPE_LINE_BREAK' => self::SEGMENT_TYPE_LINE_BREAK,
            'SEGMENT_TYPE_LINK' => self::SEGMENT_TYPE_LINK,
        );
    }
}
}