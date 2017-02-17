<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * SetNotificationSettingNotification message
 */
class SetNotificationSettingNotification extends \ProtobufMessage
{
    /* Field index constants */
    const CONFIGURATION_BIT = 1;
    const DESKTOP_SOUND_SETTING = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONFIGURATION_BIT => array(
            'name' => 'configuration_bit',
            'repeated' => true,
            'type' => '\ConfigurationBit'
        ),
        self::DESKTOP_SOUND_SETTING => array(
            'name' => 'desktop_sound_setting',
            'required' => false,
            'type' => '\DesktopSoundSetting'
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
        $this->values[self::CONFIGURATION_BIT] = array();
        $this->values[self::DESKTOP_SOUND_SETTING] = null;
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
}
}