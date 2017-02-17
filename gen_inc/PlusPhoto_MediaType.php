<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * MediaType enum embedded in PlusPhoto message
 */
final class PlusPhoto_MediaType
{
    const MEDIA_TYPE_UNKNOWN = 0;
    const MEDIA_TYPE_PHOTO = 1;
    const MEDIA_TYPE_ANIMATED_PHOTO = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'MEDIA_TYPE_UNKNOWN' => self::MEDIA_TYPE_UNKNOWN,
            'MEDIA_TYPE_PHOTO' => self::MEDIA_TYPE_PHOTO,
            'MEDIA_TYPE_ANIMATED_PHOTO' => self::MEDIA_TYPE_ANIMATED_PHOTO,
        );
    }
}
}