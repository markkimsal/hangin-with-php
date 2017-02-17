<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * Attachment message
 */
class Attachment extends \ProtobufMessage
{
    /* Field index constants */
    const EMBED_ITEM = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::EMBED_ITEM => array(
            'name' => 'embed_item',
            'required' => false,
            'type' => '\EmbedItem'
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
        $this->values[self::EMBED_ITEM] = null;
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
     * Sets value of 'embed_item' property
     *
     * @param \EmbedItem $value Property value
     *
     * @return null
     */
    public function setEmbedItem(\EmbedItem $value=null)
    {
        return $this->set(self::EMBED_ITEM, $value);
    }

    /**
     * Returns value of 'embed_item' property
     *
     * @return \EmbedItem
     */
    public function getEmbedItem()
    {
        return $this->get(self::EMBED_ITEM);
    }
}
}