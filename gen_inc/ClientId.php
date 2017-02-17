<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * ClientId enum
 */
final class ClientId
{
    const CLIENT_ID_UNKNOWN = 0;
    const CLIENT_ID_ANDROID = 1;
    const CLIENT_ID_IOS = 2;
    const CLIENT_ID_CHROME = 3;
    const CLIENT_ID_WEB_GPLUS = 5;
    const CLIENT_ID_WEB_GMAIL = 6;
    const CLIENT_ID_ULTRAVIOLET = 13;
    const CLIENT_ID_WEB_HANGOUTS = 44;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'CLIENT_ID_UNKNOWN' => self::CLIENT_ID_UNKNOWN,
            'CLIENT_ID_ANDROID' => self::CLIENT_ID_ANDROID,
            'CLIENT_ID_IOS' => self::CLIENT_ID_IOS,
            'CLIENT_ID_CHROME' => self::CLIENT_ID_CHROME,
            'CLIENT_ID_WEB_GPLUS' => self::CLIENT_ID_WEB_GPLUS,
            'CLIENT_ID_WEB_GMAIL' => self::CLIENT_ID_WEB_GMAIL,
            'CLIENT_ID_ULTRAVIOLET' => self::CLIENT_ID_ULTRAVIOLET,
            'CLIENT_ID_WEB_HANGOUTS' => self::CLIENT_ID_WEB_HANGOUTS,
        );
    }
}
}