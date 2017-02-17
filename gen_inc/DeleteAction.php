<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * DeleteAction message
 */
class DeleteAction extends \ProtobufMessage
{
    /* Field index constants */
    const DELETE_ACTION_TIMESTAMP = 1;
    const DELETE_UPPER_BOUND_TIMESTAMP = 2;
    const DELETE_TYPE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DELETE_ACTION_TIMESTAMP => array(
            'name' => 'delete_action_timestamp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DELETE_UPPER_BOUND_TIMESTAMP => array(
            'name' => 'delete_upper_bound_timestamp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DELETE_TYPE => array(
            'name' => 'delete_type',
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
        $this->values[self::DELETE_ACTION_TIMESTAMP] = null;
        $this->values[self::DELETE_UPPER_BOUND_TIMESTAMP] = null;
        $this->values[self::DELETE_TYPE] = null;
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
     * Sets value of 'delete_action_timestamp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDeleteActionTimestamp($value)
    {
        return $this->set(self::DELETE_ACTION_TIMESTAMP, $value);
    }

    /**
     * Returns value of 'delete_action_timestamp' property
     *
     * @return integer
     */
    public function getDeleteActionTimestamp()
    {
        $value = $this->get(self::DELETE_ACTION_TIMESTAMP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'delete_upper_bound_timestamp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDeleteUpperBoundTimestamp($value)
    {
        return $this->set(self::DELETE_UPPER_BOUND_TIMESTAMP, $value);
    }

    /**
     * Returns value of 'delete_upper_bound_timestamp' property
     *
     * @return integer
     */
    public function getDeleteUpperBoundTimestamp()
    {
        $value = $this->get(self::DELETE_UPPER_BOUND_TIMESTAMP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'delete_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDeleteType($value)
    {
        return $this->set(self::DELETE_TYPE, $value);
    }

    /**
     * Returns value of 'delete_type' property
     *
     * @return integer
     */
    public function getDeleteType()
    {
        $value = $this->get(self::DELETE_TYPE);
        return $value === null ? (integer)$value : $value;
    }
}
}