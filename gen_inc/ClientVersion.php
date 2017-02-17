<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * ClientVersion message
 */
class ClientVersion extends \ProtobufMessage
{
    /* Field index constants */
    const CLIENT_ID = 1;
    const BUILD_TYPE = 2;
    const MAJOR_VERSION = 3;
    const VERSION_TIMESTAMP = 4;
    const DEVICE_OS_VERSION = 5;
    const DEVICE_HARDWARE = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CLIENT_ID => array(
            'name' => 'client_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BUILD_TYPE => array(
            'name' => 'build_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAJOR_VERSION => array(
            'name' => 'major_version',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VERSION_TIMESTAMP => array(
            'name' => 'version_timestamp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DEVICE_OS_VERSION => array(
            'name' => 'device_os_version',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DEVICE_HARDWARE => array(
            'name' => 'device_hardware',
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
        $this->values[self::CLIENT_ID] = null;
        $this->values[self::BUILD_TYPE] = null;
        $this->values[self::MAJOR_VERSION] = null;
        $this->values[self::VERSION_TIMESTAMP] = null;
        $this->values[self::DEVICE_OS_VERSION] = null;
        $this->values[self::DEVICE_HARDWARE] = null;
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
     * Sets value of 'client_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setClientId($value)
    {
        return $this->set(self::CLIENT_ID, $value);
    }

    /**
     * Returns value of 'client_id' property
     *
     * @return integer
     */
    public function getClientId()
    {
        $value = $this->get(self::CLIENT_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'build_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBuildType($value)
    {
        return $this->set(self::BUILD_TYPE, $value);
    }

    /**
     * Returns value of 'build_type' property
     *
     * @return integer
     */
    public function getBuildType()
    {
        $value = $this->get(self::BUILD_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'major_version' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMajorVersion($value)
    {
        return $this->set(self::MAJOR_VERSION, $value);
    }

    /**
     * Returns value of 'major_version' property
     *
     * @return string
     */
    public function getMajorVersion()
    {
        $value = $this->get(self::MAJOR_VERSION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'version_timestamp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVersionTimestamp($value)
    {
        return $this->set(self::VERSION_TIMESTAMP, $value);
    }

    /**
     * Returns value of 'version_timestamp' property
     *
     * @return integer
     */
    public function getVersionTimestamp()
    {
        $value = $this->get(self::VERSION_TIMESTAMP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'device_os_version' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceOsVersion($value)
    {
        return $this->set(self::DEVICE_OS_VERSION, $value);
    }

    /**
     * Returns value of 'device_os_version' property
     *
     * @return string
     */
    public function getDeviceOsVersion()
    {
        $value = $this->get(self::DEVICE_OS_VERSION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'device_hardware' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceHardware($value)
    {
        return $this->set(self::DEVICE_HARDWARE, $value);
    }

    /**
     * Returns value of 'device_hardware' property
     *
     * @return string
     */
    public function getDeviceHardware()
    {
        $value = $this->get(self::DEVICE_HARDWARE);
        return $value === null ? (string)$value : $value;
    }
}
}