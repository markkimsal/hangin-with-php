<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * GetEntityByIdRequest message
 */
class GetEntityByIdRequest extends \ProtobufMessage
{
    /* Field index constants */
    const REQUEST_HEADER = 1;
    const BATCH_LOOKUP_SPEC = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUEST_HEADER => array(
            'name' => 'request_header',
            'required' => false,
            'type' => '\RequestHeader'
        ),
        self::BATCH_LOOKUP_SPEC => array(
            'name' => 'batch_lookup_spec',
            'repeated' => true,
            'type' => '\EntityLookupSpec'
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
        $this->values[self::REQUEST_HEADER] = null;
        $this->values[self::BATCH_LOOKUP_SPEC] = array();
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
     * Sets value of 'request_header' property
     *
     * @param \RequestHeader $value Property value
     *
     * @return null
     */
    public function setRequestHeader(\RequestHeader $value=null)
    {
        return $this->set(self::REQUEST_HEADER, $value);
    }

    /**
     * Returns value of 'request_header' property
     *
     * @return \RequestHeader
     */
    public function getRequestHeader()
    {
        return $this->get(self::REQUEST_HEADER);
    }

    /**
     * Appends value to 'batch_lookup_spec' list
     *
     * @param \EntityLookupSpec $value Value to append
     *
     * @return null
     */
    public function appendBatchLookupSpec(\EntityLookupSpec $value)
    {
        return $this->append(self::BATCH_LOOKUP_SPEC, $value);
    }

    /**
     * Clears 'batch_lookup_spec' list
     *
     * @return null
     */
    public function clearBatchLookupSpec()
    {
        return $this->clear(self::BATCH_LOOKUP_SPEC);
    }

    /**
     * Returns 'batch_lookup_spec' list
     *
     * @return \EntityLookupSpec[]
     */
    public function getBatchLookupSpec()
    {
        return $this->get(self::BATCH_LOOKUP_SPEC);
    }

    /**
     * Returns 'batch_lookup_spec' iterator
     *
     * @return \ArrayIterator
     */
    public function getBatchLookupSpecIterator()
    {
        return new \ArrayIterator($this->get(self::BATCH_LOOKUP_SPEC));
    }

    /**
     * Returns element from 'batch_lookup_spec' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \EntityLookupSpec
     */
    public function getBatchLookupSpecAt($offset)
    {
        return $this->get(self::BATCH_LOOKUP_SPEC, $offset);
    }

    /**
     * Returns count of 'batch_lookup_spec' list
     *
     * @return int
     */
    public function getBatchLookupSpecCount()
    {
        return $this->count(self::BATCH_LOOKUP_SPEC);
    }
}
}