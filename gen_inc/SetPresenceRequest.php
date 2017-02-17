<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * SetPresenceRequest message
 */
class SetPresenceRequest extends \ProtobufMessage
{
    /* Field index constants */
    const REQUEST_HEADER = 1;
    const PRESENCE_STATE_SETTING = 2;
    const DND_SETTING = 3;
    const DESKTOP_OFF_SETTING = 5;
    const MOOD_SETTING = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUEST_HEADER => array(
            'name' => 'request_header',
            'required' => false,
            'type' => '\RequestHeader'
        ),
        self::PRESENCE_STATE_SETTING => array(
            'name' => 'presence_state_setting',
            'required' => false,
            'type' => '\PresenceStateSetting'
        ),
        self::DND_SETTING => array(
            'name' => 'dnd_setting',
            'required' => false,
            'type' => '\DndSetting'
        ),
        self::DESKTOP_OFF_SETTING => array(
            'name' => 'desktop_off_setting',
            'required' => false,
            'type' => '\DesktopOffSetting'
        ),
        self::MOOD_SETTING => array(
            'name' => 'mood_setting',
            'required' => false,
            'type' => '\MoodSetting'
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
        $this->values[self::REQUEST_HEADER] = null;
        $this->values[self::PRESENCE_STATE_SETTING] = null;
        $this->values[self::DND_SETTING] = null;
        $this->values[self::DESKTOP_OFF_SETTING] = null;
        $this->values[self::MOOD_SETTING] = null;
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
     * Sets value of 'request_header' property
     *
     * @param \RequestHeader $value Property value
     *
     * @return null
     */
    public function setRequestHeader(\RequestHeader $value=null)
    {
        return $this->set(self::REQUEST_HEADER, $value);
    }

    /**
     * Returns value of 'request_header' property
     *
     * @return \RequestHeader
     */
    public function getRequestHeader()
    {
        return $this->get(self::REQUEST_HEADER);
    }

    /**
     * Sets value of 'presence_state_setting' property
     *
     * @param \PresenceStateSetting $value Property value
     *
     * @return null
     */
    public function setPresenceStateSetting(\PresenceStateSetting $value=null)
    {
        return $this->set(self::PRESENCE_STATE_SETTING, $value);
    }

    /**
     * Returns value of 'presence_state_setting' property
     *
     * @return \PresenceStateSetting
     */
    public function getPresenceStateSetting()
    {
        return $this->get(self::PRESENCE_STATE_SETTING);
    }

    /**
     * Sets value of 'dnd_setting' property
     *
     * @param \DndSetting $value Property value
     *
     * @return null
     */
    public function setDndSetting(\DndSetting $value=null)
    {
        return $this->set(self::DND_SETTING, $value);
    }

    /**
     * Returns value of 'dnd_setting' property
     *
     * @return \DndSetting
     */
    public function getDndSetting()
    {
        return $this->get(self::DND_SETTING);
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
     * Sets value of 'mood_setting' property
     *
     * @param \MoodSetting $value Property value
     *
     * @return null
     */
    public function setMoodSetting(\MoodSetting $value=null)
    {
        return $this->set(self::MOOD_SETTING, $value);
    }

    /**
     * Returns value of 'mood_setting' property
     *
     * @return \MoodSetting
     */
    public function getMoodSetting()
    {
        return $this->get(self::MOOD_SETTING);
    }
}
}