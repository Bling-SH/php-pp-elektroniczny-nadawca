<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

/**
 * This class stands for przesylkaZadeklarowanaWartoscZagranicznaType StructType.
 */
class PrzesylkaZadeklarowanaWartoscZagranicznaType extends PrzesylkaRejestrowanaType
{
    /**
     * The deklaracjaCelna2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
     */
    public $deklaracjaCelna2;
    /**
     * The posteRestante
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional.
     *
     * @var bool
     */
    public $posteRestante;
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
     * The iloscPotwierdzenOdbioru
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - maxInclusive: 9
     * - minInclusive: 0.
     *
     * @var int
     */
    public $iloscPotwierdzenOdbioru;
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
     * Constructor method for przesylkaZadeklarowanaWartoscZagranicznaType.
     *
     * @uses PrzesylkaZadeklarowanaWartoscZagranicznaType::setDeklaracjaCelna2()
     * @uses PrzesylkaZadeklarowanaWartoscZagranicznaType::setPosteRestante()
     * @uses PrzesylkaZadeklarowanaWartoscZagranicznaType::setMasa()
     * @uses PrzesylkaZadeklarowanaWartoscZagranicznaType::setIloscPotwierdzenOdbioru()
     * @uses PrzesylkaZadeklarowanaWartoscZagranicznaType::setWartosc()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2
     * @param bool                                                                     $posteRestante
     * @param int                                                                      $masa
     * @param int                                                                      $iloscPotwierdzenOdbioru
     * @param int                                                                      $wartosc
     */
    public function __construct(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null, $posteRestante = false, $masa = null, $iloscPotwierdzenOdbioru = null, $wartosc = null)
    {
        $this
            ->setDeklaracjaCelna2($deklaracjaCelna2)
            ->setPosteRestante($posteRestante)
            ->setMasa($masa)
            ->setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
            ->setWartosc($wartosc);
    }

    /**
     * Get deklaracjaCelna2 value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type|null
     */
    public function getDeklaracjaCelna2()
    {
        return $this->deklaracjaCelna2;
    }

    /**
     * Set deklaracjaCelna2 value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaZadeklarowanaWartoscZagranicznaType
     */
    public function setDeklaracjaCelna2(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null)
    {
        $this->deklaracjaCelna2 = $deklaracjaCelna2;

        return $this;
    }

    /**
     * Get posteRestante value.
     *
     * @return bool|null
     */
    public function getPosteRestante()
    {
        return $this->posteRestante;
    }

    /**
     * Set posteRestante value.
     *
     * @param bool $posteRestante
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaZadeklarowanaWartoscZagranicznaType
     */
    public function setPosteRestante($posteRestante = false)
    {
        // validation for constraint: boolean
        if (!is_null($posteRestante) && !is_bool($posteRestante)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($posteRestante, true), gettype($posteRestante)), __LINE__);
        }
        $this->posteRestante = $posteRestante;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaZadeklarowanaWartoscZagranicznaType
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
     * Get iloscPotwierdzenOdbioru value.
     *
     * @return int|null
     */
    public function getIloscPotwierdzenOdbioru()
    {
        return $this->iloscPotwierdzenOdbioru;
    }

    /**
     * Set iloscPotwierdzenOdbioru value.
     *
     * @param int $iloscPotwierdzenOdbioru
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaZadeklarowanaWartoscZagranicznaType
     */
    public function setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru = null)
    {
        // validation for constraint: int
        if (!is_null($iloscPotwierdzenOdbioru) && !(is_int($iloscPotwierdzenOdbioru) || ctype_digit($iloscPotwierdzenOdbioru))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iloscPotwierdzenOdbioru, true), gettype($iloscPotwierdzenOdbioru)), __LINE__);
        }
        // validation for constraint: maxInclusive(9)
        if (!is_null($iloscPotwierdzenOdbioru) && $iloscPotwierdzenOdbioru > 9) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9', var_export($iloscPotwierdzenOdbioru, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($iloscPotwierdzenOdbioru) && $iloscPotwierdzenOdbioru < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($iloscPotwierdzenOdbioru, true)), __LINE__);
        }
        $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaZadeklarowanaWartoscZagranicznaType
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
}
