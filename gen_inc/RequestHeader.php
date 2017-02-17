<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * RequestHeader message
 */
class RequestHeader extends \ProtobufMessage
{
    /* Field index constants */
    const CLIENT_VERSION = 1;
    const CLIENT_IDENTIFIER = 2;
    const LANGUAGE_CODE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CLIENT_VERSION => array(
            'name' => 'client_version',
            'required' => false,
            'type' => '\ClientVersion'
        ),
        self::CLIENT_IDENTIFIER => array(
            'name' => 'client_identifier',
            'required' => false,
            'type' => '\ClientIdentifier'
        ),
        self::LANGUAGE_CODE => array(
            'name' => 'language_code',
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
        $this->values[self::CLIENT_VERSION] = null;
        $this->values[self::CLIENT_IDENTIFIER] = null;
        $this->values[self::LANGUAGE_CODE] = null;
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
     * Sets value of 'client_version' property
     *
     * @param \ClientVersion $value Property value
     *
     * @return null
     */
    public function setClientVersion(\ClientVersion $value=null)
    {
        return $this->set(self::CLIENT_VERSION, $value);
    }

    /**
     * Returns value of 'client_version' property
     *
     * @return \ClientVersion
     */
    public function getClientVersion()
    {
        return $this->get(self::CLIENT_VERSION);
    }

    /**
     * Sets value of 'client_identifier' property
     *
     * @param \ClientIdentifier $value Property value
     *
     * @return null
     */
    public function setClientIdentifier(\ClientIdentifier $value=null)
    {
        return $this->set(self::CLIENT_IDENTIFIER, $value);
    }

    /**
     * Returns value of 'client_identifier' property
     *
     * @return \ClientIdentifier
     */
    public function getClientIdentifier()
    {
        return $this->get(self::CLIENT_IDENTIFIER);
    }

    /**
     * Sets value of 'language_code' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLanguageCode($value)
    {
        return $this->set(self::LANGUAGE_CODE, $value);
    }

    /**
     * Returns value of 'language_code' property
     *
     * @return string
     */
    public function getLanguageCode()
    {
        $value = $this->get(self::LANGUAGE_CODE);
        return $value === null ? (string)$value : $value;
    }
}
}