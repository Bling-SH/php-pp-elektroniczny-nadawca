<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DokumentyTowarzyszaceType StructType.
 */
class DokumentyTowarzyszaceType extends AbstractStructBase
{
    /**
     * The rodzaj.
     *
     * @var string
     */
    public $rodzaj;
    /**
     * The numer.
     *
     * @var string
     */
    public $numer;

    /**
     * Constructor method for DokumentyTowarzyszaceType.
     *
     * @uses DokumentyTowarzyszaceType::setRodzaj()
     * @uses DokumentyTowarzyszaceType::setNumer()
     *
     * @param string $rodzaj
     * @param string $numer
     */
    public function __construct($rodzaj = null, $numer = null)
    {
        $this
            ->setRodzaj($rodzaj)
            ->setNumer($numer);
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
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\DokumentTowarzyszacyRodzajEnum::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\DokumentTowarzyszacyRodzajEnum::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $rodzaj
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DokumentyTowarzyszaceType
     */
    public function setRodzaj($rodzaj = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\DokumentTowarzyszacyRodzajEnum::valueIsValid($rodzaj)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\DokumentTowarzyszacyRodzajEnum', is_array($rodzaj) ? implode(', ', $rodzaj) : var_export($rodzaj, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\DokumentTowarzyszacyRodzajEnum::getValidValues())), __LINE__);
        }
        $this->rodzaj = $rodzaj;

        return $this;
    }

    /**
     * Get numer value.
     *
     * @return string|null
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DokumentyTowarzyszaceType
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
}
