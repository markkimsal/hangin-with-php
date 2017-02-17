<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * OTRModification message
 */
class OTRModification extends \ProtobufMessage
{
    /* Field index constants */
    const OLD_OTR_STATUS = 1;
    const NEW_OTR_STATUS = 2;
    const OLD_OTR_TOGGLE = 3;
    const NEW_OTR_TOGGLE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::OLD_OTR_STATUS => array(
            'name' => 'old_otr_status',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEW_OTR_STATUS => array(
            'name' => 'new_otr_status',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OLD_OTR_TOGGLE => array(
            'name' => 'old_otr_toggle',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEW_OTR_TOGGLE => array(
            'name' => 'new_otr_toggle',
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
        $this->values[self::OLD_OTR_STATUS] = null;
        $this->values[self::NEW_OTR_STATUS] = null;
        $this->values[self::OLD_OTR_TOGGLE] = null;
        $this->values[self::NEW_OTR_TOGGLE] = null;
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
     * Sets value of 'old_otr_status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOldOtrStatus($value)
    {
        return $this->set(self::OLD_OTR_STATUS, $value);
    }

    /**
     * Returns value of 'old_otr_status' property
     *
     * @return integer
     */
    public function getOldOtrStatus()
    {
        $value = $this->get(self::OLD_OTR_STATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'new_otr_status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNewOtrStatus($value)
    {
        return $this->set(self::NEW_OTR_STATUS, $value);
    }

    /**
     * Returns value of 'new_otr_status' property
     *
     * @return integer
     */
    public function getNewOtrStatus()
    {
        $value = $this->get(self::NEW_OTR_STATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'old_otr_toggle' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOldOtrToggle($value)
    {
        return $this->set(self::OLD_OTR_TOGGLE, $value);
    }

    /**
     * Returns value of 'old_otr_toggle' property
     *
     * @return integer
     */
    public function getOldOtrToggle()
    {
        $value = $this->get(self::OLD_OTR_TOGGLE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'new_otr_toggle' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNewOtrToggle($value)
    {
        return $this->set(self::NEW_OTR_TOGGLE, $value);
    }

    /**
     * Returns value of 'new_otr_toggle' property
     *
     * @return integer
     */
    public function getNewOtrToggle()
    {
        $value = $this->get(self::NEW_OTR_TOGGLE);
        return $value === null ? (integer)$value : $value;
    }
}
}