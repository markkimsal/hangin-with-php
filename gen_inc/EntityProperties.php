<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * EntityProperties message
 */
class EntityProperties extends \ProtobufMessage
{
    /* Field index constants */
    const TYPE = 1;
    const DISPLAY_NAME = 2;
    const FIRST_NAME = 3;
    const PHOTO_URL = 4;
    const EMAIL = 5;
    const PHONE = 6;
    const IN_USERS_DOMAIN = 10;
    const GENDER = 11;
    const PHOTO_URL_STATUS = 12;
    const CANONICAL_EMAIL = 15;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DISPLAY_NAME => array(
            'name' => 'display_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FIRST_NAME => array(
            'name' => 'first_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PHOTO_URL => array(
            'name' => 'photo_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::EMAIL => array(
            'name' => 'email',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PHONE => array(
            'name' => 'phone',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::IN_USERS_DOMAIN => array(
            'name' => 'in_users_domain',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::GENDER => array(
            'name' => 'gender',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PHOTO_URL_STATUS => array(
            'name' => 'photo_url_status',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CANONICAL_EMAIL => array(
            'name' => 'canonical_email',
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
        $this->values[self::TYPE] = null;
        $this->values[self::DISPLAY_NAME] = null;
        $this->values[self::FIRST_NAME] = null;
        $this->values[self::PHOTO_URL] = null;
        $this->values[self::EMAIL] = array();
        $this->values[self::PHONE] = array();
        $this->values[self::IN_USERS_DOMAIN] = null;
        $this->values[self::GENDER] = null;
        $this->values[self::PHOTO_URL_STATUS] = null;
        $this->values[self::CANONICAL_EMAIL] = null;
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
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'display_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDisplayName($value)
    {
        return $this->set(self::DISPLAY_NAME, $value);
    }

    /**
     * Returns value of 'display_name' property
     *
     * @return string
     */
    public function getDisplayName()
    {
        $value = $this->get(self::DISPLAY_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'first_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFirstName($value)
    {
        return $this->set(self::FIRST_NAME, $value);
    }

    /**
     * Returns value of 'first_name' property
     *
     * @return string
     */
    public function getFirstName()
    {
        $value = $this->get(self::FIRST_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'photo_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPhotoUrl($value)
    {
        return $this->set(self::PHOTO_URL, $value);
    }

    /**
     * Returns value of 'photo_url' property
     *
     * @return string
     */
    public function getPhotoUrl()
    {
        $value = $this->get(self::PHOTO_URL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'email' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendEmail($value)
    {
        return $this->append(self::EMAIL, $value);
    }

    /**
     * Clears 'email' list
     *
     * @return null
     */
    public function clearEmail()
    {
        return $this->clear(self::EMAIL);
    }

    /**
     * Returns 'email' list
     *
     * @return string[]
     */
    public function getEmail()
    {
        return $this->get(self::EMAIL);
    }

    /**
     * Returns 'email' iterator
     *
     * @return \ArrayIterator
     */
    public function getEmailIterator()
    {
        return new \ArrayIterator($this->get(self::EMAIL));
    }

    /**
     * Returns element from 'email' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getEmailAt($offset)
    {
        return $this->get(self::EMAIL, $offset);
    }

    /**
     * Returns count of 'email' list
     *
     * @return int
     */
    public function getEmailCount()
    {
        return $this->count(self::EMAIL);
    }

    /**
     * Appends value to 'phone' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendPhone($value)
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
     * @return string[]
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
     * @return string
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
     * Sets value of 'in_users_domain' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setInUsersDomain($value)
    {
        return $this->set(self::IN_USERS_DOMAIN, $value);
    }

    /**
     * Returns value of 'in_users_domain' property
     *
     * @return boolean
     */
    public function getInUsersDomain()
    {
        $value = $this->get(self::IN_USERS_DOMAIN);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'gender' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGender($value)
    {
        return $this->set(self::GENDER, $value);
    }

    /**
     * Returns value of 'gender' property
     *
     * @return integer
     */
    public function getGender()
    {
        $value = $this->get(self::GENDER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'photo_url_status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPhotoUrlStatus($value)
    {
        return $this->set(self::PHOTO_URL_STATUS, $value);
    }

    /**
     * Returns value of 'photo_url_status' property
     *
     * @return integer
     */
    public function getPhotoUrlStatus()
    {
        $value = $this->get(self::PHOTO_URL_STATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'canonical_email' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCanonicalEmail($value)
    {
        return $this->set(self::CANONICAL_EMAIL, $value);
    }

    /**
     * Returns value of 'canonical_email' property
     *
     * @return string
     */
    public function getCanonicalEmail()
    {
        $value = $this->get(self::CANONICAL_EMAIL);
        return $value === null ? (string)$value : $value;
    }
}
}