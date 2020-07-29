<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EZDOPrzesylkaType StructType.
 */
class EZDOPrzesylkaType extends AbstractStructBase
{
    /**
     * The numerNadania
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minLength: 13.
     *
     * @var string
     */
    public $numerNadania;
    /**
     * The rodzaj.
     *
     * @var string
     */
    public $rodzaj;
    /**
     * The kategoria.
     *
     * @var string
     */
    public $kategoria;
    /**
     * The masa
     * Meta information extracted from the WSDL
     * - documentation: masa przesyłki podana w gramach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 1.
     *
     * @var int
     */
    public $masa;
    /**
     * The wartosc
     * Meta information extracted from the WSDL
     * - documentation: zadeklarowana wartość przesyłki w groszach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 0.
     *
     * @var int
     */
    public $wartosc;
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
     * The numerWewnetrznyPrzesylki.
     *
     * @var string
     */
    public $numerWewnetrznyPrzesylki;
    /**
     * The zwrot.
     *
     * @var string
     */
    public $zwrot;

    /**
     * Constructor method for EZDOPrzesylkaType.
     *
     * @uses EZDOPrzesylkaType::setNumerNadania()
     * @uses EZDOPrzesylkaType::setRodzaj()
     * @uses EZDOPrzesylkaType::setKategoria()
     * @uses EZDOPrzesylkaType::setMasa()
     * @uses EZDOPrzesylkaType::setWartosc()
     * @uses EZDOPrzesylkaType::setKwotaPobrania()
     * @uses EZDOPrzesylkaType::setNumerWewnetrznyPrzesylki()
     * @uses EZDOPrzesylkaType::setZwrot()
     *
     * @param string $numerNadania
     * @param string $rodzaj
     * @param string $kategoria
     * @param int    $masa
     * @param int    $wartosc
     * @param int    $kwotaPobrania
     * @param string $numerWewnetrznyPrzesylki
     * @param string $zwrot
     */
    public function __construct($numerNadania = null, $rodzaj = null, $kategoria = null, $masa = null, $wartosc = null, $kwotaPobrania = null, $numerWewnetrznyPrzesylki = null, $zwrot = null)
    {
        $this
            ->setNumerNadania($numerNadania)
            ->setRodzaj($rodzaj)
            ->setKategoria($kategoria)
            ->setMasa($masa)
            ->setWartosc($wartosc)
            ->setKwotaPobrania($kwotaPobrania)
            ->setNumerWewnetrznyPrzesylki($numerWewnetrznyPrzesylki)
            ->setZwrot($zwrot);
    }

    /**
     * Get numerNadania value.
     *
     * @return string|null
     */
    public function getNumerNadania()
    {
        return $this->numerNadania;
    }

    /**
     * Set numerNadania value.
     *
     * @param string $numerNadania
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EZDOPrzesylkaType
     */
    public function setNumerNadania($numerNadania = null)
    {
        // validation for constraint: string
        if (!is_null($numerNadania) && !is_string($numerNadania)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerNadania, true), gettype($numerNadania)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($numerNadania) && mb_strlen($numerNadania) > 20) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen($numerNadania)), __LINE__);
        }
        // validation for constraint: minLength(13)
        if (!is_null($numerNadania) && mb_strlen($numerNadania) < 13) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 13', mb_strlen($numerNadania)), __LINE__);
        }
        $this->numerNadania = $numerNadania;

        return $this;
    }

    /**
     * Get rodzaj value.
     *
     * @return string|null
     */
    public function getRodzaj()
    {
        return $this->rodzaj;
    }

    /**
     * Set rodzaj value.
     *
     * @param string $rodzaj
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EZDOPrzesylkaType
     */
    public function setRodzaj($rodzaj = null)
    {
        // validation for constraint: string
        if (!is_null($rodzaj) && !is_string($rodzaj)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rodzaj, true), gettype($rodzaj)), __LINE__);
        }
        $this->rodzaj = $rodzaj;

        return $this;
    }

    /**
     * Get kategoria value.
     *
     * @return string|null
     */
    public function getKategoria()
    {
        return $this->kategoria;
    }

    /**
     * Set kategoria value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\KategoriaType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\KategoriaType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $kategoria
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EZDOPrzesylkaType
     */
    public function setKategoria($kategoria = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\KategoriaType::valueIsValid($kategoria)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\KategoriaType', is_array($kategoria) ? implode(', ', $kategoria) : var_export($kategoria, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\KategoriaType::getValidValues())), __LINE__);
        }
        $this->kategoria = $kategoria;

        return $this;
    }

    /**
     * Get masa value.
     *
     * @return int|null
     */
    public function getMasa()
    {
        return $this->masa;
    }

    /**
     * Set masa value.
     *
     * @param int $masa
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EZDOPrzesylkaType
     */
    public function setMasa($masa = null)
    {
        // validation for constraint: int
        if (!is_null($masa) && !(is_int($masa) || ctype_digit($masa))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($masa, true), gettype($masa)), __LINE__);
        }
        // validation for constraint: maxInclusive(9999999)
        if (!is_null($masa) && $masa > 9999999) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9999999', var_export($masa, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($masa) && $masa < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($masa, true)), __LINE__);
        }
        $this->masa = $masa;

        return $this;
    }

    /**
     * Get wartosc value.
     *
     * @return int|null
     */
    public function getWartosc()
    {
        return $this->wartosc;
    }

    /**
     * Set wartosc value.
     *
     * @param int $wartosc
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EZDOPrzesylkaType
     */
    public function setWartosc($wartosc = null)
    {
        // validation for constraint: int
        if (!is_null($wartosc) && !(is_int($wartosc) || ctype_digit($wartosc))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($wartosc, true), gettype($wartosc)), __LINE__);
        }
        // validation for constraint: maxInclusive(9999999)
        if (!is_null($wartosc) && $wartosc > 9999999) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9999999', var_export($wartosc, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($wartosc) && $wartosc < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($wartosc, true)), __LINE__);
        }
        $this->wartosc = $wartosc;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EZDOPrzesylkaType
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
     * Get numerWewnetrznyPrzesylki value.
     *
     * @return string|null
     */
    public function getNumerWewnetrznyPrzesylki()
    {
        return $this->numerWewnetrznyPrzesylki;
    }

    /**
     * Set numerWewnetrznyPrzesylki value.
     *
     * @param string $numerWewnetrznyPrzesylki
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EZDOPrzesylkaType
     */
    public function setNumerWewnetrznyPrzesylki($numerWewnetrznyPrzesylki = null)
    {
        // validation for constraint: string
        if (!is_null($numerWewnetrznyPrzesylki) && !is_string($numerWewnetrznyPrzesylki)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerWewnetrznyPrzesylki, true), gettype($numerWewnetrznyPrzesylki)), __LINE__);
        }
        $this->numerWewnetrznyPrzesylki = $numerWewnetrznyPrzesylki;

        return $this;
    }

    /**
     * Get zwrot value.
     *
     * @return string|null
     */
    public function getZwrot()
    {
        return $this->zwrot;
    }

    /**
     * Set zwrot value.
     *
     * @param string $zwrot
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EZDOPrzesylkaType
     */
    public function setZwrot($zwrot = null)
    {
        // validation for constraint: string
        if (!is_null($zwrot) && !is_string($zwrot)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zwrot, true), gettype($zwrot)), __LINE__);
        }
        $this->zwrot = $zwrot;

        return $this;
    }
}
