<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * RichPresenceEnabledState message
 */
class RichPresenceEnabledState extends \ProtobufMessage
{
    /* Field index constants */
    const TYPE = 1;
    const ENABLED = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ENABLED => array(
            'name' => 'enabled',
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
        $this->values[self::TYPE] = null;
        $this->values[self::ENABLED] = null;
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
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'enabled' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setEnabled($value)
    {
        return $this->set(self::ENABLED, $value);
    }

    /**
     * Returns value of 'enabled' property
     *
     * @return boolean
     */
    public function getEnabled()
    {
        $value = $this->get(self::ENABLED);
        return $value === null ? (boolean)$value : $value;
    }
}
}