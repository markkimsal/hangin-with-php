<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * GetConversationRequest message
 */
class GetConversationRequest extends \ProtobufMessage
{
    /* Field index constants */
    const REQUEST_HEADER = 1;
    const CONVERSATION_SPEC = 2;
    const INCLUDE_CONVERSATION_METADATA = 3;
    const INCLUDE_EVENT = 4;
    const MAX_EVENTS_PER_CONVERSATION = 6;
    const EVENT_CONTINUATION_TOKEN = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUEST_HEADER => array(
            'name' => 'request_header',
            'required' => false,
            'type' => '\RequestHeader'
        ),
        self::CONVERSATION_SPEC => array(
            'name' => 'conversation_spec',
            'required' => false,
            'type' => '\ConversationSpec'
        ),
        self::INCLUDE_CONVERSATION_METADATA => array(
            'name' => 'include_conversation_metadata',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::INCLUDE_EVENT => array(
            'name' => 'include_event',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::MAX_EVENTS_PER_CONVERSATION => array(
            'name' => 'max_events_per_conversation',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::REQUEST_HEADER] = null;
        $this->values[self::CONVERSATION_SPEC] = null;
        $this->values[self::INCLUDE_CONVERSATION_METADATA] = null;
        $this->values[self::INCLUDE_EVENT] = null;
        $this->values[self::MAX_EVENTS_PER_CONVERSATION] = null;
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
     * Sets value of 'request_header' property
     *
     * @param \RequestHeader $value Property value
     *
     * @return null
     */
    public function setRequestHeader(\RequestHeader $value=null)
    {
        return $this->set(self::REQUEST_HEADER, $value);
    }

    /**
     * Returns value of 'request_header' property
     *
     * @return \RequestHeader
     */
    public function getRequestHeader()
    {
        return $this->get(self::REQUEST_HEADER);
    }

    /**
     * Sets value of 'conversation_spec' property
     *
     * @param \ConversationSpec $value Property value
     *
     * @return null
     */
    public function setConversationSpec(\ConversationSpec $value=null)
    {
        return $this->set(self::CONVERSATION_SPEC, $value);
    }

    /**
     * Returns value of 'conversation_spec' property
     *
     * @return \ConversationSpec
     */
    public function getConversationSpec()
    {
        return $this->get(self::CONVERSATION_SPEC);
    }

    /**
     * Sets value of 'include_conversation_metadata' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIncludeConversationMetadata($value)
    {
        return $this->set(self::INCLUDE_CONVERSATION_METADATA, $value);
    }

    /**
     * Returns value of 'include_conversation_metadata' property
     *
     * @return boolean
     */
    public function getIncludeConversationMetadata()
    {
        $value = $this->get(self::INCLUDE_CONVERSATION_METADATA);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'include_event' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIncludeEvent($value)
    {
        return $this->set(self::INCLUDE_EVENT, $value);
    }

    /**
     * Returns value of 'include_event' property
     *
     * @return boolean
     */
    public function getIncludeEvent()
    {
        $value = $this->get(self::INCLUDE_EVENT);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'max_events_per_conversation' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxEventsPerConversation($value)
    {
        return $this->set(self::MAX_EVENTS_PER_CONVERSATION, $value);
    }

    /**
     * Returns value of 'max_events_per_conversation' property
     *
     * @return integer
     */
    public function getMaxEventsPerConversation()
    {
        $value = $this->get(self::MAX_EVENTS_PER_CONVERSATION);
        return $value === null ? (integer)$value : $value;
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