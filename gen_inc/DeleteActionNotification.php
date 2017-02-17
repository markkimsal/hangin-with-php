<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * DeleteActionNotification message
 */
class DeleteActionNotification extends \ProtobufMessage
{
    /* Field index constants */
    const CONVERSATION_ID = 1;
    const DELETE_ACTION = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONVERSATION_ID => array(
            'name' => 'conversation_id',
            'required' => false,
            'type' => '\ConversationId'
        ),
        self::DELETE_ACTION => array(
            'name' => 'delete_action',
            'required' => false,
            'type' => '\DeleteAction'
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
        $this->values[self::DELETE_ACTION] = null;
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
     * Sets value of 'delete_action' property
     *
     * @param \DeleteAction $value Property value
     *
     * @return null
     */
    public function setDeleteAction(\DeleteAction $value=null)
    {
        return $this->set(self::DELETE_ACTION, $value);
    }

    /**
     * Returns value of 'delete_action' property
     *
     * @return \DeleteAction
     */
    public function getDeleteAction()
    {
        return $this->get(self::DELETE_ACTION);
    }
}
}