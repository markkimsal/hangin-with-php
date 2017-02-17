<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * Presence message
 */
class Presence extends \ProtobufMessage
{
    /* Field index constants */
    const REACHABLE = 1;
    const AVAILABLE = 2;
    const DEVICE_STATUS = 6;
    const MOOD_MESSAGE = 9;
    const LAST_SEEN = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REACHABLE => array(
            'name' => 'reachable',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::AVAILABLE => array(
            'name' => 'available',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::DEVICE_STATUS => array(
            'name' => 'device_status',
            'required' => false,
            'type' => '\DeviceStatus'
        ),
        self::MOOD_MESSAGE => array(
            'name' => 'mood_message',
            'required' => false,
            'type' => '\MoodMessage'
        ),
        self::LAST_SEEN => array(
            'name' => 'last_seen',
            'required' => false,
            'type' => '\LastSeen'
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
        $this->values[self::REACHABLE] = null;
        $this->values[self::AVAILABLE] = null;
        $this->values[self::DEVICE_STATUS] = null;
        $this->values[self::MOOD_MESSAGE] = null;
        $this->values[self::LAST_SEEN] = null;
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
     * Sets value of 'reachable' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setReachable($value)
    {
        return $this->set(self::REACHABLE, $value);
    }

    /**
     * Returns value of 'reachable' property
     *
     * @return boolean
     */
    public function getReachable()
    {
        $value = $this->get(self::REACHABLE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'available' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setAvailable($value)
    {
        return $this->set(self::AVAILABLE, $value);
    }

    /**
     * Returns value of 'available' property
     *
     * @return boolean
     */
    public function getAvailable()
    {
        $value = $this->get(self::AVAILABLE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'device_status' property
     *
     * @param \DeviceStatus $value Property value
     *
     * @return null
     */
    public function setDeviceStatus(\DeviceStatus $value=null)
    {
        return $this->set(self::DEVICE_STATUS, $value);
    }

    /**
     * Returns value of 'device_status' property
     *
     * @return \DeviceStatus
     */
    public function getDeviceStatus()
    {
        return $this->get(self::DEVICE_STATUS);
    }

    /**
     * Sets value of 'mood_message' property
     *
     * @param \MoodMessage $value Property value
     *
     * @return null
     */
    public function setMoodMessage(\MoodMessage $value=null)
    {
        return $this->set(self::MOOD_MESSAGE, $value);
    }

    /**
     * Returns value of 'mood_message' property
     *
     * @return \MoodMessage
     */
    public function getMoodMessage()
    {
        return $this->get(self::MOOD_MESSAGE);
    }

    /**
     * Sets value of 'last_seen' property
     *
     * @param \LastSeen $value Property value
     *
     * @return null
     */
    public function setLastSeen(\LastSeen $value=null)
    {
        return $this->set(self::LAST_SEEN, $value);
    }

    /**
     * Returns value of 'last_seen' property
     *
     * @return \LastSeen
     */
    public function getLastSeen()
    {
        return $this->get(self::LAST_SEEN);
    }
}
}