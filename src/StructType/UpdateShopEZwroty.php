<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateShopEZwroty StructType.
 */
class UpdateShopEZwroty extends AbstractStructBase
{
    /**
     * The shop
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public $shop;

    /**
     * Constructor method for updateShopEZwroty.
     *
     * @uses UpdateShopEZwroty::setShop()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ShopEZwrotyType $shop
     */
    public function __construct(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\ShopEZwrotyType $shop = null)
    {
        $this
            ->setShop($shop);
    }

    /**
     * Get shop value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function getShop()
    {
        return $this->shop;
    }

    /**
     * Set shop value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ShopEZwrotyType $shop
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UpdateShopEZwroty
     */
    public function setShop(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\ShopEZwrotyType $shop = null)
    {
        $this->shop = $shop;

        return $this;
    }
}
