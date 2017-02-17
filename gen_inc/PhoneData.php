<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * PhoneData message
 */
class PhoneData extends \ProtobufMessage
{
    /* Field index constants */
    const PHONE = 1;
    const CALLER_ID_SETTINGS_MASK = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PHONE => array(
            'name' => 'phone',
            'repeated' => true,
            'type' => '\Phone'
        ),
        self::CALLER_ID_SETTINGS_MASK => array(
            'name' => 'caller_id_settings_mask',
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
        $this->values[self::PHONE] = array();
        $this->values[self::CALLER_ID_SETTINGS_MASK] = null;
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
     * Appends value to 'phone' list
     *
     * @param \Phone $value Value to append
     *
     * @return null
     */
    public function appendPhone(\Phone $value)
    {
        return $this->append(self::PHONE, $value);
    }

    /**
     * Clears 'phone' list
     *
     * @return null
     */
    public function clearPhone()
    {
        return $this->clear(self::PHONE);
    }

    /**
     * Returns 'phone' list
     *
     * @return \Phone[]
     */
    public function getPhone()
    {
        return $this->get(self::PHONE);
    }

    /**
     * Returns 'phone' iterator
     *
     * @return \ArrayIterator
     */
    public function getPhoneIterator()
    {
        return new \ArrayIterator($this->get(self::PHONE));
    }

    /**
     * Returns element from 'phone' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Phone
     */
    public function getPhoneAt($offset)
    {
        return $this->get(self::PHONE, $offset);
    }

    /**
     * Returns count of 'phone' list
     *
     * @return int
     */
    public function getPhoneCount()
    {
        return $this->count(self::PHONE);
    }

    /**
     * Sets value of 'caller_id_settings_mask' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCallerIdSettingsMask($value)
    {
        return $this->set(self::CALLER_ID_SETTINGS_MASK, $value);
    }

    /**
     * Returns value of 'caller_id_settings_mask' property
     *
     * @return integer
     */
    public function getCallerIdSettingsMask()
    {
        $value = $this->get(self::CALLER_ID_SETTINGS_MASK);
        return $value === null ? (integer)$value : $value;
    }
}
}