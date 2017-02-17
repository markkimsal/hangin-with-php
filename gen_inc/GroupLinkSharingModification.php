<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * GroupLinkSharingModification message
 */
class GroupLinkSharingModification extends \ProtobufMessage
{
    /* Field index constants */
    const NEW_STATUS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NEW_STATUS => array(
            'name' => 'new_status',
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
        $this->values[self::NEW_STATUS] = null;
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
     * Sets value of 'new_status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNewStatus($value)
    {
        return $this->set(self::NEW_STATUS, $value);
    }

    /**
     * Returns value of 'new_status' property
     *
     * @return integer
     */
    public function getNewStatus()
    {
        $value = $this->get(self::NEW_STATUS);
        return $value === null ? (integer)$value : $value;
    }
}
}