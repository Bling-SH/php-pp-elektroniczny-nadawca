<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for daneSentType StructType.
 */
class DaneSentType extends AbstractStructBase
{
    /**
     * The numer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var string
     */
    public $numer;
    /**
     * The kluczPrzewoznika
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var string
     */
    public $kluczPrzewoznika;
    /**
     * The kodCN
     * Meta information extracted from the WSDL
     * - choice: kodCN | kodPKWiU
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var string
     */
    public $kodCN;
    /**
     * The kodPKWiU
     * Meta information extracted from the WSDL
     * - choice: kodCN | kodPKWiU
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var string
     */
    public $kodPKWiU;
    /**
     * The masa
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var float
     */
    public $masa;
    /**
     * The proceduraAwaryjna
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var bool
     */
    public $proceduraAwaryjna;

    /**
     * Constructor method for daneSentType.
     *
     * @uses DaneSentType::setNumer()
     * @uses DaneSentType::setKluczPrzewoznika()
     * @uses DaneSentType::setKodCN()
     * @uses DaneSentType::setKodPKWiU()
     * @uses DaneSentType::setMasa()
     * @uses DaneSentType::setProceduraAwaryjna()
     *
     * @param string $numer
     * @param string $kluczPrzewoznika
     * @param string $kodCN
     * @param string $kodPKWiU
     * @param float  $masa
     * @param bool   $proceduraAwaryjna
     */
    public function __construct($numer = null, $kluczPrzewoznika = null, $kodCN = null, $kodPKWiU = null, $masa = null, $proceduraAwaryjna = null)
    {
        $this
            ->setNumer($numer)
            ->setKluczPrzewoznika($kluczPrzewoznika)
            ->setKodCN($kodCN)
            ->setKodPKWiU($kodPKWiU)
            ->setMasa($masa)
            ->setProceduraAwaryjna($proceduraAwaryjna);
    }

    /**
     * Get numer value.
     *
     * @return string
     */
    public function getNumer()
    {
        return $this->numer;
    }

    /**
     * Set numer value.
     *
     * @param string $numer
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DaneSentType
     */
    public function setNumer($numer = null)
    {
        // validation for constraint: string
        if (!is_null($numer) && !is_string($numer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numer, true), gettype($numer)), __LINE__);
        }
        $this->numer = $numer;

        return $this;
    }

    /**
     * Get kluczPrzewoznika value.
     *
     * @return string
     */
    public function getKluczPrzewoznika()
    {
        return $this->kluczPrzewoznika;
    }

    /**
     * Set kluczPrzewoznika value.
     *
     * @param string $kluczPrzewoznika
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DaneSentType
     */
    public function setKluczPrzewoznika($kluczPrzewoznika = null)
    {
        // validation for constraint: string
        if (!is_null($kluczPrzewoznika) && !is_string($kluczPrzewoznika)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kluczPrzewoznika, true), gettype($kluczPrzewoznika)), __LINE__);
        }
        $this->kluczPrzewoznika = $kluczPrzewoznika;

        return $this;
    }

    /**
     * Get kodCN value.
     *
     * @return string|null
     */
    public function getKodCN()
    {
        return isset($this->kodCN) ? $this->kodCN : null;
    }

    /**
     * This method is responsible for validating the value passed to the setKodCN method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKodCN method
     * This has to validate that the property which is being set is the only one among the given choices.
     *
     * @param mixed $value
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateKodCNForChoiceConstraintsFromSetKodCN($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'kodPKWiU',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property kodCN can\'t be set as the property %s is already set. Only one property must be set among these properties: kodCN, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }

        return $message;
    }

    /**
     * Set kodCN value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object.
     *
     * @throws \InvalidArgumentException
     *
     * @param string $kodCN
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DaneSentType
     */
    public function setKodCN($kodCN = null)
    {
        // validation for constraint: string
        if (!is_null($kodCN) && !is_string($kodCN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kodCN, true), gettype($kodCN)), __LINE__);
        }
        // validation for constraint: choice(kodCN, kodPKWiU)
        if ('' !== ($kodCNChoiceErrorMessage = self::validateKodCNForChoiceConstraintsFromSetKodCN($kodCN))) {
            throw new \InvalidArgumentException($kodCNChoiceErrorMessage, __LINE__);
        }
        if (is_null($kodCN) || (is_array($kodCN) && empty($kodCN))) {
            unset($this->kodCN);
        } else {
            $this->kodCN = $kodCN;
        }

        return $this;
    }

    /**
     * Get kodPKWiU value.
     *
     * @return string|null
     */
    public function getKodPKWiU()
    {
        return isset($this->kodPKWiU) ? $this->kodPKWiU : null;
    }

    /**
     * This method is responsible for validating the value passed to the setKodPKWiU method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKodPKWiU method
     * This has to validate that the property which is being set is the only one among the given choices.
     *
     * @param mixed $value
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateKodPKWiUForChoiceConstraintsFromSetKodPKWiU($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'kodCN',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property kodPKWiU can\'t be set as the property %s is already set. Only one property must be set among these properties: kodPKWiU, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }

        return $message;
    }

    /**
     * Set kodPKWiU value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object.
     *
     * @throws \InvalidArgumentException
     *
     * @param string $kodPKWiU
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DaneSentType
     */
    public function setKodPKWiU($kodPKWiU = null)
    {
        // validation for constraint: string
        if (!is_null($kodPKWiU) && !is_string($kodPKWiU)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kodPKWiU, true), gettype($kodPKWiU)), __LINE__);
        }
        // validation for constraint: choice(kodCN, kodPKWiU)
        if ('' !== ($kodPKWiUChoiceErrorMessage = self::validateKodPKWiUForChoiceConstraintsFromSetKodPKWiU($kodPKWiU))) {
            throw new \InvalidArgumentException($kodPKWiUChoiceErrorMessage, __LINE__);
        }
        if (is_null($kodPKWiU) || (is_array($kodPKWiU) && empty($kodPKWiU))) {
            unset($this->kodPKWiU);
        } else {
            $this->kodPKWiU = $kodPKWiU;
        }

        return $this;
    }

    /**
     * Get masa value.
     *
     * @return float|null
     */
    public function getMasa()
    {
        return $this->masa;
    }

    /**
     * Set masa value.
     *
     * @param float $masa
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DaneSentType
     */
    public function setMasa($masa = null)
    {
        // validation for constraint: float
        if (!is_null($masa) && !(is_float($masa) || is_numeric($masa))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($masa, true), gettype($masa)), __LINE__);
        }
        $this->masa = $masa;

        return $this;
    }

    /**
     * Get proceduraAwaryjna value.
     *
     * @return bool|null
     */
    public function getProceduraAwaryjna()
    {
        return $this->proceduraAwaryjna;
    }

    /**
     * Set proceduraAwaryjna value.
     *
     * @param bool $proceduraAwaryjna
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DaneSentType
     */
    public function setProceduraAwaryjna($proceduraAwaryjna = null)
    {
        // validation for constraint: boolean
        if (!is_null($proceduraAwaryjna) && !is_bool($proceduraAwaryjna)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($proceduraAwaryjna, true), gettype($proceduraAwaryjna)), __LINE__);
        }
        $this->proceduraAwaryjna = $proceduraAwaryjna;

        return $this;
    }
}
