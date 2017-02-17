<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * LastSeen message
 */
class LastSeen extends \ProtobufMessage
{
    /* Field index constants */
    const LAST_SEEN_TIMESTAMP_USEC = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LAST_SEEN_TIMESTAMP_USEC => array(
            'name' => 'last_seen_timestamp_usec',
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
        $this->values[self::LAST_SEEN_TIMESTAMP_USEC] = null;
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
     * Sets value of 'last_seen_timestamp_usec' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLastSeenTimestampUsec($value)
    {
        return $this->set(self::LAST_SEEN_TIMESTAMP_USEC, $value);
    }

    /**
     * Returns value of 'last_seen_timestamp_usec' property
     *
     * @return integer
     */
    public function getLastSeenTimestampUsec()
    {
        $value = $this->get(self::LAST_SEEN_TIMESTAMP_USEC);
        return $value === null ? (integer)$value : $value;
    }
}
}