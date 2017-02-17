<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * MessageContent message
 */
class MessageContent extends \ProtobufMessage
{
    /* Field index constants */
    const SEGMENT = 1;
    const ATTACHMENT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SEGMENT => array(
            'name' => 'segment',
            'repeated' => true,
            'type' => '\Segment'
        ),
        self::ATTACHMENT => array(
            'name' => 'attachment',
            'repeated' => true,
            'type' => '\Attachment'
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
        $this->values[self::SEGMENT] = array();
        $this->values[self::ATTACHMENT] = array();
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
     * Appends value to 'segment' list
     *
     * @param \Segment $value Value to append
     *
     * @return null
     */
    public function appendSegment(\Segment $value)
    {
        return $this->append(self::SEGMENT, $value);
    }

    /**
     * Clears 'segment' list
     *
     * @return null
     */
    public function clearSegment()
    {
        return $this->clear(self::SEGMENT);
    }

    /**
     * Returns 'segment' list
     *
     * @return \Segment[]
     */
    public function getSegment()
    {
        return $this->get(self::SEGMENT);
    }

    /**
     * Returns 'segment' iterator
     *
     * @return \ArrayIterator
     */
    public function getSegmentIterator()
    {
        return new \ArrayIterator($this->get(self::SEGMENT));
    }

    /**
     * Returns element from 'segment' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Segment
     */
    public function getSegmentAt($offset)
    {
        return $this->get(self::SEGMENT, $offset);
    }

    /**
     * Returns count of 'segment' list
     *
     * @return int
     */
    public function getSegmentCount()
    {
        return $this->count(self::SEGMENT);
    }

    /**
     * Appends value to 'attachment' list
     *
     * @param \Attachment $value Value to append
     *
     * @return null
     */
    public function appendAttachment(\Attachment $value)
    {
        return $this->append(self::ATTACHMENT, $value);
    }

    /**
     * Clears 'attachment' list
     *
     * @return null
     */
    public function clearAttachment()
    {
        return $this->clear(self::ATTACHMENT);
    }

    /**
     * Returns 'attachment' list
     *
     * @return \Attachment[]
     */
    public function getAttachment()
    {
        return $this->get(self::ATTACHMENT);
    }

    /**
     * Returns 'attachment' iterator
     *
     * @return \ArrayIterator
     */
    public function getAttachmentIterator()
    {
        return new \ArrayIterator($this->get(self::ATTACHMENT));
    }

    /**
     * Returns element from 'attachment' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Attachment
     */
    public function getAttachmentAt($offset)
    {
        return $this->get(self::ATTACHMENT, $offset);
    }

    /**
     * Returns count of 'attachment' list
     *
     * @return int
     */
    public function getAttachmentCount()
    {
        return $this->count(self::ATTACHMENT);
    }
}
}