<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * ParticipantId message
 */
class ParticipantId extends \ProtobufMessage
{
    /* Field index constants */
    const GAIA_ID = 1;
    const CHAT_ID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GAIA_ID => array(
            'name' => 'gaia_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CHAT_ID => array(
            'name' => 'chat_id',
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
        $this->values[self::CHAT_ID] = null;
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
     * Sets value of 'chat_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setChatId($value)
    {
        return $this->set(self::CHAT_ID, $value);
    }

    /**
     * Returns value of 'chat_id' property
     *
     * @return string
     */
    public function getChatId()
    {
        $value = $this->get(self::CHAT_ID);
        return $value === null ? (string)$value : $value;
    }
}
}