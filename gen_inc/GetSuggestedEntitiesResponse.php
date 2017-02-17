<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * GetSuggestedEntitiesResponse message
 */
class GetSuggestedEntitiesResponse extends \ProtobufMessage
{
    /* Field index constants */
    const RESPONSE_HEADER = 1;
    const ENTITY = 2;
    const FAVORITES = 4;
    const CONTACTS_YOU_HANGOUT_WITH = 5;
    const OTHER_CONTACTS_ON_HANGOUTS = 6;
    const OTHER_CONTACTS = 7;
    const DISMISSED_CONTACTS = 8;
    const PINNED_FAVORITES = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RESPONSE_HEADER => array(
            'name' => 'response_header',
            'required' => false,
            'type' => '\ResponseHeader'
        ),
        self::ENTITY => array(
            'name' => 'entity',
            'repeated' => true,
            'type' => '\Entity'
        ),
        self::FAVORITES => array(
            'name' => 'favorites',
            'required' => false,
            'type' => '\SuggestedContactGroup'
        ),
        self::CONTACTS_YOU_HANGOUT_WITH => array(
            'name' => 'contacts_you_hangout_with',
            'required' => false,
            'type' => '\SuggestedContactGroup'
        ),
        self::OTHER_CONTACTS_ON_HANGOUTS => array(
            'name' => 'other_contacts_on_hangouts',
            'required' => false,
            'type' => '\SuggestedContactGroup'
        ),
        self::OTHER_CONTACTS => array(
            'name' => 'other_contacts',
            'required' => false,
            'type' => '\SuggestedContactGroup'
        ),
        self::DISMISSED_CONTACTS => array(
            'name' => 'dismissed_contacts',
            'required' => false,
            'type' => '\SuggestedContactGroup'
        ),
        self::PINNED_FAVORITES => array(
            'name' => 'pinned_favorites',
            'required' => false,
            'type' => '\SuggestedContactGroup'
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
        $this->values[self::ENTITY] = array();
        $this->values[self::FAVORITES] = null;
        $this->values[self::CONTACTS_YOU_HANGOUT_WITH] = null;
        $this->values[self::OTHER_CONTACTS_ON_HANGOUTS] = null;
        $this->values[self::OTHER_CONTACTS] = null;
        $this->values[self::DISMISSED_CONTACTS] = null;
        $this->values[self::PINNED_FAVORITES] = null;
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
     * Appends value to 'entity' list
     *
     * @param \Entity $value Value to append
     *
     * @return null
     */
    public function appendEntity(\Entity $value)
    {
        return $this->append(self::ENTITY, $value);
    }

    /**
     * Clears 'entity' list
     *
     * @return null
     */
    public function clearEntity()
    {
        return $this->clear(self::ENTITY);
    }

    /**
     * Returns 'entity' list
     *
     * @return \Entity[]
     */
    public function getEntity()
    {
        return $this->get(self::ENTITY);
    }

    /**
     * Returns 'entity' iterator
     *
     * @return \ArrayIterator
     */
    public function getEntityIterator()
    {
        return new \ArrayIterator($this->get(self::ENTITY));
    }

    /**
     * Returns element from 'entity' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Entity
     */
    public function getEntityAt($offset)
    {
        return $this->get(self::ENTITY, $offset);
    }

    /**
     * Returns count of 'entity' list
     *
     * @return int
     */
    public function getEntityCount()
    {
        return $this->count(self::ENTITY);
    }

    /**
     * Sets value of 'favorites' property
     *
     * @param \SuggestedContactGroup $value Property value
     *
     * @return null
     */
    public function setFavorites(\SuggestedContactGroup $value=null)
    {
        return $this->set(self::FAVORITES, $value);
    }

    /**
     * Returns value of 'favorites' property
     *
     * @return \SuggestedContactGroup
     */
    public function getFavorites()
    {
        return $this->get(self::FAVORITES);
    }

    /**
     * Sets value of 'contacts_you_hangout_with' property
     *
     * @param \SuggestedContactGroup $value Property value
     *
     * @return null
     */
    public function setContactsYouHangoutWith(\SuggestedContactGroup $value=null)
    {
        return $this->set(self::CONTACTS_YOU_HANGOUT_WITH, $value);
    }

    /**
     * Returns value of 'contacts_you_hangout_with' property
     *
     * @return \SuggestedContactGroup
     */
    public function getContactsYouHangoutWith()
    {
        return $this->get(self::CONTACTS_YOU_HANGOUT_WITH);
    }

    /**
     * Sets value of 'other_contacts_on_hangouts' property
     *
     * @param \SuggestedContactGroup $value Property value
     *
     * @return null
     */
    public function setOtherContactsOnHangouts(\SuggestedContactGroup $value=null)
    {
        return $this->set(self::OTHER_CONTACTS_ON_HANGOUTS, $value);
    }

    /**
     * Returns value of 'other_contacts_on_hangouts' property
     *
     * @return \SuggestedContactGroup
     */
    public function getOtherContactsOnHangouts()
    {
        return $this->get(self::OTHER_CONTACTS_ON_HANGOUTS);
    }

    /**
     * Sets value of 'other_contacts' property
     *
     * @param \SuggestedContactGroup $value Property value
     *
     * @return null
     */
    public function setOtherContacts(\SuggestedContactGroup $value=null)
    {
        return $this->set(self::OTHER_CONTACTS, $value);
    }

    /**
     * Returns value of 'other_contacts' property
     *
     * @return \SuggestedContactGroup
     */
    public function getOtherContacts()
    {
        return $this->get(self::OTHER_CONTACTS);
    }

    /**
     * Sets value of 'dismissed_contacts' property
     *
     * @param \SuggestedContactGroup $value Property value
     *
     * @return null
     */
    public function setDismissedContacts(\SuggestedContactGroup $value=null)
    {
        return $this->set(self::DISMISSED_CONTACTS, $value);
    }

    /**
     * Returns value of 'dismissed_contacts' property
     *
     * @return \SuggestedContactGroup
     */
    public function getDismissedContacts()
    {
        return $this->get(self::DISMISSED_CONTACTS);
    }

    /**
     * Sets value of 'pinned_favorites' property
     *
     * @param \SuggestedContactGroup $value Property value
     *
     * @return null
     */
    public function setPinnedFavorites(\SuggestedContactGroup $value=null)
    {
        return $this->set(self::PINNED_FAVORITES, $value);
    }

    /**
     * Returns value of 'pinned_favorites' property
     *
     * @return \SuggestedContactGroup
     */
    public function getPinnedFavorites()
    {
        return $this->get(self::PINNED_FAVORITES);
    }
}
}