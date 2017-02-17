<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * Photo message
 */
class Photo extends \ProtobufMessage
{
    /* Field index constants */
    const PHOTO_ID = 1;
    const DELETE_ALBUMLESS_SOURCE_PHOTO = 2;
    const USER_ID = 3;
    const IS_CUSTOM_USER_ID = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PHOTO_ID => array(
            'name' => 'photo_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DELETE_ALBUMLESS_SOURCE_PHOTO => array(
            'name' => 'delete_albumless_source_photo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::USER_ID => array(
            'name' => 'user_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::IS_CUSTOM_USER_ID => array(
            'name' => 'is_custom_user_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::PHOTO_ID] = null;
        $this->values[self::DELETE_ALBUMLESS_SOURCE_PHOTO] = null;
        $this->values[self::USER_ID] = null;
        $this->values[self::IS_CUSTOM_USER_ID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'photo_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPhotoId($value)
    {
        return $this->set(self::PHOTO_ID, $value);
    }

    /**
     * Returns value of 'photo_id' property
     *
     * @return string
     */
    public function getPhotoId()
    {
        $value = $this->get(self::PHOTO_ID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'delete_albumless_source_photo' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setDeleteAlbumlessSourcePhoto($value)
    {
        return $this->set(self::DELETE_ALBUMLESS_SOURCE_PHOTO, $value);
    }

    /**
     * Returns value of 'delete_albumless_source_photo' property
     *
     * @return boolean
     */
    public function getDeleteAlbumlessSourcePhoto()
    {
        $value = $this->get(self::DELETE_ALBUMLESS_SOURCE_PHOTO);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'user_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUserId($value)
    {
        return $this->set(self::USER_ID, $value);
    }

    /**
     * Returns value of 'user_id' property
     *
     * @return string
     */
    public function getUserId()
    {
        $value = $this->get(self::USER_ID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'is_custom_user_id' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsCustomUserId($value)
    {
        return $this->set(self::IS_CUSTOM_USER_ID, $value);
    }

    /**
     * Returns value of 'is_custom_user_id' property
     *
     * @return boolean
     */
    public function getIsCustomUserId()
    {
        $value = $this->get(self::IS_CUSTOM_USER_ID);
        return $value === null ? (boolean)$value : $value;
    }
}
}