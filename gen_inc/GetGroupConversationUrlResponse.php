<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * GetGroupConversationUrlResponse message
 */
class GetGroupConversationUrlResponse extends \ProtobufMessage
{
    /* Field index constants */
    const RESPONSE_HEADER = 1;
    const GROUP_CONVERSATION_URL = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RESPONSE_HEADER => array(
            'name' => 'response_header',
            'required' => false,
            'type' => '\ResponseHeader'
        ),
        self::GROUP_CONVERSATION_URL => array(
            'name' => 'group_conversation_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::GROUP_CONVERSATION_URL] = null;
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
     * Sets value of 'group_conversation_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGroupConversationUrl($value)
    {
        return $this->set(self::GROUP_CONVERSATION_URL, $value);
    }

    /**
     * Returns value of 'group_conversation_url' property
     *
     * @return string
     */
    public function getGroupConversationUrl()
    {
        $value = $this->get(self::GROUP_CONVERSATION_URL);
        return $value === null ? (string)$value : $value;
    }
}
}