<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * EmbedItem message
 */
class EmbedItem extends \ProtobufMessage
{
    /* Field index constants */
    const TYPE = 1;
    const ID = 2;
    const PLUS_PHOTO = 27639957;
    const PLACE = 35825640;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TYPE => array(
            'name' => 'type',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PLUS_PHOTO => array(
            'name' => 'plus_photo',
            'required' => false,
            'type' => '\PlusPhoto'
        ),
        self::PLACE => array(
            'name' => 'place',
            'required' => false,
            'type' => '\Place'
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
        $this->values[self::TYPE] = array();
        $this->values[self::ID] = null;
        $this->values[self::PLUS_PHOTO] = null;
        $this->values[self::PLACE] = null;
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
     * Appends value to 'type' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendType($value)
    {
        return $this->append(self::TYPE, $value);
    }

    /**
     * Clears 'type' list
     *
     * @return null
     */
    public function clearType()
    {
        return $this->clear(self::TYPE);
    }

    /**
     * Returns 'type' list
     *
     * @return integer[]
     */
    public function getType()
    {
        return $this->get(self::TYPE);
    }

    /**
     * Returns 'type' iterator
     *
     * @return \ArrayIterator
     */
    public function getTypeIterator()
    {
        return new \ArrayIterator($this->get(self::TYPE));
    }

    /**
     * Returns element from 'type' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getTypeAt($offset)
    {
        return $this->get(self::TYPE, $offset);
    }

    /**
     * Returns count of 'type' list
     *
     * @return int
     */
    public function getTypeCount()
    {
        return $this->count(self::TYPE);
    }

    /**
     * Sets value of 'id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::ID, $value);
    }

    /**
     * Returns value of 'id' property
     *
     * @return string
     */
    public function getId()
    {
        $value = $this->get(self::ID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'plus_photo' property
     *
     * @param \PlusPhoto $value Property value
     *
     * @return null
     */
    public function setPlusPhoto(\PlusPhoto $value=null)
    {
        return $this->set(self::PLUS_PHOTO, $value);
    }

    /**
     * Returns value of 'plus_photo' property
     *
     * @return \PlusPhoto
     */
    public function getPlusPhoto()
    {
        return $this->get(self::PLUS_PHOTO);
    }

    /**
     * Sets value of 'place' property
     *
     * @param \Place $value Property value
     *
     * @return null
     */
    public function setPlace(\Place $value=null)
    {
        return $this->set(self::PLACE, $value);
    }

    /**
     * Returns value of 'place' property
     *
     * @return \Place
     */
    public function getPlace()
    {
        return $this->get(self::PLACE);
    }
}
}