<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * RenameConversationRequest message
 */
class RenameConversationRequest extends \ProtobufMessage
{
    /* Field index constants */
    const REQUEST_HEADER = 1;
    const NEW_NAME = 3;
    const EVENT_REQUEST_HEADER = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUEST_HEADER => array(
            'name' => 'request_header',
            'required' => false,
            'type' => '\RequestHeader'
        ),
        self::NEW_NAME => array(
            'name' => 'new_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::EVENT_REQUEST_HEADER => array(
            'name' => 'event_request_header',
            'required' => false,
            'type' => '\EventRequestHeader'
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
        $this->values[self::NEW_NAME] = null;
        $this->values[self::EVENT_REQUEST_HEADER] = null;
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
     * Sets value of 'new_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNewName($value)
    {
        return $this->set(self::NEW_NAME, $value);
    }

    /**
     * Returns value of 'new_name' property
     *
     * @return string
     */
    public function getNewName()
    {
        $value = $this->get(self::NEW_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'event_request_header' property
     *
     * @param \EventRequestHeader $value Property value
     *
     * @return null
     */
    public function setEventRequestHeader(\EventRequestHeader $value=null)
    {
        return $this->set(self::EVENT_REQUEST_HEADER, $value);
    }

    /**
     * Returns value of 'event_request_header' property
     *
     * @return \EventRequestHeader
     */
    public function getEventRequestHeader()
    {
        return $this->get(self::EVENT_REQUEST_HEADER);
    }
}
}