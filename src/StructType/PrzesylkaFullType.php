<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaFullType StructType.
 */
class PrzesylkaFullType extends AbstractStructBase
{
    /**
     * The przesylkaShort.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaShortType
     */
    public $przesylkaShort;
    /**
     * The przesylkaFull.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType
     */
    public $przesylkaFull;

    /**
     * Constructor method for przesylkaFullType.
     *
     * @uses PrzesylkaFullType::setPrzesylkaShort()
     * @uses PrzesylkaFullType::setPrzesylkaFull()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaShortType $przesylkaShort
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType      $przesylkaFull
     */
    public function __construct(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaShortType $przesylkaShort = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType $przesylkaFull = null)
    {
        $this
            ->setPrzesylkaShort($przesylkaShort)
            ->setPrzesylkaFull($przesylkaFull);
    }

    /**
     * Get przesylkaShort value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaShortType|null
     */
    public function getPrzesylkaShort()
    {
        return $this->przesylkaShort;
    }

    /**
     * Set przesylkaShort value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaShortType $przesylkaShort
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaFullType
     */
    public function setPrzesylkaShort(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaShortType $przesylkaShort = null)
    {
        $this->przesylkaShort = $przesylkaShort;

        return $this;
    }

    /**
     * Get przesylkaFull value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType|null
     */
    public function getPrzesylkaFull()
    {
        return $this->przesylkaFull;
    }

    /**
     * Set przesylkaFull value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType $przesylkaFull
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaFullType
     */
    public function setPrzesylkaFull(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType $przesylkaFull = null)
    {
        $this->przesylkaFull = $przesylkaFull;

        return $this;
    }
}
