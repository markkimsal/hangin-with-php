<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * SuggestedContactGroup message
 */
class SuggestedContactGroup extends \ProtobufMessage
{
    /* Field index constants */
    const HASH_MATCHED = 1;
    const HASH = 2;
    const CONTACT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HASH_MATCHED => array(
            'name' => 'hash_matched',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::HASH => array(
            'name' => 'hash',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CONTACT => array(
            'name' => 'contact',
            'repeated' => true,
            'type' => '\SuggestedContact'
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
        $this->values[self::HASH_MATCHED] = null;
        $this->values[self::HASH] = null;
        $this->values[self::CONTACT] = array();
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
     * Sets value of 'hash_matched' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setHashMatched($value)
    {
        return $this->set(self::HASH_MATCHED, $value);
    }

    /**
     * Returns value of 'hash_matched' property
     *
     * @return boolean
     */
    public function getHashMatched()
    {
        $value = $this->get(self::HASH_MATCHED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'hash' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHash($value)
    {
        return $this->set(self::HASH, $value);
    }

    /**
     * Returns value of 'hash' property
     *
     * @return string
     */
    public function getHash()
    {
        $value = $this->get(self::HASH);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'contact' list
     *
     * @param \SuggestedContact $value Value to append
     *
     * @return null
     */
    public function appendContact(\SuggestedContact $value)
    {
        return $this->append(self::CONTACT, $value);
    }

    /**
     * Clears 'contact' list
     *
     * @return null
     */
    public function clearContact()
    {
        return $this->clear(self::CONTACT);
    }

    /**
     * Returns 'contact' list
     *
     * @return \SuggestedContact[]
     */
    public function getContact()
    {
        return $this->get(self::CONTACT);
    }

    /**
     * Returns 'contact' iterator
     *
     * @return \ArrayIterator
     */
    public function getContactIterator()
    {
        return new \ArrayIterator($this->get(self::CONTACT));
    }

    /**
     * Returns element from 'contact' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \SuggestedContact
     */
    public function getContactAt($offset)
    {
        return $this->get(self::CONTACT, $offset);
    }

    /**
     * Returns count of 'contact' list
     *
     * @return int
     */
    public function getContactCount()
    {
        return $this->count(self::CONTACT);
    }
}
}