<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * DeviceStatus message
 */
class DeviceStatus extends \ProtobufMessage
{
    /* Field index constants */
    const MOBILE = 1;
    const DESKTOP = 2;
    const TABLET = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MOBILE => array(
            'name' => 'mobile',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::DESKTOP => array(
            'name' => 'desktop',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::TABLET => array(
            'name' => 'tablet',
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
        $this->values[self::MOBILE] = null;
        $this->values[self::DESKTOP] = null;
        $this->values[self::TABLET] = null;
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
     * Sets value of 'mobile' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setMobile($value)
    {
        return $this->set(self::MOBILE, $value);
    }

    /**
     * Returns value of 'mobile' property
     *
     * @return boolean
     */
    public function getMobile()
    {
        $value = $this->get(self::MOBILE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'desktop' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setDesktop($value)
    {
        return $this->set(self::DESKTOP, $value);
    }

    /**
     * Returns value of 'desktop' property
     *
     * @return boolean
     */
    public function getDesktop()
    {
        $value = $this->get(self::DESKTOP);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'tablet' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setTablet($value)
    {
        return $this->set(self::TABLET, $value);
    }

    /**
     * Returns value of 'tablet' property
     *
     * @return boolean
     */
    public function getTablet()
    {
        $value = $this->get(self::TABLET);
        return $value === null ? (boolean)$value : $value;
    }
}
}