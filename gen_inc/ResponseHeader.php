<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * ResponseHeader message
 */
class ResponseHeader extends \ProtobufMessage
{
    /* Field index constants */
    const STATUS = 1;
    const ERROR_DESCRIPTION = 2;
    const DEBUG_URL = 3;
    const REQUEST_TRACE_ID = 4;
    const CURRENT_SERVER_TIME = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STATUS => array(
            'name' => 'status',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ERROR_DESCRIPTION => array(
            'name' => 'error_description',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DEBUG_URL => array(
            'name' => 'debug_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REQUEST_TRACE_ID => array(
            'name' => 'request_trace_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CURRENT_SERVER_TIME => array(
            'name' => 'current_server_time',
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
        $this->values[self::STATUS] = null;
        $this->values[self::ERROR_DESCRIPTION] = null;
        $this->values[self::DEBUG_URL] = null;
        $this->values[self::REQUEST_TRACE_ID] = null;
        $this->values[self::CURRENT_SERVER_TIME] = null;
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
     * Sets value of 'status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStatus($value)
    {
        return $this->set(self::STATUS, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return integer
     */
    public function getStatus()
    {
        $value = $this->get(self::STATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'error_description' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setErrorDescription($value)
    {
        return $this->set(self::ERROR_DESCRIPTION, $value);
    }

    /**
     * Returns value of 'error_description' property
     *
     * @return string
     */
    public function getErrorDescription()
    {
        $value = $this->get(self::ERROR_DESCRIPTION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'debug_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDebugUrl($value)
    {
        return $this->set(self::DEBUG_URL, $value);
    }

    /**
     * Returns value of 'debug_url' property
     *
     * @return string
     */
    public function getDebugUrl()
    {
        $value = $this->get(self::DEBUG_URL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'request_trace_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRequestTraceId($value)
    {
        return $this->set(self::REQUEST_TRACE_ID, $value);
    }

    /**
     * Returns value of 'request_trace_id' property
     *
     * @return string
     */
    public function getRequestTraceId()
    {
        $value = $this->get(self::REQUEST_TRACE_ID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'current_server_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCurrentServerTime($value)
    {
        return $this->set(self::CURRENT_SERVER_TIME, $value);
    }

    /**
     * Returns value of 'current_server_time' property
     *
     * @return integer
     */
    public function getCurrentServerTime()
    {
        $value = $this->get(self::CURRENT_SERVER_TIME);
        return $value === null ? (integer)$value : $value;
    }
}
}