<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ubezpieczeniaInfoType StructType.
 */
class UbezpieczeniaInfoType extends AbstractStructBase
{
    /**
     * The typPrzesylki.
     *
     * @var string
     */
    public $typPrzesylki;
    /**
     * The kwota
     * Meta information extracted from the WSDL
     * - base: xsd:decimal.
     *
     * @var float
     */
    public $kwota;

    /**
     * Constructor method for ubezpieczeniaInfoType.
     *
     * @uses UbezpieczeniaInfoType::setTypPrzesylki()
     * @uses UbezpieczeniaInfoType::setKwota()
     *
     * @param string $typPrzesylki
     * @param float  $kwota
     */
    public function __construct($typPrzesylki = null, $kwota = null)
    {
        $this
            ->setTypPrzesylki($typPrzesylki)
            ->setKwota($kwota);
    }

    /**
     * Get typPrzesylki value.
     *
     * @return string|null
     */
    public function getTypPrzesylki()
    {
        return $this->typPrzesylki;
    }

    /**
     * Set typPrzesylki value.
     *
     * @param string $typPrzesylki
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczeniaInfoType
     */
    public function setTypPrzesylki($typPrzesylki = null)
    {
        // validation for constraint: string
        if (!is_null($typPrzesylki) && !is_string($typPrzesylki)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typPrzesylki, true), gettype($typPrzesylki)), __LINE__);
        }
        $this->typPrzesylki = $typPrzesylki;

        return $this;
    }

    /**
     * Get kwota value.
     *
     * @return float|null
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczeniaInfoType
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
}
