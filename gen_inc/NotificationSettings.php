<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * NotificationSettings message
 */
class NotificationSettings extends \ProtobufMessage
{
    /* Field index constants */
    const DND_SETTINGS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DND_SETTINGS => array(
            'name' => 'dnd_settings',
            'required' => false,
            'type' => '\DoNotDisturbSetting'
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
        $this->values[self::DND_SETTINGS] = null;
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
     * Sets value of 'dnd_settings' property
     *
     * @param \DoNotDisturbSetting $value Property value
     *
     * @return null
     */
    public function setDndSettings(\DoNotDisturbSetting $value=null)
    {
        return $this->set(self::DND_SETTINGS, $value);
    }

    /**
     * Returns value of 'dnd_settings' property
     *
     * @return \DoNotDisturbSetting
     */
    public function getDndSettings()
    {
        return $this->get(self::DND_SETTINGS);
    }
}
}