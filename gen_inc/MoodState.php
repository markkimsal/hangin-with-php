<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * MoodState message
 */
class MoodState extends \ProtobufMessage
{
    /* Field index constants */
    const MOOD_SETTING = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
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