<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

/**
 * This class stands for przesylkaZagranicznaType StructType.
 */
class PrzesylkaZagranicznaType extends PrzesylkaNieRejestrowanaType
{
    /**
     * The adres
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType
     */
    public $adres;
    /**
     * The nadawca
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType
     */
    public $nadawca;
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
     * The ekspres
     * Meta information extracted from the WSDL
     * - default: false.
     *
     * @var bool
     */
    public $ekspres;
    /**
     * The kraj.
     *
     * @var string
     */
    public $kraj;

    /**
     * Constructor method for przesylkaZagranicznaType.
     *
     * @uses PrzesylkaZagranicznaType::setAdres()
     * @uses PrzesylkaZagranicznaType::setNadawca()
     * @uses PrzesylkaZagranicznaType::setDeklaracjaCelna2()
     * @uses PrzesylkaZagranicznaType::setPosteRestante()
     * @uses PrzesylkaZagranicznaType::setKategoria()
     * @uses PrzesylkaZagranicznaType::setMasa()
     * @uses PrzesylkaZagranicznaType::setEkspres()
     * @uses PrzesylkaZagranicznaType::setKraj()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType            $adres
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType            $nadawca
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2
     * @param bool                                                                     $posteRestante
     * @param string                                                                   $kategoria
     * @param int                                                                      $masa
     * @param bool                                                                     $ekspres
     * @param string                                                                   $kraj
     */
    public function __construct(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $adres = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $nadawca = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null, $posteRestante = false, $kategoria = null, $masa = null, $ekspres = false, $kraj = null)
    {
        $this
            ->setAdres($adres)
            ->setNadawca($nadawca)
            ->setDeklaracjaCelna2($deklaracjaCelna2)
            ->setPosteRestante($posteRestante)
            ->setKategoria($kategoria)
            ->setMasa($masa)
            ->setEkspres($ekspres)
            ->setKraj($kraj);
    }

    /**
     * Get adres value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType|null
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * Set adres value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $adres
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaZagranicznaType
     */
    public function setAdres(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $adres = null)
    {
        $this->adres = $adres;

        return $this;
    }

    /**
     * Get nadawca value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType|null
     */
    public function getNadawca()
    {
        return $this->nadawca;
    }

    /**
     * Set nadawca value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $nadawca
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaZagranicznaType
     */
    public function setNadawca(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $nadawca = null)
    {
        $this->nadawca = $nadawca;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaZagranicznaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaZagranicznaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaZagranicznaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaZagranicznaType
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
     * Get ekspres value.
     *
     * @return bool|null
     */
    public function getEkspres()
    {
        return $this->ekspres;
    }

    /**
     * Set ekspres value.
     *
     * @param bool $ekspres
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaZagranicznaType
     */
    public function setEkspres($ekspres = false)
    {
        // validation for constraint: boolean
        if (!is_null($ekspres) && !is_bool($ekspres)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ekspres, true), gettype($ekspres)), __LINE__);
        }
        $this->ekspres = $ekspres;

        return $this;
    }

    /**
     * Get kraj value.
     *
     * @return string|null
     */
    public function getKraj()
    {
        return $this->kraj;
    }

    /**
     * Set kraj value.
     *
     * @param string $kraj
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaZagranicznaType
     */
    public function setKraj($kraj = null)
    {
        // validation for constraint: string
        if (!is_null($kraj) && !is_string($kraj)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kraj, true), gettype($kraj)), __LINE__);
        }
        $this->kraj = $kraj;

        return $this;
    }
}
