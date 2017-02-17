<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * GroupLinkSharingStatus enum
 */
final class GroupLinkSharingStatus
{
    const GROUP_LINK_SHARING_STATUS_UNKNOWN = 0;
    const GROUP_LINK_SHARING_STATUS_ON = 1;
    const GROUP_LINK_SHARING_STATUS_OFF = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'GROUP_LINK_SHARING_STATUS_UNKNOWN' => self::GROUP_LINK_SHARING_STATUS_UNKNOWN,
            'GROUP_LINK_SHARING_STATUS_ON' => self::GROUP_LINK_SHARING_STATUS_ON,
            'GROUP_LINK_SHARING_STATUS_OFF' => self::GROUP_LINK_SHARING_STATUS_OFF,
        );
    }
}
}