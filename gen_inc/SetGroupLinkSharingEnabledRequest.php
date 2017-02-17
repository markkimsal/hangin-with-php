<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * SetGroupLinkSharingEnabledRequest message
 */
class SetGroupLinkSharingEnabledRequest extends \ProtobufMessage
{
    /* Field index constants */
    const REQUEST_HEADER = 1;
    const EVENT_REQUEST_HEADER = 2;
    const GROUP_LINK_SHARING_STATUS = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUEST_HEADER => array(
            'name' => 'request_header',
            'required' => false,
            'type' => '\RequestHeader'
        ),
        self::EVENT_REQUEST_HEADER => array(
            'name' => 'event_request_header',
            'required' => false,
            'type' => '\EventRequestHeader'
        ),
        self::GROUP_LINK_SHARING_STATUS => array(
            'name' => 'group_link_sharing_status',
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
        $this->values[self::REQUEST_HEADER] = null;
        $this->values[self::EVENT_REQUEST_HEADER] = null;
        $this->values[self::GROUP_LINK_SHARING_STATUS] = null;
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

    /**
     * Sets value of 'group_link_sharing_status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGroupLinkSharingStatus($value)
    {
        return $this->set(self::GROUP_LINK_SHARING_STATUS, $value);
    }

    /**
     * Returns value of 'group_link_sharing_status' property
     *
     * @return integer
     */
    public function getGroupLinkSharingStatus()
    {
        $value = $this->get(self::GROUP_LINK_SHARING_STATUS);
        return $value === null ? (integer)$value : $value;
    }
}
}