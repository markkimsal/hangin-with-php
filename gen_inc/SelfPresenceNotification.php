<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * SelfPresenceNotification message
 */
class SelfPresenceNotification extends \ProtobufMessage
{
    /* Field index constants */
    const CLIENT_PRESENCE_STATE = 1;
    const DO_NOT_DISTURB_SETTING = 3;
    const DESKTOP_OFF_SETTING = 4;
    const DESKTOP_OFF_STATE = 5;
    const MOOD_STATE = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CLIENT_PRESENCE_STATE => array(
            'name' => 'client_presence_state',
            'required' => false,
            'type' => '\ClientPresenceState'
        ),
        self::DO_NOT_DISTURB_SETTING => array(
            'name' => 'do_not_disturb_setting',
            'required' => false,
            'type' => '\DoNotDisturbSetting'
        ),
        self::DESKTOP_OFF_SETTING => array(
            'name' => 'desktop_off_setting',
            'required' => false,
            'type' => '\DesktopOffSetting'
        ),
        self::DESKTOP_OFF_STATE => array(
            'name' => 'desktop_off_state',
            'required' => false,
            'type' => '\DesktopOffState'
        ),
        self::MOOD_STATE => array(
            'name' => 'mood_state',
            'required' => false,
            'type' => '\MoodState'
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
        $this->values[self::CLIENT_PRESENCE_STATE] = null;
        $this->values[self::DO_NOT_DISTURB_SETTING] = null;
        $this->values[self::DESKTOP_OFF_SETTING] = null;
        $this->values[self::DESKTOP_OFF_STATE] = null;
        $this->values[self::MOOD_STATE] = null;
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
     * Sets value of 'client_presence_state' property
     *
     * @param \ClientPresenceState $value Property value
     *
     * @return null
     */
    public function setClientPresenceState(\ClientPresenceState $value=null)
    {
        return $this->set(self::CLIENT_PRESENCE_STATE, $value);
    }

    /**
     * Returns value of 'client_presence_state' property
     *
     * @return \ClientPresenceState
     */
    public function getClientPresenceState()
    {
        return $this->get(self::CLIENT_PRESENCE_STATE);
    }

    /**
     * Sets value of 'do_not_disturb_setting' property
     *
     * @param \DoNotDisturbSetting $value Property value
     *
     * @return null
     */
    public function setDoNotDisturbSetting(\DoNotDisturbSetting $value=null)
    {
        return $this->set(self::DO_NOT_DISTURB_SETTING, $value);
    }

    /**
     * Returns value of 'do_not_disturb_setting' property
     *
     * @return \DoNotDisturbSetting
     */
    public function getDoNotDisturbSetting()
    {
        return $this->get(self::DO_NOT_DISTURB_SETTING);
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
     * Sets value of 'mood_state' property
     *
     * @param \MoodState $value Property value
     *
     * @return null
     */
    public function setMoodState(\MoodState $value=null)
    {
        return $this->set(self::MOOD_STATE, $value);
    }

    /**
     * Returns value of 'mood_state' property
     *
     * @return \MoodState
     */
    public function getMoodState()
    {
        return $this->get(self::MOOD_STATE);
    }
}
}