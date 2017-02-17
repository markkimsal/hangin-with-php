<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * SyncFilter enum
 */
final class SyncFilter
{
    const SYNC_FILTER_UNKNOWN = 0;
    const SYNC_FILTER_INBOX = 1;
    const SYNC_FILTER_ARCHIVED = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'SYNC_FILTER_UNKNOWN' => self::SYNC_FILTER_UNKNOWN,
            'SYNC_FILTER_INBOX' => self::SYNC_FILTER_INBOX,
            'SYNC_FILTER_ARCHIVED' => self::SYNC_FILTER_ARCHIVED,
        );
    }
}
}