<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * DesktopOffState message
 */
class DesktopOffState extends \ProtobufMessage
{
    /* Field index constants */
    const DESKTOP_OFF = 1;
    const VERSION = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DESKTOP_OFF => array(
            'name' => 'desktop_off',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::VERSION => array(
            'name' => 'version',
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
        $this->values[self::DESKTOP_OFF] = null;
        $this->values[self::VERSION] = null;
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

    /**
     * Sets value of 'version' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVersion($value)
    {
        return $this->set(self::VERSION, $value);
    }

    /**
     * Returns value of 'version' property
     *
     * @return integer
     */
    public function getVersion()
    {
        $value = $this->get(self::VERSION);
        return $value === null ? (integer)$value : $value;
    }
}
}