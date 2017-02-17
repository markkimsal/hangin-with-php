<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * DesktopSoundSetting message
 */
class DesktopSoundSetting extends \ProtobufMessage
{
    /* Field index constants */
    const DESKTOP_SOUND_STATE = 1;
    const DESKTOP_RING_SOUND_STATE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DESKTOP_SOUND_STATE => array(
            'name' => 'desktop_sound_state',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DESKTOP_RING_SOUND_STATE => array(
            'name' => 'desktop_ring_sound_state',
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
        $this->values[self::DESKTOP_SOUND_STATE] = null;
        $this->values[self::DESKTOP_RING_SOUND_STATE] = null;
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
     * Sets value of 'desktop_sound_state' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDesktopSoundState($value)
    {
        return $this->set(self::DESKTOP_SOUND_STATE, $value);
    }

    /**
     * Returns value of 'desktop_sound_state' property
     *
     * @return integer
     */
    public function getDesktopSoundState()
    {
        $value = $this->get(self::DESKTOP_SOUND_STATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'desktop_ring_sound_state' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDesktopRingSoundState($value)
    {
        return $this->set(self::DESKTOP_RING_SOUND_STATE, $value);
    }

    /**
     * Returns value of 'desktop_ring_sound_state' property
     *
     * @return integer
     */
    public function getDesktopRingSoundState()
    {
        $value = $this->get(self::DESKTOP_RING_SOUND_STATE);
        return $value === null ? (integer)$value : $value;
    }
}
}