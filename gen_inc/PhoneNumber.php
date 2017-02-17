<?php
/**
 * Auto generated from hangouts.proto at 2017-02-10 13:29:52
 */

namespace {
/**
 * PhoneNumber message
 */
class PhoneNumber extends \ProtobufMessage
{
    /* Field index constants */
    const E164 = 1;
    const I18N_DATA = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::E164 => array(
            'name' => 'e164',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::I18N_DATA => array(
            'name' => 'i18n_data',
            'required' => false,
            'type' => '\I18nData'
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
        $this->values[self::E164] = null;
        $this->values[self::I18N_DATA] = null;
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
     * Sets value of 'e164' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setE164($value)
    {
        return $this->set(self::E164, $value);
    }

    /**
     * Returns value of 'e164' property
     *
     * @return string
     */
    public function getE164()
    {
        $value = $this->get(self::E164);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'i18n_data' property
     *
     * @param \I18nData $value Property value
     *
     * @return null
     */
    public function setI18nData(\I18nData $value=null)
    {
        return $this->set(self::I18N_DATA, $value);
    }

    /**
     * Returns value of 'i18n_data' property
     *
     * @return \I18nData
     */
    public function getI18nData()
    {
        return $this->get(self::I18N_DATA);
    }
}
}