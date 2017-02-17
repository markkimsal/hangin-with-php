<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * PresenceResult message
 */
class PresenceResult extends \ProtobufMessage
{
    /* Field index constants */
    const USER_ID = 1;
    const PRESENCE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::USER_ID => array(
            'name' => 'user_id',
            'required' => false,
            'type' => '\ParticipantId'
        ),
        self::PRESENCE => array(
            'name' => 'presence',
            'required' => false,
            'type' => '\Presence'
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
        $this->values[self::USER_ID] = null;
        $this->values[self::PRESENCE] = null;
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
     * Sets value of 'user_id' property
     *
     * @param \ParticipantId $value Property value
     *
     * @return null
     */
    public function setUserId(\ParticipantId $value=null)
    {
        return $this->set(self::USER_ID, $value);
    }

    /**
     * Returns value of 'user_id' property
     *
     * @return \ParticipantId
     */
    public function getUserId()
    {
        return $this->get(self::USER_ID);
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
}
}