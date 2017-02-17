<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * Place message
 */
class Place extends \ProtobufMessage
{
    /* Field index constants */
    const URL = 1;
    const NAME = 3;
    const REPRESENTATIVE_IMAGE = 185;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::URL => array(
            'name' => 'url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REPRESENTATIVE_IMAGE => array(
            'name' => 'representative_image',
            'required' => false,
            'type' => '\Place_RepresentativeImage'
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
        $this->values[self::NAME] = null;
        $this->values[self::REPRESENTATIVE_IMAGE] = null;
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
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        $value = $this->get(self::NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'representative_image' property
     *
     * @param \Place_RepresentativeImage $value Property value
     *
     * @return null
     */
    public function setRepresentativeImage(\Place_RepresentativeImage $value=null)
    {
        return $this->set(self::REPRESENTATIVE_IMAGE, $value);
    }

    /**
     * Returns value of 'representative_image' property
     *
     * @return \Place_RepresentativeImage
     */
    public function getRepresentativeImage()
    {
        return $this->get(self::REPRESENTATIVE_IMAGE);
    }
}
}