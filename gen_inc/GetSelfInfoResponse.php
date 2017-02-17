<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * GetSelfInfoResponse message
 */
class GetSelfInfoResponse extends \ProtobufMessage
{
    /* Field index constants */
    const RESPONSE_HEADER = 1;
    const SELF_ENTITY = 2;
    const IS_KNOWN_MINOR = 3;
    const DND_STATE = 5;
    const DESKTOP_OFF_SETTING = 6;
    const PHONE_DATA = 7;
    const CONFIGURATION_BIT = 8;
    const DESKTOP_OFF_STATE = 9;
    const GOOGLE_PLUS_USER = 10;
    const DESKTOP_SOUND_SETTING = 11;
    const RICH_PRESENCE_STATE = 12;
    const DEFAULT_COUNTRY = 19;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RESPONSE_HEADER => array(
            'name' => 'response_header',
            'required' => false,
            'type' => '\ResponseHeader'
        ),
        self::SELF_ENTITY => array(
            'name' => 'self_entity',
            'required' => false,
            'type' => '\Entity'
        ),
        self::IS_KNOWN_MINOR => array(
            'name' => 'is_known_minor',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::DND_STATE => array(
            'name' => 'dnd_state',
            'required' => false,
            'type' => '\DoNotDisturbSetting'
        ),
        self::DESKTOP_OFF_SETTING => array(
            'name' => 'desktop_off_setting',
            'required' => false,
            'type' => '\DesktopOffSetting'
        ),
        self::PHONE_DATA => array(
            'name' => 'phone_data',
            'required' => false,
            'type' => '\PhoneData'
        ),
        self::CONFIGURATION_BIT => array(
            'name' => 'configuration_bit',
            'repeated' => true,
            'type' => '\ConfigurationBit'
        ),
        self::DESKTOP_OFF_STATE => array(
            'name' => 'desktop_off_state',
            'required' => false,
            'type' => '\DesktopOffState'
        ),
        self::GOOGLE_PLUS_USER => array(
            'name' => 'google_plus_user',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::DESKTOP_SOUND_SETTING => array(
            'name' => 'desktop_sound_setting',
            'required' => false,
            'type' => '\DesktopSoundSetting'
        ),
        self::RICH_PRESENCE_STATE => array(
            'name' => 'rich_presence_state',
            'required' => false,
            'type' => '\RichPresenceState'
        ),
        self::DEFAULT_COUNTRY => array(
            'name' => 'default_country',
            'required' => false,
            'type' => '\Country'
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
        $this->values[self::RESPONSE_HEADER] = null;
        $this->values[self::SELF_ENTITY] = null;
        $this->values[self::IS_KNOWN_MINOR] = null;
        $this->values[self::DND_STATE] = null;
        $this->values[self::DESKTOP_OFF_SETTING] = null;
        $this->values[self::PHONE_DATA] = null;
        $this->values[self::CONFIGURATION_BIT] = array();
        $this->values[self::DESKTOP_OFF_STATE] = null;
        $this->values[self::GOOGLE_PLUS_USER] = null;
        $this->values[self::DESKTOP_SOUND_SETTING] = null;
        $this->values[self::RICH_PRESENCE_STATE] = null;
        $this->values[self::DEFAULT_COUNTRY] = null;
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
     * Sets value of 'response_header' property
     *
     * @param \ResponseHeader $value Property value
     *
     * @return null
     */
    public function setResponseHeader(\ResponseHeader $value=null)
    {
        return $this->set(self::RESPONSE_HEADER, $value);
    }

    /**
     * Returns value of 'response_header' property
     *
     * @return \ResponseHeader
     */
    public function getResponseHeader()
    {
        return $this->get(self::RESPONSE_HEADER);
    }

    /**
     * Sets value of 'self_entity' property
     *
     * @param \Entity $value Property value
     *
     * @return null
     */
    public function setSelfEntity(\Entity $value=null)
    {
        return $this->set(self::SELF_ENTITY, $value);
    }

    /**
     * Returns value of 'self_entity' property
     *
     * @return \Entity
     */
    public function getSelfEntity()
    {
        return $this->get(self::SELF_ENTITY);
    }

    /**
     * Sets value of 'is_known_minor' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsKnownMinor($value)
    {
        return $this->set(self::IS_KNOWN_MINOR, $value);
    }

    /**
     * Returns value of 'is_known_minor' property
     *
     * @return boolean
     */
    public function getIsKnownMinor()
    {
        $value = $this->get(self::IS_KNOWN_MINOR);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'dnd_state' property
     *
     * @param \DoNotDisturbSetting $value Property value
     *
     * @return null
     */
    public function setDndState(\DoNotDisturbSetting $value=null)
    {
        return $this->set(self::DND_STATE, $value);
    }

    /**
     * Returns value of 'dnd_state' property
     *
     * @return \DoNotDisturbSetting
     */
    public function getDndState()
    {
        return $this->get(self::DND_STATE);
    }

    /**
     * Sets value of 'desktop_off_setting' property
     *
     * @param \DesktopOffSetting $value Property value
     *
     * @return null
     */
    public function setDesktopOffSetting(\DesktopOffSetting $value=null)
    {
        return $this->set(self::DESKTOP_OFF_SETTING, $value);
    }

    /**
     * Returns value of 'desktop_off_setting' property
     *
     * @return \DesktopOffSetting
     */
    public function getDesktopOffSetting()
    {
        return $this->get(self::DESKTOP_OFF_SETTING);
    }

    /**
     * Sets value of 'phone_data' property
     *
     * @param \PhoneData $value Property value
     *
     * @return null
     */
    public function setPhoneData(\PhoneData $value=null)
    {
        return $this->set(self::PHONE_DATA, $value);
    }

    /**
     * Returns value of 'phone_data' property
     *
     * @return \PhoneData
     */
    public function getPhoneData()
    {
        return $this->get(self::PHONE_DATA);
    }

    /**
     * Appends value to 'configuration_bit' list
     *
     * @param \ConfigurationBit $value Value to append
     *
     * @return null
     */
    public function appendConfigurationBit(\ConfigurationBit $value)
    {
        return $this->append(self::CONFIGURATION_BIT, $value);
    }

    /**
     * Clears 'configuration_bit' list
     *
     * @return null
     */
    public function clearConfigurationBit()
    {
        return $this->clear(self::CONFIGURATION_BIT);
    }

    /**
     * Returns 'configuration_bit' list
     *
     * @return \ConfigurationBit[]
     */
    public function getConfigurationBit()
    {
        return $this->get(self::CONFIGURATION_BIT);
    }

    /**
     * Returns 'configuration_bit' iterator
     *
     * @return \ArrayIterator
     */
    public function getConfigurationBitIterator()
    {
        return new \ArrayIterator($this->get(self::CONFIGURATION_BIT));
    }

    /**
     * Returns element from 'configuration_bit' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \ConfigurationBit
     */
    public function getConfigurationBitAt($offset)
    {
        return $this->get(self::CONFIGURATION_BIT, $offset);
    }

    /**
     * Returns count of 'configuration_bit' list
     *
     * @return int
     */
    public function getConfigurationBitCount()
    {
        return $this->count(self::CONFIGURATION_BIT);
    }

    /**
     * Sets value of 'desktop_off_state' property
     *
     * @param \DesktopOffState $value Property value
     *
     * @return null
     */
    public function setDesktopOffState(\DesktopOffState $value=null)
    {
        return $this->set(self::DESKTOP_OFF_STATE, $value);
    }

    /**
     * Returns value of 'desktop_off_state' property
     *
     * @return \DesktopOffState
     */
    public function getDesktopOffState()
    {
        return $this->get(self::DESKTOP_OFF_STATE);
    }

    /**
     * Sets value of 'google_plus_user' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setGooglePlusUser($value)
    {
        return $this->set(self::GOOGLE_PLUS_USER, $value);
    }

    /**
     * Returns value of 'google_plus_user' property
     *
     * @return boolean
     */
    public function getGooglePlusUser()
    {
        $value = $this->get(self::GOOGLE_PLUS_USER);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'desktop_sound_setting' property
     *
     * @param \DesktopSoundSetting $value Property value
     *
     * @return null
     */
    public function setDesktopSoundSetting(\DesktopSoundSetting $value=null)
    {
        return $this->set(self::DESKTOP_SOUND_SETTING, $value);
    }

    /**
     * Returns value of 'desktop_sound_setting' property
     *
     * @return \DesktopSoundSetting
     */
    public function getDesktopSoundSetting()
    {
        return $this->get(self::DESKTOP_SOUND_SETTING);
    }

    /**
     * Sets value of 'rich_presence_state' property
     *
     * @param \RichPresenceState $value Property value
     *
     * @return null
     */
    public function setRichPresenceState(\RichPresenceState $value=null)
    {
        return $this->set(self::RICH_PRESENCE_STATE, $value);
    }

    /**
     * Returns value of 'rich_presence_state' property
     *
     * @return \RichPresenceState
     */
    public function getRichPresenceState()
    {
        return $this->get(self::RICH_PRESENCE_STATE);
    }

    /**
     * Sets value of 'default_country' property
     *
     * @param \Country $value Property value
     *
     * @return null
     */
    public function setDefaultCountry(\Country $value=null)
    {
        return $this->set(self::DEFAULT_COUNTRY, $value);
    }

    /**
     * Returns value of 'default_country' property
     *
     * @return \Country
     */
    public function getDefaultCountry()
    {
        return $this->get(self::DEFAULT_COUNTRY);
    }
}
}