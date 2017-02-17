<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * RichPresenceEnabledStateNotification message
 */
class RichPresenceEnabledStateNotification extends \ProtobufMessage
{
    /* Field index constants */
    const RICH_PRESENCE_ENABLED_STATE = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RICH_PRESENCE_ENABLED_STATE => array(
            'name' => 'rich_presence_enabled_state',
            'repeated' => true,
            'type' => '\RichPresenceEnabledState'
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
        $this->values[self::RICH_PRESENCE_ENABLED_STATE] = array();
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
     * Appends value to 'rich_presence_enabled_state' list
     *
     * @param \RichPresenceEnabledState $value Value to append
     *
     * @return null
     */
    public function appendRichPresenceEnabledState(\RichPresenceEnabledState $value)
    {
        return $this->append(self::RICH_PRESENCE_ENABLED_STATE, $value);
    }

    /**
     * Clears 'rich_presence_enabled_state' list
     *
     * @return null
     */
    public function clearRichPresenceEnabledState()
    {
        return $this->clear(self::RICH_PRESENCE_ENABLED_STATE);
    }

    /**
     * Returns 'rich_presence_enabled_state' list
     *
     * @return \RichPresenceEnabledState[]
     */
    public function getRichPresenceEnabledState()
    {
        return $this->get(self::RICH_PRESENCE_ENABLED_STATE);
    }

    /**
     * Returns 'rich_presence_enabled_state' iterator
     *
     * @return \ArrayIterator
     */
    public function getRichPresenceEnabledStateIterator()
    {
        return new \ArrayIterator($this->get(self::RICH_PRESENCE_ENABLED_STATE));
    }

    /**
     * Returns element from 'rich_presence_enabled_state' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \RichPresenceEnabledState
     */
    public function getRichPresenceEnabledStateAt($offset)
    {
        return $this->get(self::RICH_PRESENCE_ENABLED_STATE, $offset);
    }

    /**
     * Returns count of 'rich_presence_enabled_state' list
     *
     * @return int
     */
    public function getRichPresenceEnabledStateCount()
    {
        return $this->count(self::RICH_PRESENCE_ENABLED_STATE);
    }
}
}