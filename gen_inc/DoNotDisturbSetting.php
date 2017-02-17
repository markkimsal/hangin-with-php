<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * DoNotDisturbSetting message
 */
class DoNotDisturbSetting extends \ProtobufMessage
{
    /* Field index constants */
    const DO_NOT_DISTURB = 1;
    const EXPIRATION_TIMESTAMP = 2;
    const VERSION = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DO_NOT_DISTURB => array(
            'name' => 'do_not_disturb',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::EXPIRATION_TIMESTAMP => array(
            'name' => 'expiration_timestamp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::DO_NOT_DISTURB] = null;
        $this->values[self::EXPIRATION_TIMESTAMP] = null;
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
     * Sets value of 'do_not_disturb' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setDoNotDisturb($value)
    {
        return $this->set(self::DO_NOT_DISTURB, $value);
    }

    /**
     * Returns value of 'do_not_disturb' property
     *
     * @return boolean
     */
    public function getDoNotDisturb()
    {
        $value = $this->get(self::DO_NOT_DISTURB);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'expiration_timestamp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setExpirationTimestamp($value)
    {
        return $this->set(self::EXPIRATION_TIMESTAMP, $value);
    }

    /**
     * Returns value of 'expiration_timestamp' property
     *
     * @return integer
     */
    public function getExpirationTimestamp()
    {
        $value = $this->get(self::EXPIRATION_TIMESTAMP);
        return $value === null ? (integer)$value : $value;
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