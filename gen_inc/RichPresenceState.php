<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * RichPresenceState message
 */
class RichPresenceState extends \ProtobufMessage
{
    /* Field index constants */
    const GET_RICH_PRESENCE_ENABLED_STATE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GET_RICH_PRESENCE_ENABLED_STATE => array(
            'name' => 'get_rich_presence_enabled_state',
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
        $this->values[self::GET_RICH_PRESENCE_ENABLED_STATE] = array();
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
     * Appends value to 'get_rich_presence_enabled_state' list
     *
     * @param \RichPresenceEnabledState $value Value to append
     *
     * @return null
     */
    public function appendGetRichPresenceEnabledState(\RichPresenceEnabledState $value)
    {
        return $this->append(self::GET_RICH_PRESENCE_ENABLED_STATE, $value);
    }

    /**
     * Clears 'get_rich_presence_enabled_state' list
     *
     * @return null
     */
    public function clearGetRichPresenceEnabledState()
    {
        return $this->clear(self::GET_RICH_PRESENCE_ENABLED_STATE);
    }

    /**
     * Returns 'get_rich_presence_enabled_state' list
     *
     * @return \RichPresenceEnabledState[]
     */
    public function getGetRichPresenceEnabledState()
    {
        return $this->get(self::GET_RICH_PRESENCE_ENABLED_STATE);
    }

    /**
     * Returns 'get_rich_presence_enabled_state' iterator
     *
     * @return \ArrayIterator
     */
    public function getGetRichPresenceEnabledStateIterator()
    {
        return new \ArrayIterator($this->get(self::GET_RICH_PRESENCE_ENABLED_STATE));
    }

    /**
     * Returns element from 'get_rich_presence_enabled_state' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \RichPresenceEnabledState
     */
    public function getGetRichPresenceEnabledStateAt($offset)
    {
        return $this->get(self::GET_RICH_PRESENCE_ENABLED_STATE, $offset);
    }

    /**
     * Returns count of 'get_rich_presence_enabled_state' list
     *
     * @return int
     */
    public function getGetRichPresenceEnabledStateCount()
    {
        return $this->count(self::GET_RICH_PRESENCE_ENABLED_STATE);
    }
}
}