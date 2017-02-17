<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * MoodMessage message
 */
class MoodMessage extends \ProtobufMessage
{
    /* Field index constants */
    const MOOD_CONTENT = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MOOD_CONTENT => array(
            'name' => 'mood_content',
            'required' => false,
            'type' => '\MoodContent'
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
        $this->values[self::MOOD_CONTENT] = null;
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
     * Sets value of 'mood_content' property
     *
     * @param \MoodContent $value Property value
     *
     * @return null
     */
    public function setMoodContent(\MoodContent $value=null)
    {
        return $this->set(self::MOOD_CONTENT, $value);
    }

    /**
     * Returns value of 'mood_content' property
     *
     * @return \MoodContent
     */
    public function getMoodContent()
    {
        return $this->get(self::MOOD_CONTENT);
    }
}
}