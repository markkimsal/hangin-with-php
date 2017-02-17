<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * Phone message
 */
class Phone extends \ProtobufMessage
{
    /* Field index constants */
    const PHONE_NUMBER = 1;
    const GOOGLE_VOICE = 2;
    const VERIFICATION_STATUS = 3;
    const DISCOVERABLE = 4;
    const DISCOVERABILITY_STATUS = 5;
    const PRIMARY = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PHONE_NUMBER => array(
            'name' => 'phone_number',
            'required' => false,
            'type' => '\PhoneNumber'
        ),
        self::GOOGLE_VOICE => array(
            'name' => 'google_voice',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::VERIFICATION_STATUS => array(
            'name' => 'verification_status',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DISCOVERABLE => array(
            'name' => 'discoverable',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::DISCOVERABILITY_STATUS => array(
            'name' => 'discoverability_status',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PRIMARY => array(
            'name' => 'primary',
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
        $this->values[self::PHONE_NUMBER] = null;
        $this->values[self::GOOGLE_VOICE] = null;
        $this->values[self::VERIFICATION_STATUS] = null;
        $this->values[self::DISCOVERABLE] = null;
        $this->values[self::DISCOVERABILITY_STATUS] = null;
        $this->values[self::PRIMARY] = null;
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

    /**
     * Sets value of 'google_voice' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setGoogleVoice($value)
    {
        return $this->set(self::GOOGLE_VOICE, $value);
    }

    /**
     * Returns value of 'google_voice' property
     *
     * @return boolean
     */
    public function getGoogleVoice()
    {
        $value = $this->get(self::GOOGLE_VOICE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'verification_status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVerificationStatus($value)
    {
        return $this->set(self::VERIFICATION_STATUS, $value);
    }

    /**
     * Returns value of 'verification_status' property
     *
     * @return integer
     */
    public function getVerificationStatus()
    {
        $value = $this->get(self::VERIFICATION_STATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'discoverable' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setDiscoverable($value)
    {
        return $this->set(self::DISCOVERABLE, $value);
    }

    /**
     * Returns value of 'discoverable' property
     *
     * @return boolean
     */
    public function getDiscoverable()
    {
        $value = $this->get(self::DISCOVERABLE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'discoverability_status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDiscoverabilityStatus($value)
    {
        return $this->set(self::DISCOVERABILITY_STATUS, $value);
    }

    /**
     * Returns value of 'discoverability_status' property
     *
     * @return integer
     */
    public function getDiscoverabilityStatus()
    {
        $value = $this->get(self::DISCOVERABILITY_STATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'primary' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setPrimary($value)
    {
        return $this->set(self::PRIMARY, $value);
    }

    /**
     * Returns value of 'primary' property
     *
     * @return boolean
     */
    public function getPrimary()
    {
        $value = $this->get(self::PRIMARY);
        return $value === null ? (boolean)$value : $value;
    }
}
}