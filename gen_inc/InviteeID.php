<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * InviteeID message
 */
class InviteeID extends \ProtobufMessage
{
    /* Field index constants */
    const GAIA_ID = 1;
    const FALLBACK_NAME = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GAIA_ID => array(
            'name' => 'gaia_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FALLBACK_NAME => array(
            'name' => 'fallback_name',
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
        $this->values[self::GAIA_ID] = null;
        $this->values[self::FALLBACK_NAME] = null;
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
     * Sets value of 'gaia_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGaiaId($value)
    {
        return $this->set(self::GAIA_ID, $value);
    }

    /**
     * Returns value of 'gaia_id' property
     *
     * @return string
     */
    public function getGaiaId()
    {
        $value = $this->get(self::GAIA_ID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'fallback_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFallbackName($value)
    {
        return $this->set(self::FALLBACK_NAME, $value);
    }

    /**
     * Returns value of 'fallback_name' property
     *
     * @return string
     */
    public function getFallbackName()
    {
        $value = $this->get(self::FALLBACK_NAME);
        return $value === null ? (string)$value : $value;
    }
}
}