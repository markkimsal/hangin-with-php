<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * Entity message
 */
class Entity extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 9;
    const PRESENCE = 8;
    const PROPERTIES = 10;
    const ENTITY_TYPE = 13;
    const HAD_PAST_HANGOUT_STATE = 16;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => '\ParticipantId'
        ),
        self::PRESENCE => array(
            'name' => 'presence',
            'required' => false,
            'type' => '\Presence'
        ),
        self::PROPERTIES => array(
            'name' => 'properties',
            'required' => false,
            'type' => '\EntityProperties'
        ),
        self::ENTITY_TYPE => array(
            'name' => 'entity_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HAD_PAST_HANGOUT_STATE => array(
            'name' => 'had_past_hangout_state',
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
        $this->values[self::ID] = null;
        $this->values[self::PRESENCE] = null;
        $this->values[self::PROPERTIES] = null;
        $this->values[self::ENTITY_TYPE] = null;
        $this->values[self::HAD_PAST_HANGOUT_STATE] = null;
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
     * Sets value of 'id' property
     *
     * @param \ParticipantId $value Property value
     *
     * @return null
     */
    public function setId(\ParticipantId $value=null)
    {
        return $this->set(self::ID, $value);
    }

    /**
     * Returns value of 'id' property
     *
     * @return \ParticipantId
     */
    public function getId()
    {
        return $this->get(self::ID);
    }

    /**
     * Sets value of 'presence' property
     *
     * @param \Presence $value Property value
     *
     * @return null
     */
    public function setPresence(\Presence $value=null)
    {
        return $this->set(self::PRESENCE, $value);
    }

    /**
     * Returns value of 'presence' property
     *
     * @return \Presence
     */
    public function getPresence()
    {
        return $this->get(self::PRESENCE);
    }

    /**
     * Sets value of 'properties' property
     *
     * @param \EntityProperties $value Property value
     *
     * @return null
     */
    public function setProperties(\EntityProperties $value=null)
    {
        return $this->set(self::PROPERTIES, $value);
    }

    /**
     * Returns value of 'properties' property
     *
     * @return \EntityProperties
     */
    public function getProperties()
    {
        return $this->get(self::PROPERTIES);
    }

    /**
     * Sets value of 'entity_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEntityType($value)
    {
        return $this->set(self::ENTITY_TYPE, $value);
    }

    /**
     * Returns value of 'entity_type' property
     *
     * @return integer
     */
    public function getEntityType()
    {
        $value = $this->get(self::ENTITY_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'had_past_hangout_state' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHadPastHangoutState($value)
    {
        return $this->set(self::HAD_PAST_HANGOUT_STATE, $value);
    }

    /**
     * Returns value of 'had_past_hangout_state' property
     *
     * @return integer
     */
    public function getHadPastHangoutState()
    {
        $value = $this->get(self::HAD_PAST_HANGOUT_STATE);
        return $value === null ? (integer)$value : $value;
    }
}
}