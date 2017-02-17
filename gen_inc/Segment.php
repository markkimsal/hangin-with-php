<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * Segment message
 */
class Segment extends \ProtobufMessage
{
    /* Field index constants */
    const TYPE = 1;
    const TEXT = 2;
    const FORMATTING = 3;
    const LINK_DATA = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TYPE => array(
            'name' => 'type',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TEXT => array(
            'name' => 'text',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FORMATTING => array(
            'name' => 'formatting',
            'required' => false,
            'type' => '\Formatting'
        ),
        self::LINK_DATA => array(
            'name' => 'link_data',
            'required' => false,
            'type' => '\LinkData'
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
        $this->values[self::TYPE] = null;
        $this->values[self::TEXT] = null;
        $this->values[self::FORMATTING] = null;
        $this->values[self::LINK_DATA] = null;
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
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'text' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setText($value)
    {
        return $this->set(self::TEXT, $value);
    }

    /**
     * Returns value of 'text' property
     *
     * @return string
     */
    public function getText()
    {
        $value = $this->get(self::TEXT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'formatting' property
     *
     * @param \Formatting $value Property value
     *
     * @return null
     */
    public function setFormatting(\Formatting $value=null)
    {
        return $this->set(self::FORMATTING, $value);
    }

    /**
     * Returns value of 'formatting' property
     *
     * @return \Formatting
     */
    public function getFormatting()
    {
        return $this->get(self::FORMATTING);
    }

    /**
     * Sets value of 'link_data' property
     *
     * @param \LinkData $value Property value
     *
     * @return null
     */
    public function setLinkData(\LinkData $value=null)
    {
        return $this->set(self::LINK_DATA, $value);
    }

    /**
     * Returns value of 'link_data' property
     *
     * @return \LinkData
     */
    public function getLinkData()
    {
        return $this->get(self::LINK_DATA);
    }
}
}