<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * EntityLookupSpec message
 */
class EntityLookupSpec extends \ProtobufMessage
{
    /* Field index constants */
    const GAIA_ID = 1;
    const EMAIL = 3;
    const PHONE = 4;
    const CREATE_OFFNETWORK_GAIA = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GAIA_ID => array(
            'name' => 'gaia_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::EMAIL => array(
            'name' => 'email',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PHONE => array(
            'name' => 'phone',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CREATE_OFFNETWORK_GAIA => array(
            'name' => 'create_offnetwork_gaia',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::EMAIL] = null;
        $this->values[self::PHONE] = null;
        $this->values[self::CREATE_OFFNETWORK_GAIA] = null;
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
     * Sets value of 'email' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEmail($value)
    {
        return $this->set(self::EMAIL, $value);
    }

    /**
     * Returns value of 'email' property
     *
     * @return string
     */
    public function getEmail()
    {
        $value = $this->get(self::EMAIL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'phone' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPhone($value)
    {
        return $this->set(self::PHONE, $value);
    }

    /**
     * Returns value of 'phone' property
     *
     * @return string
     */
    public function getPhone()
    {
        $value = $this->get(self::PHONE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'create_offnetwork_gaia' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setCreateOffnetworkGaia($value)
    {
        return $this->set(self::CREATE_OFFNETWORK_GAIA, $value);
    }

    /**
     * Returns value of 'create_offnetwork_gaia' property
     *
     * @return boolean
     */
    public function getCreateOffnetworkGaia()
    {
        $value = $this->get(self::CREATE_OFFNETWORK_GAIA);
        return $value === null ? (boolean)$value : $value;
    }
}
}