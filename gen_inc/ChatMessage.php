<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * ChatMessage message
 */
class ChatMessage extends \ProtobufMessage
{
    /* Field index constants */
    const ANNOTATION = 2;
    const MESSAGE_CONTENT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
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
        $this->values[self::ANNOTATION] = array();
        $this->values[self::MESSAGE_CONTENT] = null;
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
}
}