<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * DeliveryMediumOption message
 */
class DeliveryMediumOption extends \ProtobufMessage
{
    /* Field index constants */
    const DELIVERY_MEDIUM = 1;
    const CURRENT_DEFAULT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DELIVERY_MEDIUM => array(
            'name' => 'delivery_medium',
            'required' => false,
            'type' => '\DeliveryMedium'
        ),
        self::CURRENT_DEFAULT => array(
            'name' => 'current_default',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::DELIVERY_MEDIUM] = null;
        $this->values[self::CURRENT_DEFAULT] = null;
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
     * Sets value of 'delivery_medium' property
     *
     * @param \DeliveryMedium $value Property value
     *
     * @return null
     */
    public function setDeliveryMedium(\DeliveryMedium $value=null)
    {
        return $this->set(self::DELIVERY_MEDIUM, $value);
    }

    /**
     * Returns value of 'delivery_medium' property
     *
     * @return \DeliveryMedium
     */
    public function getDeliveryMedium()
    {
        return $this->get(self::DELIVERY_MEDIUM);
    }

    /**
     * Sets value of 'current_default' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setCurrentDefault($value)
    {
        return $this->set(self::CURRENT_DEFAULT, $value);
    }

    /**
     * Returns value of 'current_default' property
     *
     * @return boolean
     */
    public function getCurrentDefault()
    {
        $value = $this->get(self::CURRENT_DEFAULT);
        return $value === null ? (boolean)$value : $value;
    }
}
}