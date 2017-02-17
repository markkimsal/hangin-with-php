<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * ItemType enum
 */
final class ItemType
{
    const ITEM_TYPE_THING = 0;
    const ITEM_TYPE_PLUS_PHOTO = 249;
    const ITEM_TYPE_PLACE = 335;
    const ITEM_TYPE_PLACE_V2 = 340;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'ITEM_TYPE_THING' => self::ITEM_TYPE_THING,
            'ITEM_TYPE_PLUS_PHOTO' => self::ITEM_TYPE_PLUS_PHOTO,
            'ITEM_TYPE_PLACE' => self::ITEM_TYPE_PLACE,
            'ITEM_TYPE_PLACE_V2' => self::ITEM_TYPE_PLACE_V2,
        );
    }
}
}