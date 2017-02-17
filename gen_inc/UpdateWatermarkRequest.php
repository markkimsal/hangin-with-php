<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * UpdateWatermarkRequest message
 */
class UpdateWatermarkRequest extends \ProtobufMessage
{
    /* Field index constants */
    const REQUEST_HEADER = 1;
    const CONVERSATION_ID = 2;
    const LAST_READ_TIMESTAMP = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUEST_HEADER => array(
            'name' => 'request_header',
            'required' => false,
            'type' => '\RequestHeader'
        ),
        self::CONVERSATION_ID => array(
            'name' => 'conversation_id',
            'required' => false,
            'type' => '\ConversationId'
        ),
        self::LAST_READ_TIMESTAMP => array(
            'name' => 'last_read_timestamp',
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
        $this->values[self::REQUEST_HEADER] = null;
        $this->values[self::CONVERSATION_ID] = null;
        $this->values[self::LAST_READ_TIMESTAMP] = null;
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
     * Sets value of 'last_read_timestamp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLastReadTimestamp($value)
    {
        return $this->set(self::LAST_READ_TIMESTAMP, $value);
    }

    /**
     * Returns value of 'last_read_timestamp' property
     *
     * @return integer
     */
    public function getLastReadTimestamp()
    {
        $value = $this->get(self::LAST_READ_TIMESTAMP);
        return $value === null ? (integer)$value : $value;
    }
}
}