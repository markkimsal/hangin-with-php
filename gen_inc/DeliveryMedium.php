<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * DeliveryMedium message
 */
class DeliveryMedium extends \ProtobufMessage
{
    /* Field index constants */
    const MEDIUM_TYPE = 1;
    const PHONE_NUMBER = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MEDIUM_TYPE => array(
            'name' => 'medium_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PHONE_NUMBER => array(
            'name' => 'phone_number',
            'required' => false,
            'type' => '\PhoneNumber'
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
        $this->values[self::MEDIUM_TYPE] = null;
        $this->values[self::PHONE_NUMBER] = null;
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
     * Sets value of 'medium_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMediumType($value)
    {
        return $this->set(self::MEDIUM_TYPE, $value);
    }

    /**
     * Returns value of 'medium_type' property
     *
     * @return integer
     */
    public function getMediumType()
    {
        $value = $this->get(self::MEDIUM_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'phone_number' property
     *
     * @param \PhoneNumber $value Property value
     *
     * @return null
     */
    public function setPhoneNumber(\PhoneNumber $value=null)
    {
        return $this->set(self::PHONE_NUMBER, $value);
    }

    /**
     * Returns value of 'phone_number' property
     *
     * @return \PhoneNumber
     */
    public function getPhoneNumber()
    {
        return $this->get(self::PHONE_NUMBER);
    }
}
}