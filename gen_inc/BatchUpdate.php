<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * BatchUpdate message
 */
class BatchUpdate extends \ProtobufMessage
{
    /* Field index constants */
    const STATE_UPDATE = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STATE_UPDATE => array(
            'name' => 'state_update',
            'repeated' => true,
            'type' => '\StateUpdate'
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
        $this->values[self::STATE_UPDATE] = array();
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
     * Appends value to 'state_update' list
     *
     * @param \StateUpdate $value Value to append
     *
     * @return null
     */
    public function appendStateUpdate(\StateUpdate $value)
    {
        return $this->append(self::STATE_UPDATE, $value);
    }

    /**
     * Clears 'state_update' list
     *
     * @return null
     */
    public function clearStateUpdate()
    {
        return $this->clear(self::STATE_UPDATE);
    }

    /**
     * Returns 'state_update' list
     *
     * @return \StateUpdate[]
     */
    public function getStateUpdate()
    {
        return $this->get(self::STATE_UPDATE);
    }

    /**
     * Returns 'state_update' iterator
     *
     * @return \ArrayIterator
     */
    public function getStateUpdateIterator()
    {
        return new \ArrayIterator($this->get(self::STATE_UPDATE));
    }

    /**
     * Returns element from 'state_update' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \StateUpdate
     */
    public function getStateUpdateAt($offset)
    {
        return $this->get(self::STATE_UPDATE, $offset);
    }

    /**
     * Returns count of 'state_update' list
     *
     * @return int
     */
    public function getStateUpdateCount()
    {
        return $this->count(self::STATE_UPDATE);
    }
}
}