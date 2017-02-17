<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * ConfigurationBit message
 */
class ConfigurationBit extends \ProtobufMessage
{
    /* Field index constants */
    const CONFIGURATION_BIT_TYPE = 1;
    const VALUE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONFIGURATION_BIT_TYPE => array(
            'name' => 'configuration_bit_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VALUE => array(
            'name' => 'value',
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
        $this->values[self::CONFIGURATION_BIT_TYPE] = null;
        $this->values[self::VALUE] = null;
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
     * Sets value of 'configuration_bit_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setConfigurationBitType($value)
    {
        return $this->set(self::CONFIGURATION_BIT_TYPE, $value);
    }

    /**
     * Returns value of 'configuration_bit_type' property
     *
     * @return integer
     */
    public function getConfigurationBitType()
    {
        $value = $this->get(self::CONFIGURATION_BIT_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'value' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setValue($value)
    {
        return $this->set(self::VALUE, $value);
    }

    /**
     * Returns value of 'value' property
     *
     * @return boolean
     */
    public function getValue()
    {
        $value = $this->get(self::VALUE);
        return $value === null ? (boolean)$value : $value;
    }
}
}