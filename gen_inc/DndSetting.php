<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * DndSetting message
 */
class DndSetting extends \ProtobufMessage
{
    /* Field index constants */
    const DO_NOT_DISTURB = 1;
    const TIMEOUT_SECS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DO_NOT_DISTURB => array(
            'name' => 'do_not_disturb',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::TIMEOUT_SECS => array(
            'name' => 'timeout_secs',
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
        $this->values[self::DO_NOT_DISTURB] = null;
        $this->values[self::TIMEOUT_SECS] = null;
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
     * Sets value of 'do_not_disturb' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setDoNotDisturb($value)
    {
        return $this->set(self::DO_NOT_DISTURB, $value);
    }

    /**
     * Returns value of 'do_not_disturb' property
     *
     * @return boolean
     */
    public function getDoNotDisturb()
    {
        $value = $this->get(self::DO_NOT_DISTURB);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'timeout_secs' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimeoutSecs($value)
    {
        return $this->set(self::TIMEOUT_SECS, $value);
    }

    /**
     * Returns value of 'timeout_secs' property
     *
     * @return integer
     */
    public function getTimeoutSecs()
    {
        $value = $this->get(self::TIMEOUT_SECS);
        return $value === null ? (integer)$value : $value;
    }
}
}