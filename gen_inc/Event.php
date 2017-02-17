<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * Event message
 */
class Event extends \ProtobufMessage
{
    /* Field index constants */
    const CONVERSATION_ID = 1;
    const SENDER_ID = 2;
    const TIMESTAMP = 3;
    const SELF_EVENT_STATE = 4;
    const SOURCE_TYPE = 6;
    const CHAT_MESSAGE = 7;
    const MEMBERSHIP_CHANGE = 9;
    const CONVERSATION_RENAME = 10;
    const HANGOUT_EVENT = 11;
    const EVENT_ID = 12;
    const EXPIRATION_TIMESTAMP = 13;
    const OTR_MODIFICATION = 14;
    const ADVANCES_SORT_TIMESTAMP = 15;
    const OTR_STATUS = 16;
    const PERSISTED = 17;
    const MEDIUM_TYPE = 20;
    const EVENT_TYPE = 23;
    const EVENT_VERSION = 24;
    const HASH_MODIFIER = 26;
    const GROUP_LINK_SHARING_MODIFICATION = 31;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONVERSATION_ID => array(
            'name' => 'conversation_id',
            'required' => false,
            'type' => '\ConversationId'
        ),
        self::SENDER_ID => array(
            'name' => 'sender_id',
            'required' => false,
            'type' => '\ParticipantId'
        ),
        self::TIMESTAMP => array(
            'name' => 'timestamp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SELF_EVENT_STATE => array(
            'name' => 'self_event_state',
            'required' => false,
            'type' => '\UserEventState'
        ),
        self::SOURCE_TYPE => array(
            'name' => 'source_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CHAT_MESSAGE => array(
            'name' => 'chat_message',
            'required' => false,
            'type' => '\ChatMessage'
        ),
        self::MEMBERSHIP_CHANGE => array(
            'name' => 'membership_change',
            'required' => false,
            'type' => '\MembershipChange'
        ),
        self::CONVERSATION_RENAME => array(
            'name' => 'conversation_rename',
            'required' => false,
            'type' => '\ConversationRename'
        ),
        self::HANGOUT_EVENT => array(
            'name' => 'hangout_event',
            'required' => false,
            'type' => '\HangoutEvent'
        ),
        self::EVENT_ID => array(
            'name' => 'event_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::EXPIRATION_TIMESTAMP => array(
            'name' => 'expiration_timestamp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OTR_MODIFICATION => array(
            'name' => 'otr_modification',
            'required' => false,
            'type' => '\OTRModification'
        ),
        self::ADVANCES_SORT_TIMESTAMP => array(
            'name' => 'advances_sort_timestamp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::OTR_STATUS => array(
            'name' => 'otr_status',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PERSISTED => array(
            'name' => 'persisted',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::MEDIUM_TYPE => array(
            'name' => 'medium_type',
            'required' => false,
            'type' => '\DeliveryMedium'
        ),
        self::EVENT_TYPE => array(
            'name' => 'event_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EVENT_VERSION => array(
            'name' => 'event_version',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HASH_MODIFIER => array(
            'name' => 'hash_modifier',
            'required' => false,
            'type' => '\HashModifier'
        ),
        self::GROUP_LINK_SHARING_MODIFICATION => array(
            'name' => 'group_link_sharing_modification',
            'required' => false,
            'type' => '\GroupLinkSharingModification'
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
        $this->values[self::SENDER_ID] = null;
        $this->values[self::TIMESTAMP] = null;
        $this->values[self::SELF_EVENT_STATE] = null;
        $this->values[self::SOURCE_TYPE] = null;
        $this->values[self::CHAT_MESSAGE] = null;
        $this->values[self::MEMBERSHIP_CHANGE] = null;
        $this->values[self::CONVERSATION_RENAME] = null;
        $this->values[self::HANGOUT_EVENT] = null;
        $this->values[self::EVENT_ID] = null;
        $this->values[self::EXPIRATION_TIMESTAMP] = null;
        $this->values[self::OTR_MODIFICATION] = null;
        $this->values[self::ADVANCES_SORT_TIMESTAMP] = null;
        $this->values[self::OTR_STATUS] = null;
        $this->values[self::PERSISTED] = null;
        $this->values[self::MEDIUM_TYPE] = null;
        $this->values[self::EVENT_TYPE] = null;
        $this->values[self::EVENT_VERSION] = null;
        $this->values[self::HASH_MODIFIER] = null;
        $this->values[self::GROUP_LINK_SHARING_MODIFICATION] = null;
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
     * Sets value of 'sender_id' property
     *
     * @param \ParticipantId $value Property value
     *
     * @return null
     */
    public function setSenderId(\ParticipantId $value=null)
    {
        return $this->set(self::SENDER_ID, $value);
    }

    /**
     * Returns value of 'sender_id' property
     *
     * @return \ParticipantId
     */
    public function getSenderId()
    {
        return $this->get(self::SENDER_ID);
    }

    /**
     * Sets value of 'timestamp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimestamp($value)
    {
        return $this->set(self::TIMESTAMP, $value);
    }

    /**
     * Returns value of 'timestamp' property
     *
     * @return integer
     */
    public function getTimestamp()
    {
        $value = $this->get(self::TIMESTAMP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'self_event_state' property
     *
     * @param \UserEventState $value Property value
     *
     * @return null
     */
    public function setSelfEventState(\UserEventState $value=null)
    {
        return $this->set(self::SELF_EVENT_STATE, $value);
    }

    /**
     * Returns value of 'self_event_state' property
     *
     * @return \UserEventState
     */
    public function getSelfEventState()
    {
        return $this->get(self::SELF_EVENT_STATE);
    }

    /**
     * Sets value of 'source_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSourceType($value)
    {
        return $this->set(self::SOURCE_TYPE, $value);
    }

    /**
     * Returns value of 'source_type' property
     *
     * @return integer
     */
    public function getSourceType()
    {
        $value = $this->get(self::SOURCE_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'chat_message' property
     *
     * @param \ChatMessage $value Property value
     *
     * @return null
     */
    public function setChatMessage(\ChatMessage $value=null)
    {
        return $this->set(self::CHAT_MESSAGE, $value);
    }

    /**
     * Returns value of 'chat_message' property
     *
     * @return \ChatMessage
     */
    public function getChatMessage()
    {
        return $this->get(self::CHAT_MESSAGE);
    }

    /**
     * Sets value of 'membership_change' property
     *
     * @param \MembershipChange $value Property value
     *
     * @return null
     */
    public function setMembershipChange(\MembershipChange $value=null)
    {
        return $this->set(self::MEMBERSHIP_CHANGE, $value);
    }

    /**
     * Returns value of 'membership_change' property
     *
     * @return \MembershipChange
     */
    public function getMembershipChange()
    {
        return $this->get(self::MEMBERSHIP_CHANGE);
    }

    /**
     * Sets value of 'conversation_rename' property
     *
     * @param \ConversationRename $value Property value
     *
     * @return null
     */
    public function setConversationRename(\ConversationRename $value=null)
    {
        return $this->set(self::CONVERSATION_RENAME, $value);
    }

    /**
     * Returns value of 'conversation_rename' property
     *
     * @return \ConversationRename
     */
    public function getConversationRename()
    {
        return $this->get(self::CONVERSATION_RENAME);
    }

    /**
     * Sets value of 'hangout_event' property
     *
     * @param \HangoutEvent $value Property value
     *
     * @return null
     */
    public function setHangoutEvent(\HangoutEvent $value=null)
    {
        return $this->set(self::HANGOUT_EVENT, $value);
    }

    /**
     * Returns value of 'hangout_event' property
     *
     * @return \HangoutEvent
     */
    public function getHangoutEvent()
    {
        return $this->get(self::HANGOUT_EVENT);
    }

    /**
     * Sets value of 'event_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEventId($value)
    {
        return $this->set(self::EVENT_ID, $value);
    }

    /**
     * Returns value of 'event_id' property
     *
     * @return string
     */
    public function getEventId()
    {
        $value = $this->get(self::EVENT_ID);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'otr_modification' property
     *
     * @param \OTRModification $value Property value
     *
     * @return null
     */
    public function setOtrModification(\OTRModification $value=null)
    {
        return $this->set(self::OTR_MODIFICATION, $value);
    }

    /**
     * Returns value of 'otr_modification' property
     *
     * @return \OTRModification
     */
    public function getOtrModification()
    {
        return $this->get(self::OTR_MODIFICATION);
    }

    /**
     * Sets value of 'advances_sort_timestamp' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setAdvancesSortTimestamp($value)
    {
        return $this->set(self::ADVANCES_SORT_TIMESTAMP, $value);
    }

    /**
     * Returns value of 'advances_sort_timestamp' property
     *
     * @return boolean
     */
    public function getAdvancesSortTimestamp()
    {
        $value = $this->get(self::ADVANCES_SORT_TIMESTAMP);
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
     * Sets value of 'persisted' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setPersisted($value)
    {
        return $this->set(self::PERSISTED, $value);
    }

    /**
     * Returns value of 'persisted' property
     *
     * @return boolean
     */
    public function getPersisted()
    {
        $value = $this->get(self::PERSISTED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'medium_type' property
     *
     * @param \DeliveryMedium $value Property value
     *
     * @return null
     */
    public function setMediumType(\DeliveryMedium $value=null)
    {
        return $this->set(self::MEDIUM_TYPE, $value);
    }

    /**
     * Returns value of 'medium_type' property
     *
     * @return \DeliveryMedium
     */
    public function getMediumType()
    {
        return $this->get(self::MEDIUM_TYPE);
    }

    /**
     * Sets value of 'event_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEventType($value)
    {
        return $this->set(self::EVENT_TYPE, $value);
    }

    /**
     * Returns value of 'event_type' property
     *
     * @return integer
     */
    public function getEventType()
    {
        $value = $this->get(self::EVENT_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'event_version' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEventVersion($value)
    {
        return $this->set(self::EVENT_VERSION, $value);
    }

    /**
     * Returns value of 'event_version' property
     *
     * @return integer
     */
    public function getEventVersion()
    {
        $value = $this->get(self::EVENT_VERSION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'hash_modifier' property
     *
     * @param \HashModifier $value Property value
     *
     * @return null
     */
    public function setHashModifier(\HashModifier $value=null)
    {
        return $this->set(self::HASH_MODIFIER, $value);
    }

    /**
     * Returns value of 'hash_modifier' property
     *
     * @return \HashModifier
     */
    public function getHashModifier()
    {
        return $this->get(self::HASH_MODIFIER);
    }

    /**
     * Sets value of 'group_link_sharing_modification' property
     *
     * @param \GroupLinkSharingModification $value Property value
     *
     * @return null
     */
    public function setGroupLinkSharingModification(\GroupLinkSharingModification $value=null)
    {
        return $this->set(self::GROUP_LINK_SHARING_MODIFICATION, $value);
    }

    /**
     * Returns value of 'group_link_sharing_modification' property
     *
     * @return \GroupLinkSharingModification
     */
    public function getGroupLinkSharingModification()
    {
        return $this->get(self::GROUP_LINK_SHARING_MODIFICATION);
    }
}
}