<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * UserEventState message
 */
class UserEventState extends \ProtobufMessage
{
    /* Field index constants */
    const USER_ID = 1;
    const CLIENT_GENERATED_ID = 2;
    const NOTIFICATION_LEVEL = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::USER_ID => array(
            'name' => 'user_id',
            'required' => false,
            'type' => '\ParticipantId'
        ),
        self::CLIENT_GENERATED_ID => array(
            'name' => 'client_generated_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NOTIFICATION_LEVEL => array(
            'name' => 'notification_level',
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
        $this->values[self::USER_ID] = null;
        $this->values[self::CLIENT_GENERATED_ID] = null;
        $this->values[self::NOTIFICATION_LEVEL] = null;
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
}
}