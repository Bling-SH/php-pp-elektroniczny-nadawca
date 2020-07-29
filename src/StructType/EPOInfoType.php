<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EPOInfoType StructType.
 */
class EPOInfoType extends AbstractStructBase
{
    /**
     * The awizoPrzesylki
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AwizoPrzesylkiType
     */
    public $awizoPrzesylki;
    /**
     * The doreczeniePrzesylki
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType
     */
    public $doreczeniePrzesylki;
    /**
     * The zwrotPrzesylki
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotPrzesylkiType
     */
    public $zwrotPrzesylki;

    /**
     * Constructor method for EPOInfoType.
     *
     * @uses EPOInfoType::setAwizoPrzesylki()
     * @uses EPOInfoType::setDoreczeniePrzesylki()
     * @uses EPOInfoType::setZwrotPrzesylki()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AwizoPrzesylkiType      $awizoPrzesylki
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType $doreczeniePrzesylki
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotPrzesylkiType      $zwrotPrzesylki
     */
    public function __construct(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AwizoPrzesylkiType $awizoPrzesylki = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType $doreczeniePrzesylki = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotPrzesylkiType $zwrotPrzesylki = null)
    {
        $this
            ->setAwizoPrzesylki($awizoPrzesylki)
            ->setDoreczeniePrzesylki($doreczeniePrzesylki)
            ->setZwrotPrzesylki($zwrotPrzesylki);
    }

    /**
     * Get awizoPrzesylki value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AwizoPrzesylkiType|null
     */
    public function getAwizoPrzesylki()
    {
        return $this->awizoPrzesylki;
    }

    /**
     * Set awizoPrzesylki value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AwizoPrzesylkiType $awizoPrzesylki
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPOInfoType
     */
    public function setAwizoPrzesylki(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AwizoPrzesylkiType $awizoPrzesylki = null)
    {
        $this->awizoPrzesylki = $awizoPrzesylki;

        return $this;
    }

    /**
     * Get doreczeniePrzesylki value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType|null
     */
    public function getDoreczeniePrzesylki()
    {
        return $this->doreczeniePrzesylki;
    }

    /**
     * Set doreczeniePrzesylki value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType $doreczeniePrzesylki
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPOInfoType
     */
    public function setDoreczeniePrzesylki(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczeniePrzesylkiType $doreczeniePrzesylki = null)
    {
        $this->doreczeniePrzesylki = $doreczeniePrzesylki;

        return $this;
    }

    /**
     * Get zwrotPrzesylki value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotPrzesylkiType|null
     */
    public function getZwrotPrzesylki()
    {
        return $this->zwrotPrzesylki;
    }

    /**
     * Set zwrotPrzesylki value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotPrzesylkiType $zwrotPrzesylki
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPOInfoType
     */
    public function setZwrotPrzesylki(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotPrzesylkiType $zwrotPrzesylki = null)
    {
        $this->zwrotPrzesylki = $zwrotPrzesylki;

        return $this;
    }
}
