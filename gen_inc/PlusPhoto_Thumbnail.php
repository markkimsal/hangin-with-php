<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * Thumbnail message embedded in PlusPhoto message
 */
class PlusPhoto_Thumbnail extends \ProtobufMessage
{
    /* Field index constants */
    const URL = 1;
    const IMAGE_URL = 4;
    const WIDTH_PX = 10;
    const HEIGHT_PX = 11;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::URL => array(
            'name' => 'url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::IMAGE_URL => array(
            'name' => 'image_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::WIDTH_PX => array(
            'name' => 'width_px',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HEIGHT_PX => array(
            'name' => 'height_px',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::URL] = null;
        $this->values[self::IMAGE_URL] = null;
        $this->values[self::WIDTH_PX] = null;
        $this->values[self::HEIGHT_PX] = null;
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
     * Sets value of 'image_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setImageUrl($value)
    {
        return $this->set(self::IMAGE_URL, $value);
    }

    /**
     * Returns value of 'image_url' property
     *
     * @return string
     */
    public function getImageUrl()
    {
        $value = $this->get(self::IMAGE_URL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'width_px' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWidthPx($value)
    {
        return $this->set(self::WIDTH_PX, $value);
    }

    /**
     * Returns value of 'width_px' property
     *
     * @return integer
     */
    public function getWidthPx()
    {
        $value = $this->get(self::WIDTH_PX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'height_px' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHeightPx($value)
    {
        return $this->set(self::HEIGHT_PX, $value);
    }

    /**
     * Returns value of 'height_px' property
     *
     * @return integer
     */
    public function getHeightPx()
    {
        $value = $this->get(self::HEIGHT_PX);
        return $value === null ? (integer)$value : $value;
    }
}
}