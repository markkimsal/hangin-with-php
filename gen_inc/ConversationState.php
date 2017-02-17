<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * ConversationState message
 */
class ConversationState extends \ProtobufMessage
{
    /* Field index constants */
    const CONVERSATION_ID = 1;
    const CONVERSATION = 2;
    const EVENT = 3;
    const EVENT_CONTINUATION_TOKEN = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONVERSATION_ID => array(
            'name' => 'conversation_id',
            'required' => false,
            'type' => '\ConversationId'
        ),
        self::CONVERSATION => array(
            'name' => 'conversation',
            'required' => false,
            'type' => '\Conversation'
        ),
        self::EVENT => array(
            'name' => 'event',
            'repeated' => true,
            'type' => '\Event'
        ),
        self::EVENT_CONTINUATION_TOKEN => array(
            'name' => 'event_continuation_token',
            'required' => false,
            'type' => '\EventContinuationToken'
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
        $this->values[self::CONVERSATION] = null;
        $this->values[self::EVENT] = array();
        $this->values[self::EVENT_CONTINUATION_TOKEN] = null;
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

    /**
     * Appends value to 'event' list
     *
     * @param \Event $value Value to append
     *
     * @return null
     */
    public function appendEvent(\Event $value)
    {
        return $this->append(self::EVENT, $value);
    }

    /**
     * Clears 'event' list
     *
     * @return null
     */
    public function clearEvent()
    {
        return $this->clear(self::EVENT);
    }

    /**
     * Returns 'event' list
     *
     * @return \Event[]
     */
    public function getEvent()
    {
        return $this->get(self::EVENT);
    }

    /**
     * Returns 'event' iterator
     *
     * @return \ArrayIterator
     */
    public function getEventIterator()
    {
        return new \ArrayIterator($this->get(self::EVENT));
    }

    /**
     * Returns element from 'event' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Event
     */
    public function getEventAt($offset)
    {
        return $this->get(self::EVENT, $offset);
    }

    /**
     * Returns count of 'event' list
     *
     * @return int
     */
    public function getEventCount()
    {
        return $this->count(self::EVENT);
    }

    /**
     * Sets value of 'event_continuation_token' property
     *
     * @param \EventContinuationToken $value Property value
     *
     * @return null
     */
    public function setEventContinuationToken(\EventContinuationToken $value=null)
    {
        return $this->set(self::EVENT_CONTINUATION_TOKEN, $value);
    }

    /**
     * Returns value of 'event_continuation_token' property
     *
     * @return \EventContinuationToken
     */
    public function getEventContinuationToken()
    {
        return $this->get(self::EVENT_CONTINUATION_TOKEN);
    }
}
}