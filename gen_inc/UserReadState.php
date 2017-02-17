<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * UserReadState message
 */
class UserReadState extends \ProtobufMessage
{
    /* Field index constants */
    const PARTICIPANT_ID = 1;
    const LATEST_READ_TIMESTAMP = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PARTICIPANT_ID => array(
            'name' => 'participant_id',
            'required' => false,
            'type' => '\ParticipantId'
        ),
        self::LATEST_READ_TIMESTAMP => array(
            'name' => 'latest_read_timestamp',
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
        $this->values[self::PARTICIPANT_ID] = null;
        $this->values[self::LATEST_READ_TIMESTAMP] = null;
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
     * Sets value of 'participant_id' property
     *
     * @param \ParticipantId $value Property value
     *
     * @return null
     */
    public function setParticipantId(\ParticipantId $value=null)
    {
        return $this->set(self::PARTICIPANT_ID, $value);
    }

    /**
     * Returns value of 'participant_id' property
     *
     * @return \ParticipantId
     */
    public function getParticipantId()
    {
        return $this->get(self::PARTICIPANT_ID);
    }

    /**
     * Sets value of 'latest_read_timestamp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLatestReadTimestamp($value)
    {
        return $this->set(self::LATEST_READ_TIMESTAMP, $value);
    }

    /**
     * Returns value of 'latest_read_timestamp' property
     *
     * @return integer
     */
    public function getLatestReadTimestamp()
    {
        $value = $this->get(self::LATEST_READ_TIMESTAMP);
        return $value === null ? (integer)$value : $value;
    }
}
}