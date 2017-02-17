<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * SetGroupLinkSharingEnabledResponse message
 */
class SetGroupLinkSharingEnabledResponse extends \ProtobufMessage
{
    /* Field index constants */
    const RESPONSE_HEADER = 1;
    const CREATED_EVENT = 2;
    const UPDATED_CONVERSATION = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RESPONSE_HEADER => array(
            'name' => 'response_header',
            'required' => false,
            'type' => '\ResponseHeader'
        ),
        self::CREATED_EVENT => array(
            'name' => 'created_event',
            'required' => false,
            'type' => '\Event'
        ),
        self::UPDATED_CONVERSATION => array(
            'name' => 'updated_conversation',
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
        $this->values[self::RESPONSE_HEADER] = null;
        $this->values[self::CREATED_EVENT] = null;
        $this->values[self::UPDATED_CONVERSATION] = null;
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
     * Sets value of 'created_event' property
     *
     * @param \Event $value Property value
     *
     * @return null
     */
    public function setCreatedEvent(\Event $value=null)
    {
        return $this->set(self::CREATED_EVENT, $value);
    }

    /**
     * Returns value of 'created_event' property
     *
     * @return \Event
     */
    public function getCreatedEvent()
    {
        return $this->get(self::CREATED_EVENT);
    }

    /**
     * Sets value of 'updated_conversation' property
     *
     * @param \Conversation $value Property value
     *
     * @return null
     */
    public function setUpdatedConversation(\Conversation $value=null)
    {
        return $this->set(self::UPDATED_CONVERSATION, $value);
    }

    /**
     * Returns value of 'updated_conversation' property
     *
     * @return \Conversation
     */
    public function getUpdatedConversation()
    {
        return $this->get(self::UPDATED_CONVERSATION);
    }
}
}