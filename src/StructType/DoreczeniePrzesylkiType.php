<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doreczeniePrzesylkiType StructType.
 */
class DoreczeniePrzesylkiType extends AbstractStructBase
{
    /**
     * The data.
     *
     * @var string
     */
    public $data;
    /**
     * The osobaOdbierajaca.
     *
     * @var string
     */
    public $osobaOdbierajaca;
    /**
     * The podmiotDoreczenia.
     *
     * @var string
     */
    public $podmiotDoreczenia;
    /**
     * The dataPelnomocnictwa.
     *
     * @var string
     */
    public $dataPelnomocnictwa;
    /**
     * The numerPelnomocnictwa.
     *
     * @var string
     */
    public $numerPelnomocnictwa;
    /**
     * The pieczecFirmowa.
     *
     * @var bool
     */
    public $pieczecFirmowa;
    /**
     * The miejscePozostawieniaZawiadomieniaODoreczeniu.
     *
     * @var string
     */
    public $miejscePozostawieniaZawiadomieniaODoreczeniu;

    /**
     * Constructor method for doreczeniePrzesylkiType.
     *
     * @uses DoreczeniePrzesylkiType::setData()
     * @uses DoreczeniePrzesylkiType::setOsobaOdbierajaca()
     * @uses DoreczeniePrzesylkiType::setPodmiotDoreczenia()
     * @uses DoreczeniePrzesylkiType::setDataPelnomocnictwa()
     * @uses DoreczeniePrzesylkiType::setNumerPelnomocnictwa()
     * @uses DoreczeniePrzesylkiType::setPieczecFirmowa()
     * @uses DoreczeniePrzesylkiType::setMiejscePozostawieniaZawiadomieniaODoreczeniu()
     *
     * @param string $data
     * @param string $osobaOdbierajaca
     * @param string $podmiotDoreczenia
     * @param string $dataPelnomocnictwa
     * @param string $numerPelnomocnictwa
     * @param bool   $pieczecFirmowa
     * @param string $miejscePozostawieniaZawiadomieniaODoreczeniu
     */
    public function __construct($data = null, $osobaOdbierajaca = null, $podmiotDoreczenia = null, $dataPelnomocnictwa = null, $numerPelnomocnictwa = null, $pieczecFirmowa = null, $miejscePozostawieniaZawiadomieniaODoreczeniu = null)
    {
        $this
            ->setData($data)
            ->setOsobaOdbierajaca($osobaOdbierajaca)
            ->setPodmiotDoreczenia($podmiotDoreczenia)
            ->setDataPelnomocnictwa($dataPelnomocnictwa)
            ->setNumerPelnomocnictwa($numerPelnomocnictwa)
            ->setPieczecFirmowa($pieczecFirmowa)
            ->setMiejscePozostawieniaZawiadomieniaODoreczeniu($miejscePozostawieniaZawiadomieniaODoreczeniu);
    }

    /**
     * Get data value.
     *
     * @return string|null
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set data value.
     *
     * @param string $data
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType
     */
    public function setData($data = null)
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        $this->data = $data;

