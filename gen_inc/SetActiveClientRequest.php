<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * SetActiveClientRequest message
 */
class SetActiveClientRequest extends \ProtobufMessage
{
    /* Field index constants */
    const REQUEST_HEADER = 1;
    const IS_ACTIVE = 2;
    const FULL_JID = 3;
    const TIMEOUT_SECS = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUEST_HEADER => array(
            'name' => 'request_header',
            'required' => false,
            'type' => '\RequestHeader'
        ),
        self::IS_ACTIVE => array(
            'name' => 'is_active',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::FULL_JID => array(
            'name' => 'full_jid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TIMEOUT_SECS => array(
            'name' => 'timeout_secs',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::IS_ACTIVE] = null;
        $this->values[self::FULL_JID] = null;
        $this->values[self::TIMEOUT_SECS] = null;
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
     * Sets value of 'is_active' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsActive($value)
    {
        return $this->set(self::IS_ACTIVE, $value);
    }

    /**
     * Returns value of 'is_active' property
     *
     * @return boolean
     */
    public function getIsActive()
    {
        $value = $this->get(self::IS_ACTIVE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'full_jid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFullJid($value)
    {
        return $this->set(self::FULL_JID, $value);
    }

    /**
     * Returns value of 'full_jid' property
     *
     * @return string
     */
    public function getFullJid()
    {
        $value = $this->get(self::FULL_JID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'timeout_secs' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimeoutSecs($value)
    {
        return $this->set(self::TIMEOUT_SECS, $value);
    }

    /**
     * Returns value of 'timeout_secs' property
     *
     * @return integer
     */
    public function getTimeoutSecs()
    {
        $value = $this->get(self::TIMEOUT_SECS);
        return $value === null ? (integer)$value : $value;
    }
}
}