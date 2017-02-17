<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * ClientIdentifier message
 */
class ClientIdentifier extends \ProtobufMessage
{
    /* Field index constants */
    const RESOURCE = 1;
    const HEADER_ID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RESOURCE => array(
            'name' => 'resource',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::HEADER_ID => array(
            'name' => 'header_id',
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
        $this->values[self::RESOURCE] = null;
        $this->values[self::HEADER_ID] = null;
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
     * Sets value of 'resource' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setResource($value)
    {
        return $this->set(self::RESOURCE, $value);
    }

    /**
     * Returns value of 'resource' property
     *
     * @return string
     */
    public function getResource()
    {
        $value = $this->get(self::RESOURCE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'header_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHeaderId($value)
    {
        return $this->set(self::HEADER_ID, $value);
    }

    /**
     * Returns value of 'header_id' property
     *
     * @return string
     */
    public function getHeaderId()
    {
        $value = $this->get(self::HEADER_ID);
        return $value === null ? (string)$value : $value;
    }
}
}