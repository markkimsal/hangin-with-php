<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * ConversationRename message
 */
class ConversationRename extends \ProtobufMessage
{
    /* Field index constants */
    const NEW_NAME = 1;
    const OLD_NAME = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NEW_NAME => array(
            'name' => 'new_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::OLD_NAME => array(
            'name' => 'old_name',
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
        $this->values[self::NEW_NAME] = null;
        $this->values[self::OLD_NAME] = null;
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
     * Sets value of 'new_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNewName($value)
    {
        return $this->set(self::NEW_NAME, $value);
    }

    /**
     * Returns value of 'new_name' property
     *
     * @return string
     */
    public function getNewName()
    {
        $value = $this->get(self::NEW_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'old_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOldName($value)
    {
        return $this->set(self::OLD_NAME, $value);
    }

    /**
     * Returns value of 'old_name' property
     *
     * @return string
     */
    public function getOldName()
    {
        $value = $this->get(self::OLD_NAME);
        return $value === null ? (string)$value : $value;
    }
}
}