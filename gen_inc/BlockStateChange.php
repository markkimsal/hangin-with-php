<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * BlockStateChange message
 */
class BlockStateChange extends \ProtobufMessage
{
    /* Field index constants */
    const PARTICIPANT_ID = 1;
    const NEW_BLOCK_STATE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PARTICIPANT_ID => array(
            'name' => 'participant_id',
            'required' => false,
            'type' => '\ParticipantId'
        ),
        self::NEW_BLOCK_STATE => array(
            'name' => 'new_block_state',
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
        $this->values[self::NEW_BLOCK_STATE] = null;
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
     * Sets value of 'new_block_state' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNewBlockState($value)
    {
        return $this->set(self::NEW_BLOCK_STATE, $value);
    }

    /**
     * Returns value of 'new_block_state' property
     *
     * @return integer
     */
    public function getNewBlockState()
    {
        $value = $this->get(self::NEW_BLOCK_STATE);
        return $value === null ? (integer)$value : $value;
    }
}
}