<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * ActiveClientState enum
 */
final class ActiveClientState
{
    const ACTIVE_CLIENT_STATE_NO_ACTIVE = 0;
    const ACTIVE_CLIENT_STATE_IS_ACTIVE = 1;
    const ACTIVE_CLIENT_STATE_OTHER_ACTIVE = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'ACTIVE_CLIENT_STATE_NO_ACTIVE' => self::ACTIVE_CLIENT_STATE_NO_ACTIVE,
            'ACTIVE_CLIENT_STATE_IS_ACTIVE' => self::ACTIVE_CLIENT_STATE_IS_ACTIVE,
            'ACTIVE_CLIENT_STATE_OTHER_ACTIVE' => self::ACTIVE_CLIENT_STATE_OTHER_ACTIVE,
        );
    }
}
}