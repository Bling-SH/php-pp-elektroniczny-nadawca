<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zwrotDokumentowType StructType.
 */
class ZwrotDokumentowType extends AbstractStructBase
{
    /**
     * The rodzajPocztex
     * Meta information extracted from the WSDL
     * - choice: rodzajPocztex | rodzajList
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var string
     */
    public $rodzajPocztex;
    /**
     * The rodzajList
     * Meta information extracted from the WSDL
     * - choice: rodzajPocztex | rodzajList
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\RodzajListType
     */
    public $rodzajList;
    /**
     * The odleglosc.
     *
     * @var int
     */
    public $odleglosc;

    /**
     * Constructor method for zwrotDokumentowType.
     *
     * @uses ZwrotDokumentowType::setRodzajPocztex()
     * @uses ZwrotDokumentowType::setRodzajList()
     * @uses ZwrotDokumentowType::setOdleglosc()
     *
     * @param string                                                             $rodzajPocztex
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\RodzajListType $rodzajList
     * @param int                                                                $odleglosc
     */
    public function __construct($rodzajPocztex = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\RodzajListType $rodzajList = null, $odleglosc = null)
    {
        $this
            ->setRodzajPocztex($rodzajPocztex)
            ->setRodzajList($rodzajList)
            ->setOdleglosc($odleglosc);
    }

    /**
     * Get rodzajPocztex value.
     *
     * @return string|null
     */
    public function getRodzajPocztex()
    {
        return isset($this->rodzajPocztex) ? $this->rodzajPocztex : null;
    }

    /**
     * This method is responsible for validating the value passed to the setRodzajPocztex method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRodzajPocztex method
     * This has to validate that the property which is being set is the only one among the given choices.
     *
     * @param mixed $value
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRodzajPocztexForChoiceConstraintsFromSetRodzajPocztex($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'rodzajList',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property rodzajPocztex can\'t be set as the property %s is already set. Only one property must be set among these properties: rodzajPocztex, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }

        return $message;
    }

    /**
     * Set rodzajPocztex value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object.
     *
     * @throws \InvalidArgumentException
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\TerminRodzajType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\TerminRodzajType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $rodzajPocztex
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotDokumentowType
     */
    public function setRodzajPocztex($rodzajPocztex = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\TerminRodzajType::valueIsValid($rodzajPocztex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\TerminRodzajType', is_array($rodzajPocztex) ? implode(', ', $rodzajPocztex) : var_export($rodzajPocztex, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\TerminRodzajType::getValidValues())), __LINE__);
        }
        // validation for constraint: choice(rodzajPocztex, rodzajList)
        if ('' !== ($rodzajPocztexChoiceErrorMessage = self::validateRodzajPocztexForChoiceConstraintsFromSetRodzajPocztex($rodzajPocztex))) {
            throw new \InvalidArgumentException($rodzajPocztexChoiceErrorMessage, __LINE__);
        }
        if (is_null($rodzajPocztex) || (is_array($rodzajPocztex) && empty($rodzajPocztex))) {
            unset($this->rodzajPocztex);
        } else {
            $this->rodzajPocztex = $rodzajPocztex;
        }

        return $this;
    }

    /**
     * Get rodzajList value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\RodzajListType|null
     */
    public function getRodzajList()
    {
        return isset($this->rodzajList) ? $this->rodzajList : null;
    }

    /**
     * This method is responsible for validating the value passed to the setRodzajList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRodzajList method
     * This has to validate that the property which is being set is the only one among the given choices.
     *
     * @param mixed $value
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRodzajListForChoiceConstraintsFromSetRodzajList($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'rodzajPocztex',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property rodzajList can\'t be set as the property %s is already set. Only one property must be set among these properties: rodzajList, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }

        return $message;
    }

    /**
     * Set rodzajList value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\RodzajListType $rodzajList
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotDokumentowType
     */
    public function setRodzajList(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\RodzajListType $rodzajList = null)
    {
        // validation for constraint: choice(rodzajPocztex, rodzajList)
        if ('' !== ($rodzajListChoiceErrorMessage = self::validateRodzajListForChoiceConstraintsFromSetRodzajList($rodzajList))) {
            throw new \InvalidArgumentException($rodzajListChoiceErrorMessage, __LINE__);
        }
        if (is_null($rodzajList) || (is_array($rodzajList) && empty($rodzajList))) {
            unset($this->rodzajList);
        } else {
            $this->rodzajList = $rodzajList;
        }

        return $this;
    }

    /**
     * Get odleglosc value.
     *
     * @return int|null
     */
    public function getOdleglosc()
    {
        return $this->odleglosc;
    }

    /**
     * Set odleglosc value.
     *
     * @param int $odleglosc
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotDokumentowType
     */
    public function setOdleglosc($odleglosc = null)
    {
        // validation for constraint: int
        if (!is_null($odleglosc) && !(is_int($odleglosc) || ctype_digit($odleglosc))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($odleglosc, true), gettype($odleglosc)), __LINE__);
        }
        $this->odleglosc = $odleglosc;

        return $this;
    }
}
