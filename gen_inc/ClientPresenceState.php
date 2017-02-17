<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * ClientPresenceState message
 */
class ClientPresenceState extends \ProtobufMessage
{
    /* Field index constants */
    const IDENTIFIER = 1;
    const STATE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::IDENTIFIER => array(
            'name' => 'identifier',
            'required' => false,
            'type' => '\ClientIdentifier'
        ),
        self::STATE => array(
            'name' => 'state',
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
        $this->values[self::IDENTIFIER] = null;
        $this->values[self::STATE] = null;
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
     * Sets value of 'identifier' property
     *
     * @param \ClientIdentifier $value Property value
     *
     * @return null
     */
    public function setIdentifier(\ClientIdentifier $value=null)
    {
        return $this->set(self::IDENTIFIER, $value);
    }

    /**
     * Returns value of 'identifier' property
     *
     * @return \ClientIdentifier
     */
    public function getIdentifier()
    {
        return $this->get(self::IDENTIFIER);
    }

    /**
     * Sets value of 'state' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setState($value)
    {
        return $this->set(self::STATE, $value);
    }

    /**
     * Returns value of 'state' property
     *
     * @return integer
     */
    public function getState()
    {
        $value = $this->get(self::STATE);
        return $value === null ? (integer)$value : $value;
    }
}
}