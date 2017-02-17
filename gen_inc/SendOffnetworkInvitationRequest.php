<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * SendOffnetworkInvitationRequest message
 */
class SendOffnetworkInvitationRequest extends \ProtobufMessage
{
    /* Field index constants */
    const REQUEST_HEADER = 1;
    const INVITEE_ADDRESS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUEST_HEADER => array(
            'name' => 'request_header',
            'required' => false,
            'type' => '\RequestHeader'
        ),
        self::INVITEE_ADDRESS => array(
            'name' => 'invitee_address',
            'required' => false,
            'type' => '\OffnetworkAddress'
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
        $this->values[self::INVITEE_ADDRESS] = null;
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
     * Sets value of 'invitee_address' property
     *
     * @param \OffnetworkAddress $value Property value
     *
     * @return null
     */
    public function setInviteeAddress(\OffnetworkAddress $value=null)
    {
        return $this->set(self::INVITEE_ADDRESS, $value);
    }

    /**
     * Returns value of 'invitee_address' property
     *
     * @return \OffnetworkAddress
     */
    public function getInviteeAddress()
    {
        return $this->get(self::INVITEE_ADDRESS);
    }
}
}