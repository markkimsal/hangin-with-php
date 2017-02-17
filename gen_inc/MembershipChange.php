<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * MembershipChange message
 */
class MembershipChange extends \ProtobufMessage
{
    /* Field index constants */
    const TYPE = 1;
    const PARTICIPANT_IDS = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PARTICIPANT_IDS => array(
            'name' => 'participant_ids',
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
        $this->values[self::TYPE] = null;
        $this->values[self::PARTICIPANT_IDS] = array();
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
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'participant_ids' list
     *
     * @param \ParticipantId $value Value to append
     *
     * @return null
     */
    public function appendParticipantIds(\ParticipantId $value)
    {
        return $this->append(self::PARTICIPANT_IDS, $value);
    }

    /**
     * Clears 'participant_ids' list
     *
     * @return null
     */
    public function clearParticipantIds()
    {
        return $this->clear(self::PARTICIPANT_IDS);
    }

    /**
     * Returns 'participant_ids' list
     *
     * @return \ParticipantId[]
     */
    public function getParticipantIds()
    {
        return $this->get(self::PARTICIPANT_IDS);
    }

    /**
     * Returns 'participant_ids' iterator
     *
     * @return \ArrayIterator
     */
    public function getParticipantIdsIterator()
    {
        return new \ArrayIterator($this->get(self::PARTICIPANT_IDS));
    }

    /**
     * Returns element from 'participant_ids' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \ParticipantId
     */
    public function getParticipantIdsAt($offset)
    {
        return $this->get(self::PARTICIPANT_IDS, $offset);
    }

    /**
     * Returns count of 'participant_ids' list
     *
     * @return int
     */
    public function getParticipantIdsCount()
    {
        return $this->count(self::PARTICIPANT_IDS);
    }
}
}