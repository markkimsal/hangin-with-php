<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * SyncRecentConversationsResponse message
 */
class SyncRecentConversationsResponse extends \ProtobufMessage
{
    /* Field index constants */
    const RESPONSE_HEADER = 1;
    const SYNC_TIMESTAMP = 2;
    const CONVERSATION_STATE = 3;
    const EVENT_CONTINUATION_TOKEN = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RESPONSE_HEADER => array(
            'name' => 'response_header',
            'required' => false,
            'type' => '\ResponseHeader'
        ),
        self::SYNC_TIMESTAMP => array(
            'name' => 'sync_timestamp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONVERSATION_STATE => array(
            'name' => 'conversation_state',
            'repeated' => true,
            'type' => '\ConversationState'
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
        $this->values[self::RESPONSE_HEADER] = null;
        $this->values[self::SYNC_TIMESTAMP] = null;
        $this->values[self::CONVERSATION_STATE] = array();
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
     * Sets value of 'response_header' property
     *
     * @param \ResponseHeader $value Property value
     *
     * @return null
     */
    public function setResponseHeader(\ResponseHeader $value=null)
    {
        return $this->set(self::RESPONSE_HEADER, $value);
    }

    /**
     * Returns value of 'response_header' property
     *
     * @return \ResponseHeader
     */
    public function getResponseHeader()
    {
        return $this->get(self::RESPONSE_HEADER);
    }

    /**
     * Sets value of 'sync_timestamp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSyncTimestamp($value)
    {
        return $this->set(self::SYNC_TIMESTAMP, $value);
    }

    /**
     * Returns value of 'sync_timestamp' property
     *
     * @return integer
     */
    public function getSyncTimestamp()
    {
        $value = $this->get(self::SYNC_TIMESTAMP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'conversation_state' list
     *
     * @param \ConversationState $value Value to append
     *
     * @return null
     */
    public function appendConversationState(\ConversationState $value)
    {
        return $this->append(self::CONVERSATION_STATE, $value);
    }

    /**
     * Clears 'conversation_state' list
     *
     * @return null
     */
    public function clearConversationState()
    {
        return $this->clear(self::CONVERSATION_STATE);
    }

    /**
     * Returns 'conversation_state' list
     *
     * @return \ConversationState[]
     */
    public function getConversationState()
    {
        return $this->get(self::CONVERSATION_STATE);
    }

    /**
     * Returns 'conversation_state' iterator
     *
     * @return \ArrayIterator
     */
    public function getConversationStateIterator()
    {
        return new \ArrayIterator($this->get(self::CONVERSATION_STATE));
    }

    /**
     * Returns element from 'conversation_state' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \ConversationState
     */
    public function getConversationStateAt($offset)
    {
        return $this->get(self::CONVERSATION_STATE, $offset);
    }

    /**
     * Returns count of 'conversation_state' list
     *
     * @return int
     */
    public function getConversationStateCount()
    {
        return $this->count(self::CONVERSATION_STATE);
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