<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for szczegolyDeklaracjiCelnejType StructType.
 */
class SzczegolyDeklaracjiCelnejType extends AbstractStructBase
{
    /**
     * The zawartosc.
     *
     * @var string
     */
    public $zawartosc;
    /**
     * The ilosc.
     *
     * @var float
     */
    public $ilosc;
    /**
     * The masa.
     *
     * @var int
     */
    public $masa;
    /**
     * The wartosc.
     *
     * @var int
     */
    public $wartosc;
    /**
     * The numerTaryfowy.
     *
     * @var string
     */
    public $numerTaryfowy;
    /**
     * The krajPochodzenia.
     *
     * @var string
     */
    public $krajPochodzenia;

    /**
     * Constructor method for szczegolyDeklaracjiCelnejType.
     *
     * @uses SzczegolyDeklaracjiCelnejType::setZawartosc()
     * @uses SzczegolyDeklaracjiCelnejType::setIlosc()
     * @uses SzczegolyDeklaracjiCelnejType::setMasa()
     * @uses SzczegolyDeklaracjiCelnejType::setWartosc()
     * @uses SzczegolyDeklaracjiCelnejType::setNumerTaryfowy()
     * @uses SzczegolyDeklaracjiCelnejType::setKrajPochodzenia()
     *
     * @param string $zawartosc
     * @param float  $ilosc
     * @param int    $masa
     * @param int    $wartosc
     * @param string $numerTaryfowy
     * @param string $krajPochodzenia
     */
    public function __construct($zawartosc = null, $ilosc = null, $masa = null, $wartosc = null, $numerTaryfowy = null, $krajPochodzenia = null)
    {
        $this
            ->setZawartosc($zawartosc)
            ->setIlosc($ilosc)
            ->setMasa($masa)
            ->setWartosc($wartosc)
            ->setNumerTaryfowy($numerTaryfowy)
            ->setKrajPochodzenia($krajPochodzenia);
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SzczegolyDeklaracjiCelnejType
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
     * Get ilosc value.
     *
     * @return float|null
     */
    public function getIlosc()
    {
        return $this->ilosc;
    }

    /**
     * Set ilosc value.
     *
     * @param float $ilosc
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SzczegolyDeklaracjiCelnejType
     */
    public function setIlosc($ilosc = null)
    {
        // validation for constraint: float
        if (!is_null($ilosc) && !(is_float($ilosc) || is_numeric($ilosc))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ilosc, true), gettype($ilosc)), __LINE__);
        }
        $this->ilosc = $ilosc;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SzczegolyDeklaracjiCelnejType
     */
    public function setMasa($masa = null)
    {
        // validation for constraint: int
        if (!is_null($masa) && !(is_int($masa) || ctype_digit($masa))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($masa, true), gettype($masa)), __LINE__);
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SzczegolyDeklaracjiCelnejType
     */
    public function setWartosc($wartosc = null)
    {
        // validation for constraint: int
        if (!is_null($wartosc) && !(is_int($wartosc) || ctype_digit($wartosc))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($wartosc, true), gettype($wartosc)), __LINE__);
        }
        $this->wartosc = $wartosc;

        return $this;
    }

    /**
     * Get numerTaryfowy value.
     *
     * @return string|null
     */
    public function getNumerTaryfowy()
    {
        return $this->numerTaryfowy;
    }

    /**
     * Set numerTaryfowy value.
     *
     * @param string $numerTaryfowy
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SzczegolyDeklaracjiCelnejType
     */
    public function setNumerTaryfowy($numerTaryfowy = null)
    {
        // validation for constraint: string
        if (!is_null($numerTaryfowy) && !is_string($numerTaryfowy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerTaryfowy, true), gettype($numerTaryfowy)), __LINE__);
        }
        $this->numerTaryfowy = $numerTaryfowy;

        return $this;
    }

    /**
     * Get krajPochodzenia value.
     *
     * @return string|null
     */
    public function getKrajPochodzenia()
    {
        return $this->krajPochodzenia;
    }

    /**
     * Set krajPochodzenia value.
     *
     * @param string $krajPochodzenia
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SzczegolyDeklaracjiCelnejType
     */
    public function setKrajPochodzenia($krajPochodzenia = null)
    {
        // validation for constraint: string
        if (!is_null($krajPochodzenia) && !is_string($krajPochodzenia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($krajPochodzenia, true), gettype($krajPochodzenia)), __LINE__);
        }
        $this->krajPochodzenia = $krajPochodzenia;

        return $this;
    }
}
