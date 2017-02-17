<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * GetConversationResponse message
 */
class GetConversationResponse extends \ProtobufMessage
{
    /* Field index constants */
    const RESPONSE_HEADER = 1;
    const CONVERSATION_STATE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RESPONSE_HEADER => array(
            'name' => 'response_header',
            'required' => false,
            'type' => '\ResponseHeader'
        ),
        self::CONVERSATION_STATE => array(
            'name' => 'conversation_state',
            'required' => false,
            'type' => '\ConversationState'
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
        $this->values[self::CONVERSATION_STATE] = null;
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
     * Sets value of 'conversation_state' property
     *
     * @param \ConversationState $value Property value
     *
     * @return null
     */
    public function setConversationState(\ConversationState $value=null)
    {
        return $this->set(self::CONVERSATION_STATE, $value);
    }

    /**
     * Returns value of 'conversation_state' property
     *
     * @return \ConversationState
     */
    public function getConversationState()
    {
        return $this->get(self::CONVERSATION_STATE);
    }
}
}