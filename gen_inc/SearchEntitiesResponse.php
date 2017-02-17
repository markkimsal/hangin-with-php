<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * SearchEntitiesResponse message
 */
class SearchEntitiesResponse extends \ProtobufMessage
{
    /* Field index constants */
    const RESPONSE_HEADER = 1;
    const ENTITY = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RESPONSE_HEADER => array(
            'name' => 'response_header',
            'required' => false,
            'type' => '\ResponseHeader'
        ),
        self::ENTITY => array(
            'name' => 'entity',
            'repeated' => true,
            'type' => '\Entity'
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
        $this->values[self::ENTITY] = array();
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
     * Appends value to 'entity' list
     *
     * @param \Entity $value Value to append
     *
     * @return null
     */
    public function appendEntity(\Entity $value)
    {
        return $this->append(self::ENTITY, $value);
    }

    /**
     * Clears 'entity' list
     *
     * @return null
     */
    public function clearEntity()
    {
        return $this->clear(self::ENTITY);
    }

    /**
     * Returns 'entity' list
     *
     * @return \Entity[]
     */
    public function getEntity()
    {
        return $this->get(self::ENTITY);
    }

    /**
     * Returns 'entity' iterator
     *
     * @return \ArrayIterator
     */
    public function getEntityIterator()
    {
        return new \ArrayIterator($this->get(self::ENTITY));
    }

    /**
     * Returns element from 'entity' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Entity
     */
    public function getEntityAt($offset)
    {
        return $this->get(self::ENTITY, $offset);
    }

    /**
     * Returns count of 'entity' list
     *
     * @return int
     */
    public function getEntityCount()
    {
        return $this->count(self::ENTITY);
    }
}
}