<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * Country message
 */
class Country extends \ProtobufMessage
{
    /* Field index constants */
    const REGION_CODE = 1;
    const COUNTRY_CODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REGION_CODE => array(
            'name' => 'region_code',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::COUNTRY_CODE => array(
            'name' => 'country_code',
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
        $this->values[self::REGION_CODE] = null;
        $this->values[self::COUNTRY_CODE] = null;
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
     * Sets value of 'region_code' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRegionCode($value)
    {
        return $this->set(self::REGION_CODE, $value);
    }

    /**
     * Returns value of 'region_code' property
     *
     * @return string
     */
    public function getRegionCode()
    {
        $value = $this->get(self::REGION_CODE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'country_code' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCountryCode($value)
    {
        return $this->set(self::COUNTRY_CODE, $value);
    }

    /**
     * Returns value of 'country_code' property
     *
     * @return integer
     */
    public function getCountryCode()
    {
        $value = $this->get(self::COUNTRY_CODE);
        return $value === null ? (integer)$value : $value;
    }
}
}