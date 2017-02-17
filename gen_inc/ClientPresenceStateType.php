<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * ClientPresenceStateType enum
 */
final class ClientPresenceStateType
{
    const CLIENT_PRESENCE_STATE_UNKNOWN = 0;
    const CLIENT_PRESENCE_STATE_NONE = 1;
    const CLIENT_PRESENCE_STATE_DESKTOP_IDLE = 30;
    const CLIENT_PRESENCE_STATE_DESKTOP_ACTIVE = 40;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'CLIENT_PRESENCE_STATE_UNKNOWN' => self::CLIENT_PRESENCE_STATE_UNKNOWN,
            'CLIENT_PRESENCE_STATE_NONE' => self::CLIENT_PRESENCE_STATE_NONE,
            'CLIENT_PRESENCE_STATE_DESKTOP_IDLE' => self::CLIENT_PRESENCE_STATE_DESKTOP_IDLE,
            'CLIENT_PRESENCE_STATE_DESKTOP_ACTIVE' => self::CLIENT_PRESENCE_STATE_DESKTOP_ACTIVE,
        );
    }
}
}