        return $this;
    }

    /**
     * Get osobaOdbierajaca value.
     *
     * @return string|null
     */
    public function getOsobaOdbierajaca()
    {
        return $this->osobaOdbierajaca;
    }

    /**
     * Set osobaOdbierajaca value.
     *
     * @param string $osobaOdbierajaca
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType
     */
    public function setOsobaOdbierajaca($osobaOdbierajaca = null)
    {
        // validation for constraint: string
        if (!is_null($osobaOdbierajaca) && !is_string($osobaOdbierajaca)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($osobaOdbierajaca, true), gettype($osobaOdbierajaca)), __LINE__);
        }
        $this->osobaOdbierajaca = $osobaOdbierajaca;

        return $this;
    }

    /**
     * Get podmiotDoreczenia value.
     *
     * @return string|null
     */
    public function getPodmiotDoreczenia()
    {
        return $this->podmiotDoreczenia;
    }

    /**
     * Set podmiotDoreczenia value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\PodmiotDoreczeniaEnum::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\PodmiotDoreczeniaEnum::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $podmiotDoreczenia
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType
     */
    public function setPodmiotDoreczenia($podmiotDoreczenia = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\PodmiotDoreczeniaEnum::valueIsValid($podmiotDoreczenia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\PodmiotDoreczeniaEnum', is_array($podmiotDoreczenia) ? implode(', ', $podmiotDoreczenia) : var_export($podmiotDoreczenia, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\PodmiotDoreczeniaEnum::getValidValues())), __LINE__);
        }
        $this->podmiotDoreczenia = $podmiotDoreczenia;

        return $this;
    }

    /**
     * Get dataPelnomocnictwa value.
     *
     * @return string|null
     */
    public function getDataPelnomocnictwa()
    {
        return $this->dataPelnomocnictwa;
    }

    /**
     * Set dataPelnomocnictwa value.
     *
     * @param string $dataPelnomocnictwa
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType
     */
    public function setDataPelnomocnictwa($dataPelnomocnictwa = null)
    {
        // validation for constraint: string
        if (!is_null($dataPelnomocnictwa) && !is_string($dataPelnomocnictwa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataPelnomocnictwa, true), gettype($dataPelnomocnictwa)), __LINE__);
        }
        $this->dataPelnomocnictwa = $dataPelnomocnictwa;

        return $this;
    }

    /**
     * Get numerPelnomocnictwa value.
     *
     * @return string|null
     */
    public function getNumerPelnomocnictwa()
    {
        return $this->numerPelnomocnictwa;
    }

    /**
     * Set numerPelnomocnictwa value.
     *
     * @param string $numerPelnomocnictwa
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType
     */
    public function setNumerPelnomocnictwa($numerPelnomocnictwa = null)
    {
        // validation for constraint: string
        if (!is_null($numerPelnomocnictwa) && !is_string($numerPelnomocnictwa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerPelnomocnictwa, true), gettype($numerPelnomocnictwa)), __LINE__);
        }
        $this->numerPelnomocnictwa = $numerPelnomocnictwa;

        return $this;
    }

    /**
     * Get pieczecFirmowa value.
     *
     * @return bool|null
     */
    public function getPieczecFirmowa()
    {
        return $this->pieczecFirmowa;
    }

    /**
     * Set pieczecFirmowa value.
     *
     * @param bool $pieczecFirmowa
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType
     */
    public function setPieczecFirmowa($pieczecFirmowa = null)
    {
        // validation for constraint: boolean
        if (!is_null($pieczecFirmowa) && !is_bool($pieczecFirmowa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($pieczecFirmowa, true), gettype($pieczecFirmowa)), __LINE__);
        }
        $this->pieczecFirmowa = $pieczecFirmowa;

        return $this;
    }

    /**
     * Get miejscePozostawieniaZawiadomieniaODoreczeniu value.
     *
     * @return string|null
     */
    public function getMiejscePozostawieniaZawiadomieniaODoreczeniu()
    {
        return $this->miejscePozostawieniaZawiadomieniaODoreczeniu;
    }

    /**
     * Set miejscePozostawieniaZawiadomieniaODoreczeniu value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\MiejscePozostawieniaZawiadomieniaODoreczeniuEnum::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\MiejscePozostawieniaZawiadomieniaODoreczeniuEnum::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $miejscePozostawieniaZawiadomieniaODoreczeniu
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType
     */
    public function setMiejscePozostawieniaZawiadomieniaODoreczeniu($miejscePozostawieniaZawiadomieniaODoreczeniu = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\MiejscePozostawieniaZawiadomieniaODoreczeniuEnum::valueIsValid($miejscePozostawieniaZawiadomieniaODoreczeniu)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\MiejscePozostawieniaZawiadomieniaODoreczeniuEnum', is_array($miejscePozostawieniaZawiadomieniaODoreczeniu) ? implode(', ', $miejscePozostawieniaZawiadomieniaODoreczeniu) : var_export($miejscePozostawieniaZawiadomieniaODoreczeniu, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\MiejscePozostawieniaZawiadomieniaODoreczeniuEnum::getValidValues())), __LINE__);
        }
        $this->miejscePozostawieniaZawiadomieniaODoreczeniu = $miejscePozostawieniaZawiadomieniaODoreczeniu;

        return $this;
    }
}
