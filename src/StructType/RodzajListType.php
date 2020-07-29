<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rodzajListType StructType.
 */
class RodzajListType extends AbstractStructBase
{
    /**
     * The polecony.
     *
     * @var bool
     */
    public $polecony;
    /**
     * The kategoria.
     *
     * @var string
     */
    public $kategoria;

    /**
     * Constructor method for rodzajListType.
     *
     * @uses RodzajListType::setPolecony()
     * @uses RodzajListType::setKategoria()
     *
     * @param bool   $polecony
     * @param string $kategoria
     */
    public function __construct($polecony = null, $kategoria = null)
    {
        $this
            ->setPolecony($polecony)
            ->setKategoria($kategoria);
    }

    /**
     * Get polecony value.
     *
     * @return bool|null
     */
    public function getPolecony()
    {
        return $this->polecony;
    }

    /**
     * Set polecony value.
     *
     * @param bool $polecony
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\RodzajListType
     */
    public function setPolecony($polecony = null)
    {
        // validation for constraint: boolean
        if (!is_null($polecony) && !is_bool($polecony)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($polecony, true), gettype($polecony)), __LINE__);
        }
        $this->polecony = $polecony;

        return $this;
    }

    /**
     * Get kategoria value.
     *
     * @return string|null
     */
    public function getKategoria()
    {
        return $this->kategoria;
    }

    /**
     * Set kategoria value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\KategoriaType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\KategoriaType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $kategoria
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\RodzajListType
     */
    public function setKategoria($kategoria = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\KategoriaType::valueIsValid($kategoria)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\KategoriaType', is_array($kategoria) ? implode(', ', $kategoria) : var_export($kategoria, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\KategoriaType::getValidValues())), __LINE__);
        }
        $this->kategoria = $kategoria;

        return $this;
    }
}
