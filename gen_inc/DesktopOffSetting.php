<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * DesktopOffSetting message
 */
class DesktopOffSetting extends \ProtobufMessage
{
    /* Field index constants */
    const DESKTOP_OFF = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DESKTOP_OFF => array(
            'name' => 'desktop_off',
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
        $this->values[self::DESKTOP_OFF] = null;
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
     * Sets value of 'desktop_off' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setDesktopOff($value)
    {
        return $this->set(self::DESKTOP_OFF, $value);
    }

    /**
     * Returns value of 'desktop_off' property
     *
     * @return boolean
     */
    public function getDesktopOff()
    {
        $value = $this->get(self::DESKTOP_OFF);
        return $value === null ? (boolean)$value : $value;
    }
}
}