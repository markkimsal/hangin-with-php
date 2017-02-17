<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * StateUpdateHeader message
 */
class StateUpdateHeader extends \ProtobufMessage
{
    /* Field index constants */
    const ACTIVE_CLIENT_STATE = 1;
    const REQUEST_TRACE_ID = 3;
    const NOTIFICATION_SETTINGS = 4;
    const CURRENT_SERVER_TIME = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ACTIVE_CLIENT_STATE => array(
            'name' => 'active_client_state',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REQUEST_TRACE_ID => array(
            'name' => 'request_trace_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NOTIFICATION_SETTINGS => array(
            'name' => 'notification_settings',
            'required' => false,
            'type' => '\NotificationSettings'
        ),
        self::CURRENT_SERVER_TIME => array(
            'name' => 'current_server_time',
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
        $this->values[self::ACTIVE_CLIENT_STATE] = null;
        $this->values[self::REQUEST_TRACE_ID] = null;
        $this->values[self::NOTIFICATION_SETTINGS] = null;
        $this->values[self::CURRENT_SERVER_TIME] = null;
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
     * Sets value of 'active_client_state' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setActiveClientState($value)
    {
        return $this->set(self::ACTIVE_CLIENT_STATE, $value);
    }

    /**
     * Returns value of 'active_client_state' property
     *
     * @return integer
     */
    public function getActiveClientState()
    {
        $value = $this->get(self::ACTIVE_CLIENT_STATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'request_trace_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRequestTraceId($value)
    {
        return $this->set(self::REQUEST_TRACE_ID, $value);
    }

    /**
     * Returns value of 'request_trace_id' property
     *
     * @return string
     */
    public function getRequestTraceId()
    {
        $value = $this->get(self::REQUEST_TRACE_ID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'notification_settings' property
     *
     * @param \NotificationSettings $value Property value
     *
     * @return null
     */
    public function setNotificationSettings(\NotificationSettings $value=null)
    {
        return $this->set(self::NOTIFICATION_SETTINGS, $value);
    }

    /**
     * Returns value of 'notification_settings' property
     *
     * @return \NotificationSettings
     */
    public function getNotificationSettings()
    {
        return $this->get(self::NOTIFICATION_SETTINGS);
    }

    /**
     * Sets value of 'current_server_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCurrentServerTime($value)
    {
        return $this->set(self::CURRENT_SERVER_TIME, $value);
    }

    /**
     * Returns value of 'current_server_time' property
     *
     * @return integer
     */
    public function getCurrentServerTime()
    {
        $value = $this->get(self::CURRENT_SERVER_TIME);
        return $value === null ? (integer)$value : $value;
    }
}
}