<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * MoodContent message
 */
class MoodContent extends \ProtobufMessage
{
    /* Field index constants */
    const SEGMENT = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SEGMENT => array(
            'name' => 'segment',
            'repeated' => true,
            'type' => '\Segment'
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
}
}