<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * ExistingMedia message
 */
class ExistingMedia extends \ProtobufMessage
{
    /* Field index constants */
    const PHOTO = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PHOTO => array(
            'name' => 'photo',
            'required' => false,
            'type' => '\Photo'
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
        $this->values[self::PHOTO] = null;
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
     * Sets value of 'photo' property
     *
     * @param \Photo $value Property value
     *
     * @return null
     */
    public function setPhoto(\Photo $value=null)
    {
        return $this->set(self::PHOTO, $value);
    }

    /**
     * Returns value of 'photo' property
     *
     * @return \Photo
     */
    public function getPhoto()
    {
        return $this->get(self::PHOTO);
    }
}
}