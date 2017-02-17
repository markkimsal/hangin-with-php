<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * ConversationParticipantData message
 */
class ConversationParticipantData extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const FALLBACK_NAME = 2;
    const INVITATION_STATUS = 3;
    const PARTICIPANT_TYPE = 5;
    const NEW_INVITATION_STATUS = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => '\ParticipantId'
        ),
        self::FALLBACK_NAME => array(
            'name' => 'fallback_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::INVITATION_STATUS => array(
            'name' => 'invitation_status',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PARTICIPANT_TYPE => array(
            'name' => 'participant_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEW_INVITATION_STATUS => array(
            'name' => 'new_invitation_status',
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
        $this->values[self::FALLBACK_NAME] = null;
        $this->values[self::INVITATION_STATUS] = null;
        $this->values[self::PARTICIPANT_TYPE] = null;
        $this->values[self::NEW_INVITATION_STATUS] = null;
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
     * Sets value of 'fallback_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFallbackName($value)
    {
        return $this->set(self::FALLBACK_NAME, $value);
    }

    /**
     * Returns value of 'fallback_name' property
     *
     * @return string
     */
    public function getFallbackName()
    {
        $value = $this->get(self::FALLBACK_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'invitation_status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setInvitationStatus($value)
    {
        return $this->set(self::INVITATION_STATUS, $value);
    }

    /**
     * Returns value of 'invitation_status' property
     *
     * @return integer
     */
    public function getInvitationStatus()
    {
        $value = $this->get(self::INVITATION_STATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'participant_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setParticipantType($value)
    {
        return $this->set(self::PARTICIPANT_TYPE, $value);
    }

    /**
     * Returns value of 'participant_type' property
     *
     * @return integer
     */
    public function getParticipantType()
    {
        $value = $this->get(self::PARTICIPANT_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'new_invitation_status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNewInvitationStatus($value)
    {
        return $this->set(self::NEW_INVITATION_STATUS, $value);
    }

    /**
     * Returns value of 'new_invitation_status' property
     *
     * @return integer
     */
    public function getNewInvitationStatus()
    {
        $value = $this->get(self::NEW_INVITATION_STATUS);
        return $value === null ? (integer)$value : $value;
    }
}
}