<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * PresenceNotification message
 */
class PresenceNotification extends \ProtobufMessage
{
    /* Field index constants */
    const PRESENCE = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PRESENCE => array(
            'name' => 'presence',
            'repeated' => true,
            'type' => '\PresenceResult'
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
        $this->values[self::PRESENCE] = array();
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
     * Appends value to 'presence' list
     *
     * @param \PresenceResult $value Value to append
     *
     * @return null
     */
    public function appendPresence(\PresenceResult $value)
    {
        return $this->append(self::PRESENCE, $value);
    }

    /**
     * Clears 'presence' list
     *
     * @return null
     */
    public function clearPresence()
    {
        return $this->clear(self::PRESENCE);
    }

    /**
     * Returns 'presence' list
     *
     * @return \PresenceResult[]
     */
    public function getPresence()
    {
        return $this->get(self::PRESENCE);
    }

    /**
     * Returns 'presence' iterator
     *
     * @return \ArrayIterator
     */
    public function getPresenceIterator()
    {
        return new \ArrayIterator($this->get(self::PRESENCE));
    }

    /**
     * Returns element from 'presence' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PresenceResult
     */
    public function getPresenceAt($offset)
    {
        return $this->get(self::PRESENCE, $offset);
    }

    /**
     * Returns count of 'presence' list
     *
     * @return int
     */
    public function getPresenceCount()
    {
        return $this->count(self::PRESENCE);
    }
}
}