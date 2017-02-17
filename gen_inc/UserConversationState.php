<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * UserConversationState message
 */
class UserConversationState extends \ProtobufMessage
{
    /* Field index constants */
    const CLIENT_GENERATED_ID = 2;
    const SELF_READ_STATE = 7;
    const STATUS = 8;
    const NOTIFICATION_LEVEL = 9;
    const VIEW = 10;
    const INVITER_ID = 11;
    const INVITE_TIMESTAMP = 12;
    const SORT_TIMESTAMP = 13;
    const ACTIVE_TIMESTAMP = 14;
    const INVITE_AFFINITY = 15;
    const DELIVERY_MEDIUM_OPTION = 17;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CLIENT_GENERATED_ID => array(
            'name' => 'client_generated_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SELF_READ_STATE => array(
            'name' => 'self_read_state',
            'required' => false,
            'type' => '\UserReadState'
        ),
        self::STATUS => array(
            'name' => 'status',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOTIFICATION_LEVEL => array(
            'name' => 'notification_level',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VIEW => array(
            'name' => 'view',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::INVITER_ID => array(
            'name' => 'inviter_id',
            'required' => false,
            'type' => '\ParticipantId'
        ),
        self::INVITE_TIMESTAMP => array(
            'name' => 'invite_timestamp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SORT_TIMESTAMP => array(
            'name' => 'sort_timestamp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ACTIVE_TIMESTAMP => array(
            'name' => 'active_timestamp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::INVITE_AFFINITY => array(
            'name' => 'invite_affinity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DELIVERY_MEDIUM_OPTION => array(
            'name' => 'delivery_medium_option',
            'repeated' => true,
            'type' => '\DeliveryMediumOption'
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
        $this->values[self::CLIENT_GENERATED_ID] = null;
        $this->values[self::SELF_READ_STATE] = null;
        $this->values[self::STATUS] = null;
        $this->values[self::NOTIFICATION_LEVEL] = null;
        $this->values[self::VIEW] = array();
        $this->values[self::INVITER_ID] = null;
        $this->values[self::INVITE_TIMESTAMP] = null;
        $this->values[self::SORT_TIMESTAMP] = null;
        $this->values[self::ACTIVE_TIMESTAMP] = null;
        $this->values[self::INVITE_AFFINITY] = null;
        $this->values[self::DELIVERY_MEDIUM_OPTION] = array();
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
     * Sets value of 'client_generated_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setClientGeneratedId($value)
    {
        return $this->set(self::CLIENT_GENERATED_ID, $value);
    }

    /**
     * Returns value of 'client_generated_id' property
     *
     * @return string
     */
    public function getClientGeneratedId()
    {
        $value = $this->get(self::CLIENT_GENERATED_ID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'self_read_state' property
     *
     * @param \UserReadState $value Property value
     *
     * @return null
     */
    public function setSelfReadState(\UserReadState $value=null)
    {
        return $this->set(self::SELF_READ_STATE, $value);
    }

    /**
     * Returns value of 'self_read_state' property
     *
     * @return \UserReadState
     */
    public function getSelfReadState()
    {
        return $this->get(self::SELF_READ_STATE);
    }

    /**
     * Sets value of 'status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStatus($value)
    {
        return $this->set(self::STATUS, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return integer
     */
    public function getStatus()
    {
        $value = $this->get(self::STATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'notification_level' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNotificationLevel($value)
    {
        return $this->set(self::NOTIFICATION_LEVEL, $value);
    }

    /**
     * Returns value of 'notification_level' property
     *
     * @return integer
     */
    public function getNotificationLevel()
    {
        $value = $this->get(self::NOTIFICATION_LEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'view' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendView($value)
    {
        return $this->append(self::VIEW, $value);
    }

    /**
     * Clears 'view' list
     *
     * @return null
     */
    public function clearView()
    {
        return $this->clear(self::VIEW);
    }

    /**
     * Returns 'view' list
     *
     * @return integer[]
     */
    public function getView()
    {
        return $this->get(self::VIEW);
    }

    /**
     * Returns 'view' iterator
     *
     * @return \ArrayIterator
     */
    public function getViewIterator()
    {
        return new \ArrayIterator($this->get(self::VIEW));
    }

    /**
     * Returns element from 'view' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getViewAt($offset)
    {
        return $this->get(self::VIEW, $offset);
    }

    /**
     * Returns count of 'view' list
     *
     * @return int
     */
    public function getViewCount()
    {
        return $this->count(self::VIEW);
    }

    /**
     * Sets value of 'inviter_id' property
     *
     * @param \ParticipantId $value Property value
     *
     * @return null
     */
    public function setInviterId(\ParticipantId $value=null)
    {
        return $this->set(self::INVITER_ID, $value);
    }

    /**
     * Returns value of 'inviter_id' property
     *
     * @return \ParticipantId
     */
    public function getInviterId()
    {
        return $this->get(self::INVITER_ID);
    }

    /**
     * Sets value of 'invite_timestamp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setInviteTimestamp($value)
    {
        return $this->set(self::INVITE_TIMESTAMP, $value);
    }

    /**
     * Returns value of 'invite_timestamp' property
     *
     * @return integer
     */
    public function getInviteTimestamp()
    {
        $value = $this->get(self::INVITE_TIMESTAMP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'sort_timestamp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSortTimestamp($value)
    {
        return $this->set(self::SORT_TIMESTAMP, $value);
    }

    /**
     * Returns value of 'sort_timestamp' property
     *
     * @return integer
     */
    public function getSortTimestamp()
    {
        $value = $this->get(self::SORT_TIMESTAMP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'active_timestamp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setActiveTimestamp($value)
    {
        return $this->set(self::ACTIVE_TIMESTAMP, $value);
    }

    /**
     * Returns value of 'active_timestamp' property
     *
     * @return integer
     */
    public function getActiveTimestamp()
    {
        $value = $this->get(self::ACTIVE_TIMESTAMP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'invite_affinity' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setInviteAffinity($value)
    {
        return $this->set(self::INVITE_AFFINITY, $value);
    }

    /**
     * Returns value of 'invite_affinity' property
     *
     * @return integer
     */
    public function getInviteAffinity()
    {
        $value = $this->get(self::INVITE_AFFINITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'delivery_medium_option' list
     *
     * @param \DeliveryMediumOption $value Value to append
     *
     * @return null
     */
    public function appendDeliveryMediumOption(\DeliveryMediumOption $value)
    {
        return $this->append(self::DELIVERY_MEDIUM_OPTION, $value);
    }

    /**
     * Clears 'delivery_medium_option' list
     *
     * @return null
     */
    public function clearDeliveryMediumOption()
    {
        return $this->clear(self::DELIVERY_MEDIUM_OPTION);
    }

    /**
     * Returns 'delivery_medium_option' list
     *
     * @return \DeliveryMediumOption[]
     */
    public function getDeliveryMediumOption()
    {
        return $this->get(self::DELIVERY_MEDIUM_OPTION);
    }

    /**
     * Returns 'delivery_medium_option' iterator
     *
     * @return \ArrayIterator
     */
    public function getDeliveryMediumOptionIterator()
    {
        return new \ArrayIterator($this->get(self::DELIVERY_MEDIUM_OPTION));
    }

    /**
     * Returns element from 'delivery_medium_option' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \DeliveryMediumOption
     */
    public function getDeliveryMediumOptionAt($offset)
    {
        return $this->get(self::DELIVERY_MEDIUM_OPTION, $offset);
    }

    /**
     * Returns count of 'delivery_medium_option' list
     *
     * @return int
     */
    public function getDeliveryMediumOptionCount()
    {
        return $this->count(self::DELIVERY_MEDIUM_OPTION);
    }
}
}