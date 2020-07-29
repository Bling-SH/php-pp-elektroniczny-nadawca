<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for reklamowanaPrzesylkaType StructType.
 */
class ReklamowanaPrzesylkaType extends AbstractStructBase
{
    /**
     * The przesylka
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType
     */
    public $przesylka;
    /**
     * The powodReklamacji
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PowodReklamacjiType
     */
    public $powodReklamacji;
    /**
     * The dataNadania
     * Meta information extracted from the WSDL
     * - use: required.
     *
     * @var string
     */
    public $dataNadania;
    /**
     * The urzadNadania
     * Meta information extracted from the WSDL
     * - base: xsd:int.
     *
     * @var int
     */
    public $urzadNadania;
    /**
     * The powodReklamacjiOpis
     * Meta information extracted from the WSDL
     * - use: optional.
     *
     * @var string
     */
    public $powodReklamacjiOpis;
    /**
     * The odszkodowanie.
     *
     * @var int
     */
    public $odszkodowanie;
    /**
     * The oplata.
     *
     * @var int
     */
    public $oplata;
    /**
     * The oczekiwaneOdszkodowanie.
     *
     * @var int
     */
    public $oczekiwaneOdszkodowanie;

    /**
     * Constructor method for reklamowanaPrzesylkaType.
     *
     * @uses ReklamowanaPrzesylkaType::setPrzesylka()
     * @uses ReklamowanaPrzesylkaType::setPowodReklamacji()
     * @uses ReklamowanaPrzesylkaType::setDataNadania()
     * @uses ReklamowanaPrzesylkaType::setUrzadNadania()
     * @uses ReklamowanaPrzesylkaType::setPowodReklamacjiOpis()
     * @uses ReklamowanaPrzesylkaType::setOdszkodowanie()
     * @uses ReklamowanaPrzesylkaType::setOplata()
     * @uses ReklamowanaPrzesylkaType::setOczekiwaneOdszkodowanie()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType       $przesylka
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PowodReklamacjiType $powodReklamacji
     * @param string                                                                  $dataNadania
     * @param int                                                                     $urzadNadania
     * @param string                                                                  $powodReklamacjiOpis
     * @param int                                                                     $odszkodowanie
     * @param int                                                                     $oplata
     * @param int                                                                     $oczekiwaneOdszkodowanie
     */
    public function __construct(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType $przesylka = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PowodReklamacjiType $powodReklamacji = null, $dataNadania = null, $urzadNadania = null, $powodReklamacjiOpis = null, $odszkodowanie = null, $oplata = null, $oczekiwaneOdszkodowanie = null)
    {
        $this
            ->setPrzesylka($przesylka)
            ->setPowodReklamacji($powodReklamacji)
            ->setDataNadania($dataNadania)
            ->setUrzadNadania($urzadNadania)
            ->setPowodReklamacjiOpis($powodReklamacjiOpis)
            ->setOdszkodowanie($odszkodowanie)
            ->setOplata($oplata)
            ->setOczekiwaneOdszkodowanie($oczekiwaneOdszkodowanie);
    }

    /**
     * Get przesylka value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType
     */
    public function getPrzesylka()
    {
        return $this->przesylka;
    }

    /**
     * Set przesylka value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType $przesylka
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType
     */
    public function setPrzesylka(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType $przesylka = null)
    {
        $this->przesylka = $przesylka;

        return $this;
    }

    /**
     * Get powodReklamacji value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PowodReklamacjiType
     */
    public function getPowodReklamacji()
    {
        return $this->powodReklamacji;
    }

    /**
     * Set powodReklamacji value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PowodReklamacjiType $powodReklamacji
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType
     */
    public function setPowodReklamacji(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PowodReklamacjiType $powodReklamacji = null)
    {
        $this->powodReklamacji = $powodReklamacji;

        return $this;
    }

    /**
     * Get dataNadania value.
     *
     * @return string
     */
    public function getDataNadania()
    {
        return $this->dataNadania;
    }

