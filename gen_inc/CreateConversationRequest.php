<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * CreateConversationRequest message
 */
class CreateConversationRequest extends \ProtobufMessage
{
    /* Field index constants */
    const REQUEST_HEADER = 1;
    const TYPE = 2;
    const CLIENT_GENERATED_ID = 3;
    const NAME = 4;
    const INVITEE_ID = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUEST_HEADER => array(
            'name' => 'request_header',
            'required' => false,
            'type' => '\RequestHeader'
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CLIENT_GENERATED_ID => array(
            'name' => 'client_generated_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::INVITEE_ID => array(
            'name' => 'invitee_id',
            'repeated' => true,
            'type' => '\InviteeID'
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
        $this->values[self::REQUEST_HEADER] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::CLIENT_GENERATED_ID] = null;
        $this->values[self::NAME] = null;
        $this->values[self::INVITEE_ID] = array();
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
     * Sets value of 'request_header' property
     *
     * @param \RequestHeader $value Property value
     *
     * @return null
     */
    public function setRequestHeader(\RequestHeader $value=null)
    {
        return $this->set(self::REQUEST_HEADER, $value);
    }

    /**
     * Returns value of 'request_header' property
     *
     * @return \RequestHeader
     */
    public function getRequestHeader()
    {
        return $this->get(self::REQUEST_HEADER);
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
     * Sets value of 'client_generated_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setClientGeneratedId($value)
    {
        return $this->set(self::CLIENT_GENERATED_ID, $value);
    }

    /**
     * Returns value of 'client_generated_id' property
     *
     * @return integer
     */
    public function getClientGeneratedId()
    {
        $value = $this->get(self::CLIENT_GENERATED_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        $value = $this->get(self::NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'invitee_id' list
     *
     * @param \InviteeID $value Value to append
     *
     * @return null
     */
    public function appendInviteeId(\InviteeID $value)
    {
        return $this->append(self::INVITEE_ID, $value);
    }

    /**
     * Clears 'invitee_id' list
     *
     * @return null
     */
    public function clearInviteeId()
    {
        return $this->clear(self::INVITEE_ID);
    }

    /**
     * Returns 'invitee_id' list
     *
     * @return \InviteeID[]
     */
    public function getInviteeId()
    {
        return $this->get(self::INVITEE_ID);
    }

    /**
     * Returns 'invitee_id' iterator
     *
     * @return \ArrayIterator
     */
    public function getInviteeIdIterator()
    {
        return new \ArrayIterator($this->get(self::INVITEE_ID));
    }

    /**
     * Returns element from 'invitee_id' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \InviteeID
     */
    public function getInviteeIdAt($offset)
    {
        return $this->get(self::INVITEE_ID, $offset);
    }

    /**
     * Returns count of 'invitee_id' list
     *
     * @return int
     */
    public function getInviteeIdCount()
    {
        return $this->count(self::INVITEE_ID);
    }
}
}