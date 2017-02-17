<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * SuggestedContact message
 */
class SuggestedContact extends \ProtobufMessage
{
    /* Field index constants */
    const ENTITY = 1;
    const INVITATION_STATUS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ENTITY => array(
            'name' => 'entity',
            'required' => false,
            'type' => '\Entity'
        ),
        self::INVITATION_STATUS => array(
            'name' => 'invitation_status',
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
        $this->values[self::ENTITY] = null;
        $this->values[self::INVITATION_STATUS] = null;
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
     * Sets value of 'entity' property
     *
     * @param \Entity $value Property value
     *
     * @return null
     */
    public function setEntity(\Entity $value=null)
    {
        return $this->set(self::ENTITY, $value);
    }

    /**
     * Returns value of 'entity' property
     *
     * @return \Entity
     */
    public function getEntity()
    {
        return $this->get(self::ENTITY);
    }

    /**
     * Sets value of 'invitation_status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setInvitationStatus($value)
    {
        return $this->set(self::INVITATION_STATUS, $value);
    }

    /**
     * Returns value of 'invitation_status' property
     *
     * @return integer
     */
    public function getInvitationStatus()
    {
        $value = $this->get(self::INVITATION_STATUS);
        return $value === null ? (integer)$value : $value;
    }
}
}