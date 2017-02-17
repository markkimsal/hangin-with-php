<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * EventRequestHeader message
 */
class EventRequestHeader extends \ProtobufMessage
{
    /* Field index constants */
    const CONVERSATION_ID = 1;
    const CLIENT_GENERATED_ID = 2;
    const EXPECTED_OTR = 3;
    const DELIVERY_MEDIUM = 4;
    const EVENT_TYPE = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONVERSATION_ID => array(
            'name' => 'conversation_id',
            'required' => false,
            'type' => '\ConversationId'
        ),
        self::CLIENT_GENERATED_ID => array(
            'name' => 'client_generated_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EXPECTED_OTR => array(
            'name' => 'expected_otr',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DELIVERY_MEDIUM => array(
            'name' => 'delivery_medium',
            'required' => false,
            'type' => '\DeliveryMedium'
        ),
        self::EVENT_TYPE => array(
            'name' => 'event_type',
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
        $this->values[self::CLIENT_GENERATED_ID] = null;
        $this->values[self::EXPECTED_OTR] = null;
        $this->values[self::DELIVERY_MEDIUM] = null;
        $this->values[self::EVENT_TYPE] = null;
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
     * Sets value of 'client_generated_id' property
     *
     * @param integer $value Property value
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
     * @return integer
     */
    public function getClientGeneratedId()
    {
        $value = $this->get(self::CLIENT_GENERATED_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'expected_otr' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setExpectedOtr($value)
    {
        return $this->set(self::EXPECTED_OTR, $value);
    }

    /**
     * Returns value of 'expected_otr' property
     *
     * @return integer
     */
    public function getExpectedOtr()
    {
        $value = $this->get(self::EXPECTED_OTR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'delivery_medium' property
     *
     * @param \DeliveryMedium $value Property value
     *
     * @return null
     */
    public function setDeliveryMedium(\DeliveryMedium $value=null)
    {
        return $this->set(self::DELIVERY_MEDIUM, $value);
    }

    /**
     * Returns value of 'delivery_medium' property
     *
     * @return \DeliveryMedium
     */
    public function getDeliveryMedium()
    {
        return $this->get(self::DELIVERY_MEDIUM);
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
}
}