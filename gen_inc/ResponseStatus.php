<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * ResponseStatus enum
 */
final class ResponseStatus
{
    const RESPONSE_STATUS_UNKNOWN = 0;
    const RESPONSE_STATUS_OK = 1;
    const RESPONSE_STATUS_UNEXPECTED_ERROR = 3;
    const RESPONSE_STATUS_INVALID_REQUEST = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'RESPONSE_STATUS_UNKNOWN' => self::RESPONSE_STATUS_UNKNOWN,
            'RESPONSE_STATUS_OK' => self::RESPONSE_STATUS_OK,
            'RESPONSE_STATUS_UNEXPECTED_ERROR' => self::RESPONSE_STATUS_UNEXPECTED_ERROR,
            'RESPONSE_STATUS_INVALID_REQUEST' => self::RESPONSE_STATUS_INVALID_REQUEST,
        );
    }
}
}