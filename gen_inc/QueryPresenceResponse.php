<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * QueryPresenceResponse message
 */
class QueryPresenceResponse extends \ProtobufMessage
{
    /* Field index constants */
    const RESPONSE_HEADER = 1;
    const PRESENCE_RESULT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RESPONSE_HEADER => array(
            'name' => 'response_header',
            'required' => false,
            'type' => '\ResponseHeader'
        ),
        self::PRESENCE_RESULT => array(
            'name' => 'presence_result',
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
        $this->values[self::RESPONSE_HEADER] = null;
        $this->values[self::PRESENCE_RESULT] = array();
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
     * Sets value of 'response_header' property
     *
     * @param \ResponseHeader $value Property value
     *
     * @return null
     */
    public function setResponseHeader(\ResponseHeader $value=null)
    {
        return $this->set(self::RESPONSE_HEADER, $value);
    }

    /**
     * Returns value of 'response_header' property
     *
     * @return \ResponseHeader
     */
    public function getResponseHeader()
    {
        return $this->get(self::RESPONSE_HEADER);
    }

    /**
     * Appends value to 'presence_result' list
     *
     * @param \PresenceResult $value Value to append
     *
     * @return null
     */
    public function appendPresenceResult(\PresenceResult $value)
    {
        return $this->append(self::PRESENCE_RESULT, $value);
    }

    /**
     * Clears 'presence_result' list
     *
     * @return null
     */
    public function clearPresenceResult()
    {
        return $this->clear(self::PRESENCE_RESULT);
    }

    /**
     * Returns 'presence_result' list
     *
     * @return \PresenceResult[]
     */
    public function getPresenceResult()
    {
        return $this->get(self::PRESENCE_RESULT);
    }

    /**
     * Returns 'presence_result' iterator
     *
     * @return \ArrayIterator
     */
    public function getPresenceResultIterator()
    {
        return new \ArrayIterator($this->get(self::PRESENCE_RESULT));
    }

    /**
     * Returns element from 'presence_result' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PresenceResult
     */
    public function getPresenceResultAt($offset)
    {
        return $this->get(self::PRESENCE_RESULT, $offset);
    }

    /**
     * Returns count of 'presence_result' list
     *
     * @return int
     */
    public function getPresenceResultCount()
    {
        return $this->count(self::PRESENCE_RESULT);
    }
}
}