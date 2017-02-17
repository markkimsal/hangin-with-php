<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * SyncAllNewEventsRequest message
 */
class SyncAllNewEventsRequest extends \ProtobufMessage
{
    /* Field index constants */
    const REQUEST_HEADER = 1;
    const LAST_SYNC_TIMESTAMP = 2;
    const MAX_RESPONSE_SIZE_BYTES = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUEST_HEADER => array(
            'name' => 'request_header',
            'required' => false,
            'type' => '\RequestHeader'
        ),
        self::LAST_SYNC_TIMESTAMP => array(
            'name' => 'last_sync_timestamp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAX_RESPONSE_SIZE_BYTES => array(
            'name' => 'max_response_size_bytes',
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
        $this->values[self::LAST_SYNC_TIMESTAMP] = null;
        $this->values[self::MAX_RESPONSE_SIZE_BYTES] = null;
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
     * Sets value of 'last_sync_timestamp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLastSyncTimestamp($value)
    {
        return $this->set(self::LAST_SYNC_TIMESTAMP, $value);
    }

    /**
     * Returns value of 'last_sync_timestamp' property
     *
     * @return integer
     */
    public function getLastSyncTimestamp()
    {
        $value = $this->get(self::LAST_SYNC_TIMESTAMP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'max_response_size_bytes' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxResponseSizeBytes($value)
    {
        return $this->set(self::MAX_RESPONSE_SIZE_BYTES, $value);
    }

    /**
     * Returns value of 'max_response_size_bytes' property
     *
     * @return integer
     */
    public function getMaxResponseSizeBytes()
    {
        $value = $this->get(self::MAX_RESPONSE_SIZE_BYTES);
        return $value === null ? (integer)$value : $value;
    }
}
}