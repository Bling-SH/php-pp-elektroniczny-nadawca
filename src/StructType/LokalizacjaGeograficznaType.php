<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for lokalizacjaGeograficznaType StructType.
 */
class LokalizacjaGeograficznaType extends AbstractStructBase
{
    /**
     * The dlugosc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType
     */
    public $dlugosc;
    /**
     * The szerokosc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType
     */
    public $szerokosc;

    /**
     * Constructor method for lokalizacjaGeograficznaType.
     *
     * @uses LokalizacjaGeograficznaType::setDlugosc()
     * @uses LokalizacjaGeograficznaType::setSzerokosc()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType $dlugosc
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType $szerokosc
     */
    public function __construct(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType $dlugosc = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType $szerokosc = null)
    {
        $this
            ->setDlugosc($dlugosc)
            ->setSzerokosc($szerokosc);
    }

    /**
     * Get dlugosc value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType
     */
    public function getDlugosc()
    {
        return $this->dlugosc;
    }

    /**
     * Set dlugosc value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType $dlugosc
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\LokalizacjaGeograficznaType
     */
    public function setDlugosc(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType $dlugosc = null)
    {
        $this->dlugosc = $dlugosc;

        return $this;
    }

    /**
     * Get szerokosc value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType
     */
    public function getSzerokosc()
    {
        return $this->szerokosc;
    }

    /**
     * Set szerokosc value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType $szerokosc
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\LokalizacjaGeograficznaType
     */
    public function setSzerokosc(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType $szerokosc = null)
    {
        $this->szerokosc = $szerokosc;

        return $this;
    }
}
