<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * LinkData message
 */
class LinkData extends \ProtobufMessage
{
    /* Field index constants */
    const LINK_TARGET = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LINK_TARGET => array(
            'name' => 'link_target',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::LINK_TARGET] = null;
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
     * Sets value of 'link_target' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLinkTarget($value)
    {
        return $this->set(self::LINK_TARGET, $value);
    }

    /**
     * Returns value of 'link_target' property
     *
     * @return string
     */
    public function getLinkTarget()
    {
        $value = $this->get(self::LINK_TARGET);
        return $value === null ? (string)$value : $value;
    }
}
}