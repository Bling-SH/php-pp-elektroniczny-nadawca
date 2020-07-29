<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pobranieType StructType.
 */
class PobranieType extends AbstractStructBase
{
    /**
     * The sposobPobrania.
     *
     * @var string
     */
    public $sposobPobrania;
    /**
     * The kwotaPobrania
     * Meta information extracted from the WSDL
     * - documentation: kwota jaką należy pobrać podana w groszach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 0.
     *
     * @var int
     */
    public $kwotaPobrania;
    /**
     * The nrb
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 26
     * - minLength: 0.
     *
     * @var string
     */
    public $nrb;
    /**
     * The tytulem
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 54
     * - minLength: 0.
     *
     * @var string
     */
    public $tytulem;
    /**
     * The sprawdzenieZawartosciPrzesylkiPrzezOdbiorce.
     *
     * @var bool
     */
    public $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;

    /**
     * Constructor method for pobranieType.
     *
     * @uses PobranieType::setSposobPobrania()
     * @uses PobranieType::setKwotaPobrania()
     * @uses PobranieType::setNrb()
     * @uses PobranieType::setTytulem()
     * @uses PobranieType::setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce()
     *
     * @param string $sposobPobrania
     * @param int    $kwotaPobrania
     * @param string $nrb
     * @param string $tytulem
     * @param bool   $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     */
    public function __construct($sposobPobrania = null, $kwotaPobrania = null, $nrb = null, $tytulem = null, $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null)
    {
        $this
            ->setSposobPobrania($sposobPobrania)
            ->setKwotaPobrania($kwotaPobrania)
            ->setNrb($nrb)
            ->setTytulem($tytulem)
            ->setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce);
    }

    /**
     * Get sposobPobrania value.
     *
     * @return string|null
     */
    public function getSposobPobrania()
    {
        return $this->sposobPobrania;
    }

    /**
     * Set sposobPobrania value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\SposobPobraniaType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\SposobPobraniaType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $sposobPobrania
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType
     */
    public function setSposobPobrania($sposobPobrania = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\SposobPobraniaType::valueIsValid($sposobPobrania)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\SposobPobraniaType', is_array($sposobPobrania) ? implode(', ', $sposobPobrania) : var_export($sposobPobrania, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\SposobPobraniaType::getValidValues())), __LINE__);
        }
        $this->sposobPobrania = $sposobPobrania;

        return $this;
    }

    /**
     * Get kwotaPobrania value.
     *
     * @return int|null
     */
    public function getKwotaPobrania()
    {
        return $this->kwotaPobrania;
    }

    /**
     * Set kwotaPobrania value.
     *
     * @param int $kwotaPobrania
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType
     */
    public function setKwotaPobrania($kwotaPobrania = null)
    {
        // validation for constraint: int
        if (!is_null($kwotaPobrania) && !(is_int($kwotaPobrania) || ctype_digit($kwotaPobrania))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($kwotaPobrania, true), gettype($kwotaPobrania)), __LINE__);
        }
        // validation for constraint: maxInclusive(9999999)
        if (!is_null($kwotaPobrania) && $kwotaPobrania > 9999999) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9999999', var_export($kwotaPobrania, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($kwotaPobrania) && $kwotaPobrania < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($kwotaPobrania, true)), __LINE__);
        }
        $this->kwotaPobrania = $kwotaPobrania;

        return $this;
    }

    /**
     * Get nrb value.
     *
     * @return string|null
     */
    public function getNrb()
    {
        return $this->nrb;
    }

    /**
     * Set nrb value.
     *
     * @param string $nrb
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType
     */
    public function setNrb($nrb = null)
    {
        // validation for constraint: string
        if (!is_null($nrb) && !is_string($nrb)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nrb, true), gettype($nrb)), __LINE__);
        }
        // validation for constraint: maxLength(26)
        if (!is_null($nrb) && mb_strlen($nrb) > 26) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 26', mb_strlen($nrb)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($nrb) && mb_strlen($nrb) < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen($nrb)), __LINE__);
        }
        $this->nrb = $nrb;

        return $this;
    }

    /**
     * Get tytulem value.
     *
     * @return string|null
     */
    public function getTytulem()
    {
        return $this->tytulem;
    }

    /**
     * Set tytulem value.
     *
     * @param string $tytulem
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType
     */
    public function setTytulem($tytulem = null)
    {
        // validation for constraint: string
        if (!is_null($tytulem) && !is_string($tytulem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tytulem, true), gettype($tytulem)), __LINE__);
        }
        // validation for constraint: maxLength(54)
        if (!is_null($tytulem) && mb_strlen($tytulem) > 54) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 54', mb_strlen($tytulem)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($tytulem) && mb_strlen($tytulem) < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen($tytulem)), __LINE__);
        }
        $this->tytulem = $tytulem;

        return $this;
    }

    /**
     * Get sprawdzenieZawartosciPrzesylkiPrzezOdbiorce value.
     *
     * @return bool|null
     */
    public function getSprawdzenieZawartosciPrzesylkiPrzezOdbiorce()
    {
        return $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
    }

    /**
     * Set sprawdzenieZawartosciPrzesylkiPrzezOdbiorce value.
     *
     * @param bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType
     */
    public function setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null)
    {
        // validation for constraint: boolean
        if (!is_null($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce) && !is_bool($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce, true), gettype($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)), __LINE__);
        }
        $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;

        return $this;
    }
}
