<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

/**
 * This class stands for globalExpresType StructType.
 */
class GlobalExpresType extends PrzesylkaRejestrowanaType
{
    /**
     * The ubezpieczenie.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType
     */
    public $ubezpieczenie;
    /**
     * The potwierdzenieDoreczenia.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType
     */
    public $potwierdzenieDoreczenia;
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
     * The posteRestante.
     *
     * @var bool
     */
    public $posteRestante;
    /**
     * The zawartosc.
     *
     * @var string
     */
    public $zawartosc;
    /**
     * The kategoria.
     *
     * @var string
     */
    public $kategoria;
    /**
     * The numerPrzesylkiKlienta.
     *
     * @var string
     */
    public $numerPrzesylkiKlienta;

    /**
     * Constructor method for globalExpresType.
     *
     * @uses GlobalExpresType::setUbezpieczenie()
     * @uses GlobalExpresType::setPotwierdzenieDoreczenia()
     * @uses GlobalExpresType::setDeklaracjaCelna2()
     * @uses GlobalExpresType::setMasa()
     * @uses GlobalExpresType::setPosteRestante()
     * @uses GlobalExpresType::setZawartosc()
     * @uses GlobalExpresType::setKategoria()
     * @uses GlobalExpresType::setNumerPrzesylkiKlienta()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType           $ubezpieczenie
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type        $deklaracjaCelna2
     * @param int                                                                             $masa
     * @param bool                                                                            $posteRestante
     * @param string                                                                          $zawartosc
     * @param string                                                                          $kategoria
     * @param string                                                                          $numerPrzesylkiKlienta
     */
    public function __construct(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null, $masa = null, $posteRestante = null, $zawartosc = null, $kategoria = null, $numerPrzesylkiKlienta = null)
    {
        $this
            ->setUbezpieczenie($ubezpieczenie)
            ->setPotwierdzenieDoreczenia($potwierdzenieDoreczenia)
            ->setDeklaracjaCelna2($deklaracjaCelna2)
            ->setMasa($masa)
            ->setPosteRestante($posteRestante)
            ->setZawartosc($zawartosc)
            ->setKategoria($kategoria)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta);
    }

    /**
     * Get ubezpieczenie value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType|null
     */
    public function getUbezpieczenie()
    {
        return $this->ubezpieczenie;
    }

    /**
     * Set ubezpieczenie value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GlobalExpresType
     */
    public function setUbezpieczenie(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null)
    {
        $this->ubezpieczenie = $ubezpieczenie;

        return $this;
    }

    /**
     * Get potwierdzenieDoreczenia value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType|null
     */
    public function getPotwierdzenieDoreczenia()
    {
        return $this->potwierdzenieDoreczenia;
    }

    /**
     * Set potwierdzenieDoreczenia value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GlobalExpresType
     */
    public function setPotwierdzenieDoreczenia(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null)
    {
        $this->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;

        return $this;
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GlobalExpresType
     */
    public function setDeklaracjaCelna2(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null)
    {
        $this->deklaracjaCelna2 = $deklaracjaCelna2;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GlobalExpresType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GlobalExpresType
     */
    public function setPosteRestante($posteRestante = null)
    {
        // validation for constraint: boolean
        if (!is_null($posteRestante) && !is_bool($posteRestante)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($posteRestante, true), gettype($posteRestante)), __LINE__);
        }
        $this->posteRestante = $posteRestante;

        return $this;
    }

    /**
     * Get zawartosc value.
     *
     * @return string|null
     */
    public function getZawartosc()
    {
        return $this->zawartosc;
    }

    /**
     * Set zawartosc value.
     *
     * @param string $zawartosc
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GlobalExpresType
     */
    public function setZawartosc($zawartosc = null)
    {
        // validation for constraint: string
        if (!is_null($zawartosc) && !is_string($zawartosc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zawartosc, true), gettype($zawartosc)), __LINE__);
        }
        $this->zawartosc = $zawartosc;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GlobalExpresType
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
     * Get numerPrzesylkiKlienta value.
     *
     * @return string|null
     */
    public function getNumerPrzesylkiKlienta()
    {
        return $this->numerPrzesylkiKlienta;
    }

    /**
     * Set numerPrzesylkiKlienta value.
     *
     * @param string $numerPrzesylkiKlienta
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GlobalExpresType
     */
    public function setNumerPrzesylkiKlienta($numerPrzesylkiKlienta = null)
    {
        // validation for constraint: string
        if (!is_null($numerPrzesylkiKlienta) && !is_string($numerPrzesylkiKlienta)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerPrzesylkiKlienta, true), gettype($numerPrzesylkiKlienta)), __LINE__);
        }
        $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;

        return $this;
    }
}
