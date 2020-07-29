<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getWplatyCKP StructType.
 */
class GetWplatyCKP extends AbstractStructBase
{
    /**
     * The numerNadania
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - choice: numerNadania | startDate | stopDate
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxLength: 20
     * - maxOccurs: 1
     * - minLength: 13
     * - minOccurs: 1.
     *
     * @var string
     */
    public $numerNadania;
    /**
     * The startDate
     * Meta information extracted from the WSDL
     * - choice: numerNadania | startDate | stopDate
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var string
     */
    public $startDate;
    /**
     * The stopDate
     * Meta information extracted from the WSDL
     * - choice: numerNadania | startDate | stopDate
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var string
     */
    public $stopDate;

    /**
     * Constructor method for getWplatyCKP.
     *
     * @uses GetWplatyCKP::setNumerNadania()
     * @uses GetWplatyCKP::setStartDate()
     * @uses GetWplatyCKP::setStopDate()
     *
     * @param string $numerNadania
     * @param string $startDate
     * @param string $stopDate
     */
    public function __construct($numerNadania = null, $startDate = null, $stopDate = null)
    {
        $this
            ->setNumerNadania($numerNadania)
            ->setStartDate($startDate)
            ->setStopDate($stopDate);
    }

    /**
     * Get numerNadania value.
     *
     * @return string
     */
    public function getNumerNadania()
    {
        return isset($this->numerNadania) ? $this->numerNadania : null;
    }

    /**
     * This method is responsible for validating the value passed to the setNumerNadania method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNumerNadania method
     * This has to validate that the property which is being set is the only one among the given choices.
     *
     * @param mixed $value
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateNumerNadaniaForChoiceConstraintsFromSetNumerNadania($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'startDate',
            'stopDate',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property numerNadania can\'t be set as the property %s is already set. Only one property must be set among these properties: numerNadania, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }

        return $message;
    }

    /**
     * Set numerNadania value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object.
     *
     * @throws \InvalidArgumentException
     *
     * @param string $numerNadania
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetWplatyCKP
     */
    public function setNumerNadania($numerNadania = null)
    {
        // validation for constraint: string
        if (!is_null($numerNadania) && !is_string($numerNadania)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerNadania, true), gettype($numerNadania)), __LINE__);
        }
        // validation for constraint: choice(numerNadania, startDate, stopDate)
        if ('' !== ($numerNadaniaChoiceErrorMessage = self::validateNumerNadaniaForChoiceConstraintsFromSetNumerNadania($numerNadania))) {
            throw new \InvalidArgumentException($numerNadaniaChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($numerNadania) && mb_strlen($numerNadania) > 20) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen($numerNadania)), __LINE__);
        }
        // validation for constraint: minLength(13)
        if (!is_null($numerNadania) && mb_strlen($numerNadania) < 13) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 13', mb_strlen($numerNadania)), __LINE__);
        }
        if (is_null($numerNadania) || (is_array($numerNadania) && empty($numerNadania))) {
            unset($this->numerNadania);
        } else {
            $this->numerNadania = $numerNadania;
        }

        return $this;
    }

    /**
     * Get startDate value.
     *
     * @return string
     */
    public function getStartDate()
    {
        return isset($this->startDate) ? $this->startDate : null;
    }

    /**
     * This method is responsible for validating the value passed to the setStartDate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStartDate method
     * This has to validate that the property which is being set is the only one among the given choices.
     *
     * @param mixed $value
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateStartDateForChoiceConstraintsFromSetStartDate($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'numerNadania',
            'stopDate',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property startDate can\'t be set as the property %s is already set. Only one property must be set among these properties: startDate, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }

        return $message;
    }

    /**
     * Set startDate value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object.
     *
     * @throws \InvalidArgumentException
     *
     * @param string $startDate
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetWplatyCKP
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        // validation for constraint: choice(numerNadania, startDate, stopDate)
        if ('' !== ($startDateChoiceErrorMessage = self::validateStartDateForChoiceConstraintsFromSetStartDate($startDate))) {
            throw new \InvalidArgumentException($startDateChoiceErrorMessage, __LINE__);
        }
        if (is_null($startDate) || (is_array($startDate) && empty($startDate))) {
            unset($this->startDate);
        } else {
            $this->startDate = $startDate;
        }

        return $this;
    }

    /**
     * Get stopDate value.
     *
     * @return string|null
     */
    public function getStopDate()
    {
        return isset($this->stopDate) ? $this->stopDate : null;
    }

    /**
     * This method is responsible for validating the value passed to the setStopDate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStopDate method
     * This has to validate that the property which is being set is the only one among the given choices.
     *
     * @param mixed $value
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateStopDateForChoiceConstraintsFromSetStopDate($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'numerNadania',
            'startDate',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property stopDate can\'t be set as the property %s is already set. Only one property must be set among these properties: stopDate, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }

        return $message;
    }

    /**
     * Set stopDate value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object.
     *
     * @throws \InvalidArgumentException
     *
     * @param string $stopDate
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetWplatyCKP
     */
    public function setStopDate($stopDate = null)
    {
        // validation for constraint: string
        if (!is_null($stopDate) && !is_string($stopDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stopDate, true), gettype($stopDate)), __LINE__);
        }
        // validation for constraint: choice(numerNadania, startDate, stopDate)
        if ('' !== ($stopDateChoiceErrorMessage = self::validateStopDateForChoiceConstraintsFromSetStopDate($stopDate))) {
            throw new \InvalidArgumentException($stopDateChoiceErrorMessage, __LINE__);
        }
        if (is_null($stopDate) || (is_array($stopDate) && empty($stopDate))) {
            unset($this->stopDate);
        } else {
            $this->stopDate = $stopDate;
        }

        return $this;
    }
}
