<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * AddUserRequest message
 */
class AddUserRequest extends \ProtobufMessage
{
    /* Field index constants */
    const REQUEST_HEADER = 1;
    const INVITEE_ID = 3;
    const EVENT_REQUEST_HEADER = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUEST_HEADER => array(
            'name' => 'request_header',
            'required' => false,
            'type' => '\RequestHeader'
        ),
        self::INVITEE_ID => array(
            'name' => 'invitee_id',
            'repeated' => true,
            'type' => '\InviteeID'
        ),
        self::EVENT_REQUEST_HEADER => array(
            'name' => 'event_request_header',
            'required' => false,
            'type' => '\EventRequestHeader'
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
        $this->values[self::INVITEE_ID] = array();
        $this->values[self::EVENT_REQUEST_HEADER] = null;
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

    /**
     * Sets value of 'event_request_header' property
     *
     * @param \EventRequestHeader $value Property value
     *
     * @return null
     */
    public function setEventRequestHeader(\EventRequestHeader $value=null)
    {
        return $this->set(self::EVENT_REQUEST_HEADER, $value);
    }

    /**
     * Returns value of 'event_request_header' property
     *
     * @return \EventRequestHeader
     */
    public function getEventRequestHeader()
    {
        return $this->get(self::EVENT_REQUEST_HEADER);
    }
}
}