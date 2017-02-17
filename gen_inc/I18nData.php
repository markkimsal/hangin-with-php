<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * I18nData message
 */
class I18nData extends \ProtobufMessage
{
    /* Field index constants */
    const NATIONAL_NUMBER = 1;
    const INTERNATIONAL_NUMBER = 2;
    const COUNTRY_CODE = 3;
    const REGION_CODE = 4;
    const IS_VALID = 5;
    const VALIDATION_RESULT = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NATIONAL_NUMBER => array(
            'name' => 'national_number',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::INTERNATIONAL_NUMBER => array(
            'name' => 'international_number',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::COUNTRY_CODE => array(
            'name' => 'country_code',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REGION_CODE => array(
            'name' => 'region_code',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::IS_VALID => array(
            'name' => 'is_valid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::VALIDATION_RESULT => array(
            'name' => 'validation_result',
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
        $this->values[self::NATIONAL_NUMBER] = null;
        $this->values[self::INTERNATIONAL_NUMBER] = null;
        $this->values[self::COUNTRY_CODE] = null;
        $this->values[self::REGION_CODE] = null;
        $this->values[self::IS_VALID] = null;
        $this->values[self::VALIDATION_RESULT] = null;
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
     * Sets value of 'national_number' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNationalNumber($value)
    {
        return $this->set(self::NATIONAL_NUMBER, $value);
    }

    /**
     * Returns value of 'national_number' property
     *
     * @return string
     */
    public function getNationalNumber()
    {
        $value = $this->get(self::NATIONAL_NUMBER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'international_number' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInternationalNumber($value)
    {
        return $this->set(self::INTERNATIONAL_NUMBER, $value);
    }

    /**
     * Returns value of 'international_number' property
     *
     * @return string
     */
    public function getInternationalNumber()
    {
        $value = $this->get(self::INTERNATIONAL_NUMBER);
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
     * Sets value of 'is_valid' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsValid($value)
    {
        return $this->set(self::IS_VALID, $value);
    }

    /**
     * Returns value of 'is_valid' property
     *
     * @return boolean
     */
    public function getIsValid()
    {
        $value = $this->get(self::IS_VALID);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'validation_result' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setValidationResult($value)
    {
        return $this->set(self::VALIDATION_RESULT, $value);
    }

    /**
     * Returns value of 'validation_result' property
     *
     * @return integer
     */
    public function getValidationResult()
    {
        $value = $this->get(self::VALIDATION_RESULT);
        return $value === null ? (integer)$value : $value;
    }
}
}