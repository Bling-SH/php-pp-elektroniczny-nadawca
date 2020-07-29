<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ubezpieczenieType StructType.
 */
class UbezpieczenieType extends AbstractStructBase
{
    /**
     * The rodzaj
     * Meta information extracted from the WSDL
     * - use: required.
     *
     * @var string
     */
    public $rodzaj;
    /**
     * The kwota
     * Meta information extracted from the WSDL
     * - base: xsd:decimal
     * - use: required.
     *
     * @var float
     */
    public $kwota;
    /**
     * The akceptacjaOWU
     * Meta information extracted from the WSDL
     * - use: optional.
     *
     * @var bool
     */
    public $akceptacjaOWU;

    /**
     * Constructor method for ubezpieczenieType.
     *
     * @uses UbezpieczenieType::setRodzaj()
     * @uses UbezpieczenieType::setKwota()
     * @uses UbezpieczenieType::setAkceptacjaOWU()
     *
     * @param string $rodzaj
     * @param float  $kwota
     * @param bool   $akceptacjaOWU
     */
    public function __construct($rodzaj = null, $kwota = null, $akceptacjaOWU = null)
    {
        $this
            ->setRodzaj($rodzaj)
            ->setKwota($kwota)
            ->setAkceptacjaOWU($akceptacjaOWU);
    }

    /**
     * Get rodzaj value.
     *
     * @return string
     */
    public function getRodzaj()
    {
        return $this->rodzaj;
    }

    /**
     * Set rodzaj value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\RodzajUbezpieczeniaType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\RodzajUbezpieczeniaType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $rodzaj
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType
     */
    public function setRodzaj($rodzaj = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\RodzajUbezpieczeniaType::valueIsValid($rodzaj)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\RodzajUbezpieczeniaType', is_array($rodzaj) ? implode(', ', $rodzaj) : var_export($rodzaj, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\RodzajUbezpieczeniaType::getValidValues())), __LINE__);
        }
        $this->rodzaj = $rodzaj;

        return $this;
    }

    /**
     * Get kwota value.
     *
     * @return float
     */
    public function getKwota()
    {
        return $this->kwota;
    }

    /**
     * Set kwota value.
     *
     * @param float $kwota
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType
     */
    public function setKwota($kwota = null)
    {
        // validation for constraint: float
        if (!is_null($kwota) && !(is_float($kwota) || is_numeric($kwota))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($kwota, true), gettype($kwota)), __LINE__);
        }
        $this->kwota = $kwota;

        return $this;
    }

    /**
     * Get akceptacjaOWU value.
     *
     * @return bool|null
     */
    public function getAkceptacjaOWU()
    {
        return $this->akceptacjaOWU;
    }

    /**
     * Set akceptacjaOWU value.
     *
     * @param bool $akceptacjaOWU
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType
     */
    public function setAkceptacjaOWU($akceptacjaOWU = null)
    {
        // validation for constraint: boolean
        if (!is_null($akceptacjaOWU) && !is_bool($akceptacjaOWU)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($akceptacjaOWU, true), gettype($akceptacjaOWU)), __LINE__);
        }
        $this->akceptacjaOWU = $akceptacjaOWU;

        return $this;
    }
}
