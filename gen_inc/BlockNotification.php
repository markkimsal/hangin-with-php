<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * BlockNotification message
 */
class BlockNotification extends \ProtobufMessage
{
    /* Field index constants */
    const BLOCK_STATE_CHANGE = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BLOCK_STATE_CHANGE => array(
            'name' => 'block_state_change',
            'repeated' => true,
            'type' => '\BlockStateChange'
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
        $this->values[self::BLOCK_STATE_CHANGE] = array();
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
     * Appends value to 'block_state_change' list
     *
     * @param \BlockStateChange $value Value to append
     *
     * @return null
     */
    public function appendBlockStateChange(\BlockStateChange $value)
    {
        return $this->append(self::BLOCK_STATE_CHANGE, $value);
    }

    /**
     * Clears 'block_state_change' list
     *
     * @return null
     */
    public function clearBlockStateChange()
    {
        return $this->clear(self::BLOCK_STATE_CHANGE);
    }

    /**
     * Returns 'block_state_change' list
     *
     * @return \BlockStateChange[]
     */
    public function getBlockStateChange()
    {
        return $this->get(self::BLOCK_STATE_CHANGE);
    }

    /**
     * Returns 'block_state_change' iterator
     *
     * @return \ArrayIterator
     */
    public function getBlockStateChangeIterator()
    {
        return new \ArrayIterator($this->get(self::BLOCK_STATE_CHANGE));
    }

    /**
     * Returns element from 'block_state_change' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \BlockStateChange
     */
    public function getBlockStateChangeAt($offset)
    {
        return $this->get(self::BLOCK_STATE_CHANGE, $offset);
    }

    /**
     * Returns count of 'block_state_change' list
     *
     * @return int
     */
    public function getBlockStateChangeCount()
    {
        return $this->count(self::BLOCK_STATE_CHANGE);
    }
}
}