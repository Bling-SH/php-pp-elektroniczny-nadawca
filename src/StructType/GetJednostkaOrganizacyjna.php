<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getJednostkaOrganizacyjna StructType.
 */
class GetJednostkaOrganizacyjna extends AbstractStructBase
{
    /**
     * The jednostka
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
     */
    public $jednostka;

    /**
     * Constructor method for getJednostkaOrganizacyjna.
     *
     * @uses GetJednostkaOrganizacyjna::setJednostka()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $jednostka
     */
    public function __construct(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $jednostka = null)
    {
        $this
            ->setJednostka($jednostka);
    }

    /**
     * Get jednostka value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType|null
     */
    public function getJednostka()
    {
        return $this->jednostka;
    }

    /**
     * Set jednostka value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $jednostka
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetJednostkaOrganizacyjna
     */
    public function setJednostka(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $jednostka = null)
    {
        $this->jednostka = $jednostka;

        return $this;
    }
}
