<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * GetSuggestedEntitiesRequest message
 */
class GetSuggestedEntitiesRequest extends \ProtobufMessage
{
    /* Field index constants */
    const REQUEST_HEADER = 1;
    const MAX_COUNT = 4;
    const FAVORITES = 8;
    const CONTACTS_YOU_HANGOUT_WITH = 9;
    const OTHER_CONTACTS_ON_HANGOUTS = 10;
    const OTHER_CONTACTS = 11;
    const DISMISSED_CONTACTS = 12;
    const PINNED_FAVORITES = 13;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUEST_HEADER => array(
            'name' => 'request_header',
            'required' => false,
            'type' => '\RequestHeader'
        ),
        self::MAX_COUNT => array(
            'name' => 'max_count',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FAVORITES => array(
            'name' => 'favorites',
            'required' => false,
            'type' => '\SuggestedContactGroupHash'
        ),
        self::CONTACTS_YOU_HANGOUT_WITH => array(
            'name' => 'contacts_you_hangout_with',
            'required' => false,
            'type' => '\SuggestedContactGroupHash'
        ),
        self::OTHER_CONTACTS_ON_HANGOUTS => array(
            'name' => 'other_contacts_on_hangouts',
            'required' => false,
            'type' => '\SuggestedContactGroupHash'
        ),
        self::OTHER_CONTACTS => array(
            'name' => 'other_contacts',
            'required' => false,
            'type' => '\SuggestedContactGroupHash'
        ),
        self::DISMISSED_CONTACTS => array(
            'name' => 'dismissed_contacts',
            'required' => false,
            'type' => '\SuggestedContactGroupHash'
        ),
        self::PINNED_FAVORITES => array(
            'name' => 'pinned_favorites',
            'required' => false,
            'type' => '\SuggestedContactGroupHash'
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
        $this->values[self::MAX_COUNT] = null;
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
     * Sets value of 'max_count' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxCount($value)
    {
        return $this->set(self::MAX_COUNT, $value);
    }

    /**
     * Returns value of 'max_count' property
     *
     * @return integer
     */
    public function getMaxCount()
    {
        $value = $this->get(self::MAX_COUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'favorites' property
     *
     * @param \SuggestedContactGroupHash $value Property value
     *
     * @return null
     */
    public function setFavorites(\SuggestedContactGroupHash $value=null)
    {
        return $this->set(self::FAVORITES, $value);
    }

    /**
     * Returns value of 'favorites' property
     *
     * @return \SuggestedContactGroupHash
     */
    public function getFavorites()
    {
        return $this->get(self::FAVORITES);
    }

    /**
     * Sets value of 'contacts_you_hangout_with' property
     *
     * @param \SuggestedContactGroupHash $value Property value
     *
     * @return null
     */
    public function setContactsYouHangoutWith(\SuggestedContactGroupHash $value=null)
    {
        return $this->set(self::CONTACTS_YOU_HANGOUT_WITH, $value);
    }

    /**
     * Returns value of 'contacts_you_hangout_with' property
     *
     * @return \SuggestedContactGroupHash
     */
    public function getContactsYouHangoutWith()
    {
        return $this->get(self::CONTACTS_YOU_HANGOUT_WITH);
    }

    /**
     * Sets value of 'other_contacts_on_hangouts' property
     *
     * @param \SuggestedContactGroupHash $value Property value
     *
     * @return null
     */
    public function setOtherContactsOnHangouts(\SuggestedContactGroupHash $value=null)
    {
        return $this->set(self::OTHER_CONTACTS_ON_HANGOUTS, $value);
    }

    /**
     * Returns value of 'other_contacts_on_hangouts' property
     *
     * @return \SuggestedContactGroupHash
     */
    public function getOtherContactsOnHangouts()
    {
        return $this->get(self::OTHER_CONTACTS_ON_HANGOUTS);
    }

    /**
     * Sets value of 'other_contacts' property
     *
     * @param \SuggestedContactGroupHash $value Property value
     *
     * @return null
     */
    public function setOtherContacts(\SuggestedContactGroupHash $value=null)
    {
        return $this->set(self::OTHER_CONTACTS, $value);
    }

    /**
     * Returns value of 'other_contacts' property
     *
     * @return \SuggestedContactGroupHash
     */
    public function getOtherContacts()
    {
        return $this->get(self::OTHER_CONTACTS);
    }

    /**
     * Sets value of 'dismissed_contacts' property
     *
     * @param \SuggestedContactGroupHash $value Property value
     *
     * @return null
     */
    public function setDismissedContacts(\SuggestedContactGroupHash $value=null)
    {
        return $this->set(self::DISMISSED_CONTACTS, $value);
    }

    /**
     * Returns value of 'dismissed_contacts' property
     *
     * @return \SuggestedContactGroupHash
     */
    public function getDismissedContacts()
    {
        return $this->get(self::DISMISSED_CONTACTS);
    }

    /**
     * Sets value of 'pinned_favorites' property
     *
     * @param \SuggestedContactGroupHash $value Property value
     *
     * @return null
     */
    public function setPinnedFavorites(\SuggestedContactGroupHash $value=null)
    {
        return $this->set(self::PINNED_FAVORITES, $value);
    }

    /**
     * Returns value of 'pinned_favorites' property
     *
     * @return \SuggestedContactGroupHash
     */
    public function getPinnedFavorites()
    {
        return $this->get(self::PINNED_FAVORITES);
    }
}
}