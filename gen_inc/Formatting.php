<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * Formatting message
 */
class Formatting extends \ProtobufMessage
{
    /* Field index constants */
    const BOLD = 1;
    const ITALIC = 2;
    const STRIKETHROUGH = 3;
    const UNDERLINE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BOLD => array(
            'name' => 'bold',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ITALIC => array(
            'name' => 'italic',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::STRIKETHROUGH => array(
            'name' => 'strikethrough',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::UNDERLINE => array(
            'name' => 'underline',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::BOLD] = null;
        $this->values[self::ITALIC] = null;
        $this->values[self::STRIKETHROUGH] = null;
        $this->values[self::UNDERLINE] = null;
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
     * Sets value of 'bold' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBold($value)
    {
        return $this->set(self::BOLD, $value);
    }

    /**
     * Returns value of 'bold' property
     *
     * @return boolean
     */
    public function getBold()
    {
        $value = $this->get(self::BOLD);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'italic' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setItalic($value)
    {
        return $this->set(self::ITALIC, $value);
    }

    /**
     * Returns value of 'italic' property
     *
     * @return boolean
     */
    public function getItalic()
    {
        $value = $this->get(self::ITALIC);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'strikethrough' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setStrikethrough($value)
    {
        return $this->set(self::STRIKETHROUGH, $value);
    }

    /**
     * Returns value of 'strikethrough' property
     *
     * @return boolean
     */
    public function getStrikethrough()
    {
        $value = $this->get(self::STRIKETHROUGH);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'underline' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setUnderline($value)
    {
        return $this->set(self::UNDERLINE, $value);
    }

    /**
     * Returns value of 'underline' property
     *
     * @return boolean
     */
    public function getUnderline()
    {
        $value = $this->get(self::UNDERLINE);
        return $value === null ? (boolean)$value : $value;
    }
}
}