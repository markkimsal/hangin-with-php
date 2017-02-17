<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * SendChatMessageRequest message
 */
class SendChatMessageRequest extends \ProtobufMessage
{
    /* Field index constants */
    const REQUEST_HEADER = 1;
    const ANNOTATION = 5;
    const MESSAGE_CONTENT = 6;
    const EXISTING_MEDIA = 7;
    const EVENT_REQUEST_HEADER = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUEST_HEADER => array(
            'name' => 'request_header',
            'required' => false,
            'type' => '\RequestHeader'
        ),
        self::ANNOTATION => array(
            'name' => 'annotation',
            'repeated' => true,
            'type' => '\EventAnnotation'
        ),
        self::MESSAGE_CONTENT => array(
            'name' => 'message_content',
            'required' => false,
            'type' => '\MessageContent'
        ),
        self::EXISTING_MEDIA => array(
            'name' => 'existing_media',
            'required' => false,
            'type' => '\ExistingMedia'
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
        $this->values[self::ANNOTATION] = array();
        $this->values[self::MESSAGE_CONTENT] = null;
        $this->values[self::EXISTING_MEDIA] = null;
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
     * Appends value to 'annotation' list
     *
     * @param \EventAnnotation $value Value to append
     *
     * @return null
     */
    public function appendAnnotation(\EventAnnotation $value)
    {
        return $this->append(self::ANNOTATION, $value);
    }

    /**
     * Clears 'annotation' list
     *
     * @return null
     */
    public function clearAnnotation()
    {
        return $this->clear(self::ANNOTATION);
    }

    /**
     * Returns 'annotation' list
     *
     * @return \EventAnnotation[]
     */
    public function getAnnotation()
    {
        return $this->get(self::ANNOTATION);
    }

    /**
     * Returns 'annotation' iterator
     *
     * @return \ArrayIterator
     */
    public function getAnnotationIterator()
    {
        return new \ArrayIterator($this->get(self::ANNOTATION));
    }

    /**
     * Returns element from 'annotation' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \EventAnnotation
     */
    public function getAnnotationAt($offset)
    {
        return $this->get(self::ANNOTATION, $offset);
    }

    /**
     * Returns count of 'annotation' list
     *
     * @return int
     */
    public function getAnnotationCount()
    {
        return $this->count(self::ANNOTATION);
    }

    /**
     * Sets value of 'message_content' property
     *
     * @param \MessageContent $value Property value
     *
     * @return null
     */
    public function setMessageContent(\MessageContent $value=null)
    {
        return $this->set(self::MESSAGE_CONTENT, $value);
    }

    /**
     * Returns value of 'message_content' property
     *
     * @return \MessageContent
     */
    public function getMessageContent()
    {
        return $this->get(self::MESSAGE_CONTENT);
    }

    /**
     * Sets value of 'existing_media' property
     *
     * @param \ExistingMedia $value Property value
     *
     * @return null
     */
    public function setExistingMedia(\ExistingMedia $value=null)
    {
        return $this->set(self::EXISTING_MEDIA, $value);
    }

    /**
     * Returns value of 'existing_media' property
     *
     * @return \ExistingMedia
     */
    public function getExistingMedia()
    {
        return $this->get(self::EXISTING_MEDIA);
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