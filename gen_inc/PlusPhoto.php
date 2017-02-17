<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * PlusPhoto message
 */
class PlusPhoto extends \ProtobufMessage
{
    /* Field index constants */
    const THUMBNAIL = 1;
    const OWNER_OBFUSCATED_ID = 2;
    const ALBUM_ID = 3;
    const PHOTO_ID = 4;
    const URL = 6;
    const ORIGINAL_CONTENT_URL = 10;
    const MEDIA_TYPE = 13;
    const STREAM_ID = 14;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::THUMBNAIL => array(
            'name' => 'thumbnail',
            'required' => false,
            'type' => '\PlusPhoto_Thumbnail'
        ),
        self::OWNER_OBFUSCATED_ID => array(
            'name' => 'owner_obfuscated_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ALBUM_ID => array(
            'name' => 'album_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PHOTO_ID => array(
            'name' => 'photo_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::URL => array(
            'name' => 'url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ORIGINAL_CONTENT_URL => array(
            'name' => 'original_content_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MEDIA_TYPE => array(
            'name' => 'media_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STREAM_ID => array(
            'name' => 'stream_id',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::THUMBNAIL] = null;
        $this->values[self::OWNER_OBFUSCATED_ID] = null;
        $this->values[self::ALBUM_ID] = null;
        $this->values[self::PHOTO_ID] = null;
        $this->values[self::URL] = null;
        $this->values[self::ORIGINAL_CONTENT_URL] = null;
        $this->values[self::MEDIA_TYPE] = null;
        $this->values[self::STREAM_ID] = array();
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
     * Sets value of 'thumbnail' property
     *
     * @param \PlusPhoto_Thumbnail $value Property value
     *
     * @return null
     */
    public function setThumbnail(\PlusPhoto_Thumbnail $value=null)
    {
        return $this->set(self::THUMBNAIL, $value);
    }

    /**
     * Returns value of 'thumbnail' property
     *
     * @return \PlusPhoto_Thumbnail
     */
    public function getThumbnail()
    {
        return $this->get(self::THUMBNAIL);
    }

    /**
     * Sets value of 'owner_obfuscated_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOwnerObfuscatedId($value)
    {
        return $this->set(self::OWNER_OBFUSCATED_ID, $value);
    }

    /**
     * Returns value of 'owner_obfuscated_id' property
     *
     * @return string
     */
    public function getOwnerObfuscatedId()
    {
        $value = $this->get(self::OWNER_OBFUSCATED_ID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'album_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAlbumId($value)
    {
        return $this->set(self::ALBUM_ID, $value);
    }

    /**
     * Returns value of 'album_id' property
     *
     * @return string
     */
    public function getAlbumId()
    {
        $value = $this->get(self::ALBUM_ID);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUrl($value)
    {
        return $this->set(self::URL, $value);
    }

    /**
     * Returns value of 'url' property
     *
     * @return string
     */
    public function getUrl()
    {
        $value = $this->get(self::URL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'original_content_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOriginalContentUrl($value)
    {
        return $this->set(self::ORIGINAL_CONTENT_URL, $value);
    }

    /**
     * Returns value of 'original_content_url' property
     *
     * @return string
     */
    public function getOriginalContentUrl()
    {
        $value = $this->get(self::ORIGINAL_CONTENT_URL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'media_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMediaType($value)
    {
        return $this->set(self::MEDIA_TYPE, $value);
    }

    /**
     * Returns value of 'media_type' property
     *
     * @return integer
     */
    public function getMediaType()
    {
        $value = $this->get(self::MEDIA_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'stream_id' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendStreamId($value)
    {
        return $this->append(self::STREAM_ID, $value);
    }

    /**
     * Clears 'stream_id' list
     *
     * @return null
     */
    public function clearStreamId()
    {
        return $this->clear(self::STREAM_ID);
    }

    /**
     * Returns 'stream_id' list
     *
     * @return string[]
     */
    public function getStreamId()
    {
        return $this->get(self::STREAM_ID);
    }

    /**
     * Returns 'stream_id' iterator
     *
     * @return \ArrayIterator
     */
    public function getStreamIdIterator()
    {
        return new \ArrayIterator($this->get(self::STREAM_ID));
    }

    /**
     * Returns element from 'stream_id' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getStreamIdAt($offset)
    {
        return $this->get(self::STREAM_ID, $offset);
    }

    /**
     * Returns count of 'stream_id' list
     *
     * @return int
     */
    public function getStreamIdCount()
    {
        return $this->count(self::STREAM_ID);
    }
}
}