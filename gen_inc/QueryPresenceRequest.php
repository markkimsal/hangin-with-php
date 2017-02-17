<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * QueryPresenceRequest message
 */
class QueryPresenceRequest extends \ProtobufMessage
{
    /* Field index constants */
    const REQUEST_HEADER = 1;
    const PARTICIPANT_ID = 2;
    const FIELD_MASK = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUEST_HEADER => array(
            'name' => 'request_header',
            'required' => false,
            'type' => '\RequestHeader'
        ),
        self::PARTICIPANT_ID => array(
            'name' => 'participant_id',
            'repeated' => true,
            'type' => '\ParticipantId'
        ),
        self::FIELD_MASK => array(
            'name' => 'field_mask',
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
        $this->values[self::PARTICIPANT_ID] = array();
        $this->values[self::FIELD_MASK] = array();
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

    /**
     * Appends value to 'field_mask' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendFieldMask($value)
    {
        return $this->append(self::FIELD_MASK, $value);
    }

    /**
     * Clears 'field_mask' list
     *
     * @return null
     */
    public function clearFieldMask()
    {
        return $this->clear(self::FIELD_MASK);
    }

    /**
     * Returns 'field_mask' list
     *
     * @return integer[]
     */
    public function getFieldMask()
    {
        return $this->get(self::FIELD_MASK);
    }

    /**
     * Returns 'field_mask' iterator
     *
     * @return \ArrayIterator
     */
    public function getFieldMaskIterator()
    {
        return new \ArrayIterator($this->get(self::FIELD_MASK));
    }

    /**
     * Returns element from 'field_mask' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getFieldMaskAt($offset)
    {
        return $this->get(self::FIELD_MASK, $offset);
    }

    /**
     * Returns count of 'field_mask' list
     *
     * @return int
     */
    public function getFieldMaskCount()
    {
        return $this->count(self::FIELD_MASK);
    }
}
}