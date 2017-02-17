<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * ConversationNotification message
 */
class ConversationNotification extends \ProtobufMessage
{
    /* Field index constants */
    const CONVERSATION = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONVERSATION => array(
            'name' => 'conversation',
            'required' => false,
            'type' => '\Conversation'
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
        $this->values[self::CONVERSATION] = null;
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
     * Sets value of 'conversation' property
     *
     * @param \Conversation $value Property value
     *
     * @return null
     */
    public function setConversation(\Conversation $value=null)
    {
        return $this->set(self::CONVERSATION, $value);
    }

    /**
     * Returns value of 'conversation' property
     *
     * @return \Conversation
     */
    public function getConversation()
    {
        return $this->get(self::CONVERSATION);
    }
}
}