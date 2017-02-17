<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * SyncRecentConversationsRequest message
 */
class SyncRecentConversationsRequest extends \ProtobufMessage
{
    /* Field index constants */
    const REQUEST_HEADER = 1;
    const LAST_EVENT_TIMESTAMP = 2;
    const MAX_CONVERSATIONS = 3;
    const MAX_EVENTS_PER_CONVERSATION = 4;
    const SYNC_FILTER = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUEST_HEADER => array(
            'name' => 'request_header',
            'required' => false,
            'type' => '\RequestHeader'
        ),
        self::LAST_EVENT_TIMESTAMP => array(
            'name' => 'last_event_timestamp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAX_CONVERSATIONS => array(
            'name' => 'max_conversations',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAX_EVENTS_PER_CONVERSATION => array(
            'name' => 'max_events_per_conversation',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SYNC_FILTER => array(
            'name' => 'sync_filter',
            'repeated' => true,
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
        $this->values[self::LAST_EVENT_TIMESTAMP] = null;
        $this->values[self::MAX_CONVERSATIONS] = null;
        $this->values[self::MAX_EVENTS_PER_CONVERSATION] = null;
        $this->values[self::SYNC_FILTER] = array();
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
     * Sets value of 'last_event_timestamp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLastEventTimestamp($value)
    {
        return $this->set(self::LAST_EVENT_TIMESTAMP, $value);
    }

    /**
     * Returns value of 'last_event_timestamp' property
     *
     * @return integer
     */
    public function getLastEventTimestamp()
    {
        $value = $this->get(self::LAST_EVENT_TIMESTAMP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'max_conversations' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxConversations($value)
    {
        return $this->set(self::MAX_CONVERSATIONS, $value);
    }

    /**
     * Returns value of 'max_conversations' property
     *
     * @return integer
     */
    public function getMaxConversations()
    {
        $value = $this->get(self::MAX_CONVERSATIONS);
        return $value === null ? (integer)$value : $value;
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
     * Appends value to 'sync_filter' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendSyncFilter($value)
    {
        return $this->append(self::SYNC_FILTER, $value);
    }

    /**
     * Clears 'sync_filter' list
     *
     * @return null
     */
    public function clearSyncFilter()
    {
        return $this->clear(self::SYNC_FILTER);
    }

    /**
     * Returns 'sync_filter' list
     *
     * @return integer[]
     */
    public function getSyncFilter()
    {
        return $this->get(self::SYNC_FILTER);
    }

    /**
     * Returns 'sync_filter' iterator
     *
     * @return \ArrayIterator
     */
    public function getSyncFilterIterator()
    {
        return new \ArrayIterator($this->get(self::SYNC_FILTER));
    }

    /**
     * Returns element from 'sync_filter' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getSyncFilterAt($offset)
    {
        return $this->get(self::SYNC_FILTER, $offset);
    }

    /**
     * Returns count of 'sync_filter' list
     *
     * @return int
     */
    public function getSyncFilterCount()
    {
        return $this->count(self::SYNC_FILTER);
    }
}
}