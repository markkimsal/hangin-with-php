<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * EasterEggNotification message
 */
class EasterEggNotification extends \ProtobufMessage
{
    /* Field index constants */
    const SENDER_ID = 1;
    const CONVERSATION_ID = 2;
    const EASTER_EGG = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SENDER_ID => array(
            'name' => 'sender_id',
            'required' => false,
            'type' => '\ParticipantId'
        ),
        self::CONVERSATION_ID => array(
            'name' => 'conversation_id',
            'required' => false,
            'type' => '\ConversationId'
        ),
        self::EASTER_EGG => array(
            'name' => 'easter_egg',
            'required' => false,
            'type' => '\EasterEgg'
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
        $this->values[self::SENDER_ID] = null;
        $this->values[self::CONVERSATION_ID] = null;
        $this->values[self::EASTER_EGG] = null;
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
     * Sets value of 'easter_egg' property
     *
     * @param \EasterEgg $value Property value
     *
     * @return null
     */
    public function setEasterEgg(\EasterEgg $value=null)
    {
        return $this->set(self::EASTER_EGG, $value);
    }

    /**
     * Returns value of 'easter_egg' property
     *
     * @return \EasterEgg
     */
    public function getEasterEgg()
    {
        return $this->get(self::EASTER_EGG);
    }
}
}