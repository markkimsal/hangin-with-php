<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * SuggestedContactGroupHash message
 */
class SuggestedContactGroupHash extends \ProtobufMessage
{
    /* Field index constants */
    const MAX_RESULTS = 1;
    const HASH = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MAX_RESULTS => array(
            'name' => 'max_results',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HASH => array(
            'name' => 'hash',
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
        $this->values[self::MAX_RESULTS] = null;
        $this->values[self::HASH] = null;
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
     * Sets value of 'max_results' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxResults($value)
    {
        return $this->set(self::MAX_RESULTS, $value);
    }

    /**
     * Returns value of 'max_results' property
     *
     * @return integer
     */
    public function getMaxResults()
    {
        $value = $this->get(self::MAX_RESULTS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'hash' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHash($value)
    {
        return $this->set(self::HASH, $value);
    }

    /**
     * Returns value of 'hash' property
     *
     * @return string
     */
    public function getHash()
    {
        $value = $this->get(self::HASH);
        return $value === null ? (string)$value : $value;
    }
}
}