<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * ReplyToInviteNotification message
 */
class ReplyToInviteNotification extends \ProtobufMessage
{
    /* Field index constants */
    const CONVERSATION_ID = 1;
    const TYPE = 2;

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
}
}