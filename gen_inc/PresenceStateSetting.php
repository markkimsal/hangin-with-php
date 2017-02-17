<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * PresenceStateSetting message
 */
class PresenceStateSetting extends \ProtobufMessage
{
    /* Field index constants */
    const TIMEOUT_SECS = 1;
    const TYPE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TIMEOUT_SECS => array(
            'name' => 'timeout_secs',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TYPE => array(
            'name' => 'type',
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
        $this->values[self::TIMEOUT_SECS] = null;
        $this->values[self::TYPE] = null;
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
     * Sets value of 'timeout_secs' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimeoutSecs($value)
    {
        return $this->set(self::TIMEOUT_SECS, $value);
    }

    /**
     * Returns value of 'timeout_secs' property
     *
     * @return integer
     */
    public function getTimeoutSecs()
    {
        $value = $this->get(self::TIMEOUT_SECS);
        return $value === null ? (integer)$value : $value;
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
}
}