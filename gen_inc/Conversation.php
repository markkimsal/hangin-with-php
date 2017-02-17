<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * Conversation message
 */
class Conversation extends \ProtobufMessage
{
    /* Field index constants */
    const CONVERSATION_ID = 1;
    const TYPE = 2;
    const NAME = 3;
    const SELF_CONVERSATION_STATE = 4;
    const READ_STATE = 8;
    const HAS_ACTIVE_HANGOUT = 9;
    const OTR_STATUS = 10;
    const OTR_TOGGLE = 11;
    const CONVERSATION_HISTORY_SUPPORTED = 12;
    const CURRENT_PARTICIPANT = 13;
    const PARTICIPANT_DATA = 14;
    const NETWORK_TYPE = 18;
    const FORCE_HISTORY_STATE = 19;
    const GROUP_LINK_SHARING_STATUS = 22;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONVERSATION_ID => array(
            'name' => 'conversation_id',
            'required' => false,
            'type' => '\ConversationId'
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SELF_CONVERSATION_STATE => array(
            'name' => 'self_conversation_state',
            'required' => false,
            'type' => '\UserConversationState'
        ),
        self::READ_STATE => array(
            'name' => 'read_state',
            'repeated' => true,
            'type' => '\UserReadState'
        ),
        self::HAS_ACTIVE_HANGOUT => array(
            'name' => 'has_active_hangout',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::OTR_STATUS => array(
            'name' => 'otr_status',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OTR_TOGGLE => array(
            'name' => 'otr_toggle',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONVERSATION_HISTORY_SUPPORTED => array(
            'name' => 'conversation_history_supported',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::CURRENT_PARTICIPANT => array(
            'name' => 'current_participant',
            'repeated' => true,
            'type' => '\ParticipantId'
        ),
        self::PARTICIPANT_DATA => array(
            'name' => 'participant_data',
            'repeated' => true,
            'type' => '\ConversationParticipantData'
        ),
        self::NETWORK_TYPE => array(
            'name' => 'network_type',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FORCE_HISTORY_STATE => array(
            'name' => 'force_history_state',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GROUP_LINK_SHARING_STATUS => array(
            'name' => 'group_link_sharing_status',
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
        $this->values[self::CONVERSATION_ID] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::NAME] = null;
        $this->values[self::SELF_CONVERSATION_STATE] = null;
        $this->values[self::READ_STATE] = array();
        $this->values[self::HAS_ACTIVE_HANGOUT] = null;
        $this->values[self::OTR_STATUS] = null;
        $this->values[self::OTR_TOGGLE] = null;
        $this->values[self::CONVERSATION_HISTORY_SUPPORTED] = null;
        $this->values[self::CURRENT_PARTICIPANT] = array();
        $this->values[self::PARTICIPANT_DATA] = array();
        $this->values[self::NETWORK_TYPE] = array();
        $this->values[self::FORCE_HISTORY_STATE] = null;
        $this->values[self::GROUP_LINK_SHARING_STATUS] = null;
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
     * Sets value of 'conversation_id' property
     *
     * @param \ConversationId $value Property value
     *
     * @return null
     */
    public function setConversationId(\ConversationId $value=null)
    {
        return $this->set(self::CONVERSATION_ID, $value);
    }

    /**
     * Returns value of 'conversation_id' property
     *
     * @return \ConversationId
     */
    public function getConversationId()
    {
        return $this->get(self::CONVERSATION_ID);
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
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        $value = $this->get(self::NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'self_conversation_state' property
     *
     * @param \UserConversationState $value Property value
     *
     * @return null
     */
    public function setSelfConversationState(\UserConversationState $value=null)
    {
        return $this->set(self::SELF_CONVERSATION_STATE, $value);
    }

    /**
     * Returns value of 'self_conversation_state' property
     *
     * @return \UserConversationState
     */
    public function getSelfConversationState()
    {
        return $this->get(self::SELF_CONVERSATION_STATE);
    }

    /**
     * Appends value to 'read_state' list
     *
     * @param \UserReadState $value Value to append
     *
     * @return null
     */
    public function appendReadState(\UserReadState $value)
    {
        return $this->append(self::READ_STATE, $value);
    }

    /**
     * Clears 'read_state' list
     *
     * @return null
     */
    public function clearReadState()
    {
        return $this->clear(self::READ_STATE);
    }

    /**
     * Returns 'read_state' list
     *
     * @return \UserReadState[]
     */
    public function getReadState()
    {
        return $this->get(self::READ_STATE);
    }

    /**
     * Returns 'read_state' iterator
     *
     * @return \ArrayIterator
     */
    public function getReadStateIterator()
    {
        return new \ArrayIterator($this->get(self::READ_STATE));
    }

    /**
     * Returns element from 'read_state' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \UserReadState
     */
    public function getReadStateAt($offset)
    {
        return $this->get(self::READ_STATE, $offset);
    }

    /**
     * Returns count of 'read_state' list
     *
     * @return int
     */
    public function getReadStateCount()
    {
        return $this->count(self::READ_STATE);
    }

    /**
     * Sets value of 'has_active_hangout' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setHasActiveHangout($value)
    {
        return $this->set(self::HAS_ACTIVE_HANGOUT, $value);
    }

    /**
     * Returns value of 'has_active_hangout' property
     *
     * @return boolean
     */
    public function getHasActiveHangout()
    {
        $value = $this->get(self::HAS_ACTIVE_HANGOUT);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'otr_status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOtrStatus($value)
    {
        return $this->set(self::OTR_STATUS, $value);
    }

    /**
     * Returns value of 'otr_status' property
     *
     * @return integer
     */
    public function getOtrStatus()
    {
        $value = $this->get(self::OTR_STATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'otr_toggle' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOtrToggle($value)
    {
        return $this->set(self::OTR_TOGGLE, $value);
    }

    /**
     * Returns value of 'otr_toggle' property
     *
     * @return integer
     */
    public function getOtrToggle()
    {
        $value = $this->get(self::OTR_TOGGLE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'conversation_history_supported' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setConversationHistorySupported($value)
    {
        return $this->set(self::CONVERSATION_HISTORY_SUPPORTED, $value);
    }

    /**
     * Returns value of 'conversation_history_supported' property
     *
     * @return boolean
     */
    public function getConversationHistorySupported()
    {
        $value = $this->get(self::CONVERSATION_HISTORY_SUPPORTED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Appends value to 'current_participant' list
     *
     * @param \ParticipantId $value Value to append
     *
     * @return null
     */
    public function appendCurrentParticipant(\ParticipantId $value)
    {
        return $this->append(self::CURRENT_PARTICIPANT, $value);
    }

    /**
     * Clears 'current_participant' list
     *
     * @return null
     */
    public function clearCurrentParticipant()
    {
        return $this->clear(self::CURRENT_PARTICIPANT);
    }

    /**
     * Returns 'current_participant' list
     *
     * @return \ParticipantId[]
     */
    public function getCurrentParticipant()
    {
        return $this->get(self::CURRENT_PARTICIPANT);
    }

    /**
     * Returns 'current_participant' iterator
     *
     * @return \ArrayIterator
     */
    public function getCurrentParticipantIterator()
    {
        return new \ArrayIterator($this->get(self::CURRENT_PARTICIPANT));
    }

    /**
     * Returns element from 'current_participant' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \ParticipantId
     */
    public function getCurrentParticipantAt($offset)
    {
        return $this->get(self::CURRENT_PARTICIPANT, $offset);
    }

    /**
     * Returns count of 'current_participant' list
     *
     * @return int
     */
    public function getCurrentParticipantCount()
    {
        return $this->count(self::CURRENT_PARTICIPANT);
    }

    /**
     * Appends value to 'participant_data' list
     *
     * @param \ConversationParticipantData $value Value to append
     *
     * @return null
     */
    public function appendParticipantData(\ConversationParticipantData $value)
    {
        return $this->append(self::PARTICIPANT_DATA, $value);
    }

    /**
     * Clears 'participant_data' list
     *
     * @return null
     */
    public function clearParticipantData()
    {
        return $this->clear(self::PARTICIPANT_DATA);
    }

    /**
     * Returns 'participant_data' list
     *
     * @return \ConversationParticipantData[]
     */
    public function getParticipantData()
    {
        return $this->get(self::PARTICIPANT_DATA);
    }

    /**
     * Returns 'participant_data' iterator
     *
     * @return \ArrayIterator
     */
    public function getParticipantDataIterator()
    {
        return new \ArrayIterator($this->get(self::PARTICIPANT_DATA));
    }

    /**
     * Returns element from 'participant_data' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \ConversationParticipantData
     */
    public function getParticipantDataAt($offset)
    {
        return $this->get(self::PARTICIPANT_DATA, $offset);
    }

    /**
     * Returns count of 'participant_data' list
     *
     * @return int
     */
    public function getParticipantDataCount()
    {
        return $this->count(self::PARTICIPANT_DATA);
    }

    /**
     * Appends value to 'network_type' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendNetworkType($value)
    {
        return $this->append(self::NETWORK_TYPE, $value);
    }

    /**
     * Clears 'network_type' list
     *
     * @return null
     */
    public function clearNetworkType()
    {
        return $this->clear(self::NETWORK_TYPE);
    }

    /**
     * Returns 'network_type' list
     *
     * @return integer[]
     */
    public function getNetworkType()
    {
        return $this->get(self::NETWORK_TYPE);
    }

    /**
     * Returns 'network_type' iterator
     *
     * @return \ArrayIterator
     */
    public function getNetworkTypeIterator()
    {
        return new \ArrayIterator($this->get(self::NETWORK_TYPE));
    }

    /**
     * Returns element from 'network_type' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getNetworkTypeAt($offset)
    {
        return $this->get(self::NETWORK_TYPE, $offset);
    }

    /**
     * Returns count of 'network_type' list
     *
     * @return int
     */
    public function getNetworkTypeCount()
    {
        return $this->count(self::NETWORK_TYPE);
    }

    /**
     * Sets value of 'force_history_state' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setForceHistoryState($value)
    {
        return $this->set(self::FORCE_HISTORY_STATE, $value);
    }

    /**
     * Returns value of 'force_history_state' property
     *
     * @return integer
     */
    public function getForceHistoryState()
    {
        $value = $this->get(self::FORCE_HISTORY_STATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'group_link_sharing_status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGroupLinkSharingStatus($value)
    {
        return $this->set(self::GROUP_LINK_SHARING_STATUS, $value);
    }

    /**
     * Returns value of 'group_link_sharing_status' property
     *
     * @return integer
     */
    public function getGroupLinkSharingStatus()
    {
        $value = $this->get(self::GROUP_LINK_SHARING_STATUS);
        return $value === null ? (integer)$value : $value;
    }
}
}