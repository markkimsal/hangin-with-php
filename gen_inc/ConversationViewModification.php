<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * ConversationViewModification message
 */
class ConversationViewModification extends \ProtobufMessage
{
    /* Field index constants */
    const CONVERSATION_ID = 1;
    const OLD_VIEW = 2;
    const NEW_VIEW = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONVERSATION_ID => array(
            'name' => 'conversation_id',
            'required' => false,
            'type' => '\ConversationId'
        ),
        self::OLD_VIEW => array(
            'name' => 'old_view',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEW_VIEW => array(
            'name' => 'new_view',
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
        $this->values[self::CONVERSATION_ID] = null;
        $this->values[self::OLD_VIEW] = null;
        $this->values[self::NEW_VIEW] = null;
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
     * Sets value of 'conversation_id' property
     *
     * @param \ConversationId $value Property value
     *
     * @return null
     */
    public function setConversationId(\ConversationId $value=null)
    {
        return $this->set(self::CONVERSATION_ID, $value);
    }

    /**
     * Returns value of 'conversation_id' property
     *
     * @return \ConversationId
     */
    public function getConversationId()
    {
        return $this->get(self::CONVERSATION_ID);
    }

    /**
     * Sets value of 'old_view' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOldView($value)
    {
        return $this->set(self::OLD_VIEW, $value);
    }

    /**
     * Returns value of 'old_view' property
     *
     * @return integer
     */
    public function getOldView()
    {
        $value = $this->get(self::OLD_VIEW);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'new_view' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNewView($value)
    {
        return $this->set(self::NEW_VIEW, $value);
    }

    /**
     * Returns value of 'new_view' property
     *
     * @return integer
     */
    public function getNewView()
    {
        $value = $this->get(self::NEW_VIEW);
        return $value === null ? (integer)$value : $value;
    }
}
}