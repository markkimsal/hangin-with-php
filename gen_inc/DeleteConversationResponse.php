<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * DeleteConversationResponse message
 */
class DeleteConversationResponse extends \ProtobufMessage
{
    /* Field index constants */
    const RESPONSE_HEADER = 1;
    const DELETE_ACTION = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RESPONSE_HEADER => array(
            'name' => 'response_header',
            'required' => false,
            'type' => '\ResponseHeader'
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
        $this->values[self::RESPONSE_HEADER] = null;
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
     * Sets value of 'response_header' property
     *
     * @param \ResponseHeader $value Property value
     *
     * @return null
     */
    public function setResponseHeader(\ResponseHeader $value=null)
    {
        return $this->set(self::RESPONSE_HEADER, $value);
    }

    /**
     * Returns value of 'response_header' property
     *
     * @return \ResponseHeader
     */
    public function getResponseHeader()
    {
        return $this->get(self::RESPONSE_HEADER);
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