    /**
     * Set dataNadania value.
     *
     * @param string $dataNadania
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType
     */
    public function setDataNadania($dataNadania = null)
    {
        // validation for constraint: string
        if (!is_null($dataNadania) && !is_string($dataNadania)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataNadania, true), gettype($dataNadania)), __LINE__);
        }
        $this->dataNadania = $dataNadania;

        return $this;
    }

    /**
     * Get urzadNadania value.
     *
     * @return int|null
     */
    public function getUrzadNadania()
    {
        return $this->urzadNadania;
    }

    /**
     * Set urzadNadania value.
     *
     * @param int $urzadNadania
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType
     */
    public function setUrzadNadania($urzadNadania = null)
    {
        // validation for constraint: int
        if (!is_null($urzadNadania) && !(is_int($urzadNadania) || ctype_digit($urzadNadania))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($urzadNadania, true), gettype($urzadNadania)), __LINE__);
        }
        $this->urzadNadania = $urzadNadania;

        return $this;
    }

    /**
     * Get powodReklamacjiOpis value.
     *
     * @return string|null
     */
    public function getPowodReklamacjiOpis()
    {
        return $this->powodReklamacjiOpis;
    }

    /**
     * Set powodReklamacjiOpis value.
     *
     * @param string $powodReklamacjiOpis
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType
     */
    public function setPowodReklamacjiOpis($powodReklamacjiOpis = null)
    {
        // validation for constraint: string
        if (!is_null($powodReklamacjiOpis) && !is_string($powodReklamacjiOpis)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($powodReklamacjiOpis, true), gettype($powodReklamacjiOpis)), __LINE__);
        }
        $this->powodReklamacjiOpis = $powodReklamacjiOpis;

        return $this;
    }

    /**
     * Get odszkodowanie value.
     *
     * @return int|null
     */
    public function getOdszkodowanie()
    {
        return $this->odszkodowanie;
    }

    /**
     * Set odszkodowanie value.
     *
     * @param int $odszkodowanie
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType
     */
    public function setOdszkodowanie($odszkodowanie = null)
    {
        // validation for constraint: int
        if (!is_null($odszkodowanie) && !(is_int($odszkodowanie) || ctype_digit($odszkodowanie))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($odszkodowanie, true), gettype($odszkodowanie)), __LINE__);
        }
        $this->odszkodowanie = $odszkodowanie;

        return $this;
    }

    /**
     * Get oplata value.
     *
     * @return int|null
     */
    public function getOplata()
    {
        return $this->oplata;
    }

    /**
     * Set oplata value.
     *
     * @param int $oplata
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType
     */
    public function setOplata($oplata = null)
    {
        // validation for constraint: int
        if (!is_null($oplata) && !(is_int($oplata) || ctype_digit($oplata))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($oplata, true), gettype($oplata)), __LINE__);
        }
        $this->oplata = $oplata;

        return $this;
    }

    /**
     * Get oczekiwaneOdszkodowanie value.
     *
     * @return int|null
     */
    public function getOczekiwaneOdszkodowanie()
    {
        return $this->oczekiwaneOdszkodowanie;
    }

    /**
     * Set oczekiwaneOdszkodowanie value.
     *
     * @param int $oczekiwaneOdszkodowanie
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamowanaPrzesylkaType
     */
    public function setOczekiwaneOdszkodowanie($oczekiwaneOdszkodowanie = null)
    {
        // validation for constraint: int
        if (!is_null($oczekiwaneOdszkodowanie) && !(is_int($oczekiwaneOdszkodowanie) || ctype_digit($oczekiwaneOdszkodowanie))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($oczekiwaneOdszkodowanie, true), gettype($oczekiwaneOdszkodowanie)), __LINE__);
        }
        $this->oczekiwaneOdszkodowanie = $oczekiwaneOdszkodowanie;

        return $this;
    }
}
