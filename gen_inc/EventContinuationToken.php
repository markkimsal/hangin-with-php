<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * EventContinuationToken message
 */
class EventContinuationToken extends \ProtobufMessage
{
    /* Field index constants */
    const EVENT_ID = 1;
    const STORAGE_CONTINUATION_TOKEN = 2;
    const EVENT_TIMESTAMP = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::EVENT_ID => array(
            'name' => 'event_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STORAGE_CONTINUATION_TOKEN => array(
            'name' => 'storage_continuation_token',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::EVENT_TIMESTAMP => array(
            'name' => 'event_timestamp',
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
        $this->values[self::EVENT_ID] = null;
        $this->values[self::STORAGE_CONTINUATION_TOKEN] = null;
        $this->values[self::EVENT_TIMESTAMP] = null;
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
     * Sets value of 'event_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEventId($value)
    {
        return $this->set(self::EVENT_ID, $value);
    }

    /**
     * Returns value of 'event_id' property
     *
     * @return string
     */
    public function getEventId()
    {
        $value = $this->get(self::EVENT_ID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'storage_continuation_token' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStorageContinuationToken($value)
    {
        return $this->set(self::STORAGE_CONTINUATION_TOKEN, $value);
    }

    /**
     * Returns value of 'storage_continuation_token' property
     *
     * @return string
     */
    public function getStorageContinuationToken()
    {
        $value = $this->get(self::STORAGE_CONTINUATION_TOKEN);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'event_timestamp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEventTimestamp($value)
    {
        return $this->set(self::EVENT_TIMESTAMP, $value);
    }

    /**
     * Returns value of 'event_timestamp' property
     *
     * @return integer
     */
    public function getEventTimestamp()
    {
        $value = $this->get(self::EVENT_TIMESTAMP);
        return $value === null ? (integer)$value : $value;
    }
}
}