<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * HashModifier message
 */
class HashModifier extends \ProtobufMessage
{
    /* Field index constants */
    const UPDATE_ID = 1;
    const HASH_DIFF = 2;
    const VERSION = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::UPDATE_ID => array(
            'name' => 'update_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::HASH_DIFF => array(
            'name' => 'hash_diff',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VERSION => array(
            'name' => 'version',
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
        $this->values[self::UPDATE_ID] = null;
        $this->values[self::HASH_DIFF] = null;
        $this->values[self::VERSION] = null;
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
     * Sets value of 'update_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUpdateId($value)
    {
        return $this->set(self::UPDATE_ID, $value);
    }

    /**
     * Returns value of 'update_id' property
     *
     * @return string
     */
    public function getUpdateId()
    {
        $value = $this->get(self::UPDATE_ID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'hash_diff' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHashDiff($value)
    {
        return $this->set(self::HASH_DIFF, $value);
    }

    /**
     * Returns value of 'hash_diff' property
     *
     * @return integer
     */
    public function getHashDiff()
    {
        $value = $this->get(self::HASH_DIFF);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'version' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVersion($value)
    {
        return $this->set(self::VERSION, $value);
    }

    /**
     * Returns value of 'version' property
     *
     * @return integer
     */
    public function getVersion()
    {
        $value = $this->get(self::VERSION);
        return $value === null ? (integer)$value : $value;
    }
}
}