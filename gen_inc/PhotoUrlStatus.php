<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * PhotoUrlStatus enum
 */
final class PhotoUrlStatus
{
    const PHOTO_URL_STATUS_UNKNOWN = 0;
    const PHOTO_URL_STATUS_PLACEHOLDER = 1;
    const PHOTO_URL_STATUS_USER_PHOTO = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'PHOTO_URL_STATUS_UNKNOWN' => self::PHOTO_URL_STATUS_UNKNOWN,
            'PHOTO_URL_STATUS_PLACEHOLDER' => self::PHOTO_URL_STATUS_PLACEHOLDER,
            'PHOTO_URL_STATUS_USER_PHOTO' => self::PHOTO_URL_STATUS_USER_PHOTO,
        );
    }
}
}