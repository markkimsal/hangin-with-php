<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * CreateConversationResponse message
 */
class CreateConversationResponse extends \ProtobufMessage
{
    /* Field index constants */
    const RESPONSE_HEADER = 1;
    const CONVERSATION = 2;
    const NEW_CONVERSATION_CREATED = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RESPONSE_HEADER => array(
            'name' => 'response_header',
            'required' => false,
            'type' => '\ResponseHeader'
        ),
        self::CONVERSATION => array(
            'name' => 'conversation',
            'required' => false,
            'type' => '\Conversation'
        ),
        self::NEW_CONVERSATION_CREATED => array(
            'name' => 'new_conversation_created',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::CONVERSATION] = null;
        $this->values[self::NEW_CONVERSATION_CREATED] = null;
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
     * Sets value of 'new_conversation_created' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setNewConversationCreated($value)
    {
        return $this->set(self::NEW_CONVERSATION_CREATED, $value);
    }

    /**
     * Returns value of 'new_conversation_created' property
     *
     * @return boolean
     */
    public function getNewConversationCreated()
    {
        $value = $this->get(self::NEW_CONVERSATION_CREATED);
        return $value === null ? (boolean)$value : $value;
    }
}
}