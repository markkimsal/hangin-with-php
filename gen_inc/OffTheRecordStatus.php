<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * OffTheRecordStatus enum
 */
final class OffTheRecordStatus
{
    const OFF_THE_RECORD_STATUS_UNKNOWN = 0;
    const OFF_THE_RECORD_STATUS_OFF_THE_RECORD = 1;
    const OFF_THE_RECORD_STATUS_ON_THE_RECORD = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'OFF_THE_RECORD_STATUS_UNKNOWN' => self::OFF_THE_RECORD_STATUS_UNKNOWN,
            'OFF_THE_RECORD_STATUS_OFF_THE_RECORD' => self::OFF_THE_RECORD_STATUS_OFF_THE_RECORD,
            'OFF_THE_RECORD_STATUS_ON_THE_RECORD' => self::OFF_THE_RECORD_STATUS_ON_THE_RECORD,
        );
    }
}
}