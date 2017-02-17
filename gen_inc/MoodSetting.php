<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * MoodSetting message
 */
class MoodSetting extends \ProtobufMessage
{
    /* Field index constants */
    const MOOD_MESSAGE = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MOOD_MESSAGE => array(
            'name' => 'mood_message',
            'required' => false,
            'type' => '\MoodMessage'
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
        $this->values[self::MOOD_MESSAGE] = null;
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
     * Sets value of 'mood_message' property
     *
     * @param \MoodMessage $value Property value
     *
     * @return null
     */
    public function setMoodMessage(\MoodMessage $value=null)
    {
        return $this->set(self::MOOD_MESSAGE, $value);
    }

    /**
     * Returns value of 'mood_message' property
     *
     * @return \MoodMessage
     */
    public function getMoodMessage()
    {
        return $this->get(self::MOOD_MESSAGE);
    }
}
}