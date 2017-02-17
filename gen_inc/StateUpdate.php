<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * StateUpdate message
 */
class StateUpdate extends \ProtobufMessage
{
    /* Field index constants */
    const STATE_UPDATE_HEADER = 1;
    const CONVERSATION = 13;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STATE_UPDATE_HEADER => array(
            'name' => 'state_update_header',
            'required' => false,
            'type' => '\StateUpdateHeader'
        ),
        self::CONVERSATION => array(
            'name' => 'conversation',
            'required' => false,
            'type' => '\Conversation'
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
        $this->values[self::STATE_UPDATE_HEADER] = null;
        $this->values[self::CONVERSATION] = null;
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
     * Sets value of 'state_update_header' property
     *
     * @param \StateUpdateHeader $value Property value
     *
     * @return null
     */
    public function setStateUpdateHeader(\StateUpdateHeader $value=null)
    {
        return $this->set(self::STATE_UPDATE_HEADER, $value);
    }

    /**
     * Returns value of 'state_update_header' property
     *
     * @return \StateUpdateHeader
     */
    public function getStateUpdateHeader()
    {
        return $this->get(self::STATE_UPDATE_HEADER);
    }

    /**
     * Sets value of 'conversation' property
     *
     * @param \Conversation $value Property value
     *
     * @return null
     */
    public function setConversation(\Conversation $value=null)
    {
        return $this->set(self::CONVERSATION, $value);
    }

    /**
     * Returns value of 'conversation' property
     *
     * @return \Conversation
     */
    public function getConversation()
    {
        return $this->get(self::CONVERSATION);
    }
}
}