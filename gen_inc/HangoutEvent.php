<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * HangoutEvent message
 */
class HangoutEvent extends \ProtobufMessage
{
    /* Field index constants */
    const EVENT_TYPE = 1;
    const PARTICIPANT_ID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::EVENT_TYPE => array(
            'name' => 'event_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PARTICIPANT_ID => array(
            'name' => 'participant_id',
            'repeated' => true,
            'type' => '\ParticipantId'
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
        $this->values[self::EVENT_TYPE] = null;
        $this->values[self::PARTICIPANT_ID] = array();
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
     * Sets value of 'event_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEventType($value)
    {
        return $this->set(self::EVENT_TYPE, $value);
    }

    /**
     * Returns value of 'event_type' property
     *
     * @return integer
     */
    public function getEventType()
    {
        $value = $this->get(self::EVENT_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'participant_id' list
     *
     * @param \ParticipantId $value Value to append
     *
     * @return null
     */
    public function appendParticipantId(\ParticipantId $value)
    {
        return $this->append(self::PARTICIPANT_ID, $value);
    }

    /**
     * Clears 'participant_id' list
     *
     * @return null
     */
    public function clearParticipantId()
    {
        return $this->clear(self::PARTICIPANT_ID);
    }

    /**
     * Returns 'participant_id' list
     *
     * @return \ParticipantId[]
     */
    public function getParticipantId()
    {
        return $this->get(self::PARTICIPANT_ID);
    }

    /**
     * Returns 'participant_id' iterator
     *
     * @return \ArrayIterator
     */
    public function getParticipantIdIterator()
    {
        return new \ArrayIterator($this->get(self::PARTICIPANT_ID));
    }

    /**
     * Returns element from 'participant_id' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \ParticipantId
     */
    public function getParticipantIdAt($offset)
    {
        return $this->get(self::PARTICIPANT_ID, $offset);
    }

    /**
     * Returns count of 'participant_id' list
     *
     * @return int
     */
    public function getParticipantIdCount()
    {
        return $this->count(self::PARTICIPANT_ID);
    }
}
}