<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * BlockState enum
 */
final class BlockState
{
    const BLOCK_STATE_UNKNOWN = 0;
    const BLOCK_STATE_BLOCK = 1;
    const BLOCK_STATE_UNBLOCK = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'BLOCK_STATE_UNKNOWN' => self::BLOCK_STATE_UNKNOWN,
            'BLOCK_STATE_BLOCK' => self::BLOCK_STATE_BLOCK,
            'BLOCK_STATE_UNBLOCK' => self::BLOCK_STATE_UNBLOCK,
        );
    }
}
}