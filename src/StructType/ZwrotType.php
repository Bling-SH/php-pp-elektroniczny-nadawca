<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zwrotType StructType.
 */
class ZwrotType extends AbstractStructBase
{
    /**
     * The zwrotPoLiczbieDni.
     *
     * @var int
     */
    public $zwrotPoLiczbieDni;
    /**
     * The traktowacJakPorzucona.
     *
     * @var bool
     */
    public $traktowacJakPorzucona;
    /**
     * The sposobZwrotu.
     *
     * @var string
     */
    public $sposobZwrotu;

    /**
     * Constructor method for zwrotType.
     *
     * @uses ZwrotType::setZwrotPoLiczbieDni()
     * @uses ZwrotType::setTraktowacJakPorzucona()
     * @uses ZwrotType::setSposobZwrotu()
     *
     * @param int    $zwrotPoLiczbieDni
     * @param bool   $traktowacJakPorzucona
     * @param string $sposobZwrotu
     */
    public function __construct($zwrotPoLiczbieDni = null, $traktowacJakPorzucona = null, $sposobZwrotu = null)
    {
        $this
            ->setZwrotPoLiczbieDni($zwrotPoLiczbieDni)
            ->setTraktowacJakPorzucona($traktowacJakPorzucona)
            ->setSposobZwrotu($sposobZwrotu);
    }

    /**
     * Get zwrotPoLiczbieDni value.
     *
     * @return int|null
     */
    public function getZwrotPoLiczbieDni()
    {
        return $this->zwrotPoLiczbieDni;
    }

    /**
     * Set zwrotPoLiczbieDni value.
     *
     * @param int $zwrotPoLiczbieDni
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotType
     */
    public function setZwrotPoLiczbieDni($zwrotPoLiczbieDni = null)
    {
        // validation for constraint: int
        if (!is_null($zwrotPoLiczbieDni) && !(is_int($zwrotPoLiczbieDni) || ctype_digit($zwrotPoLiczbieDni))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($zwrotPoLiczbieDni, true), gettype($zwrotPoLiczbieDni)), __LINE__);
        }
        $this->zwrotPoLiczbieDni = $zwrotPoLiczbieDni;

        return $this;
    }

    /**
     * Get traktowacJakPorzucona value.
     *
     * @return bool|null
     */
    public function getTraktowacJakPorzucona()
    {
        return $this->traktowacJakPorzucona;
    }

    /**
     * Set traktowacJakPorzucona value.
     *
     * @param bool $traktowacJakPorzucona
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotType
     */
    public function setTraktowacJakPorzucona($traktowacJakPorzucona = null)
    {
        // validation for constraint: boolean
        if (!is_null($traktowacJakPorzucona) && !is_bool($traktowacJakPorzucona)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($traktowacJakPorzucona, true), gettype($traktowacJakPorzucona)), __LINE__);
        }
        $this->traktowacJakPorzucona = $traktowacJakPorzucona;

        return $this;
    }

    /**
     * Get sposobZwrotu value.
     *
     * @return string|null
     */
    public function getSposobZwrotu()
    {
        return $this->sposobZwrotu;
    }

    /**
     * Set sposobZwrotu value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\SposobZwrotuType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\SposobZwrotuType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $sposobZwrotu
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotType
     */
    public function setSposobZwrotu($sposobZwrotu = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\SposobZwrotuType::valueIsValid($sposobZwrotu)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\SposobZwrotuType', is_array($sposobZwrotu) ? implode(', ', $sposobZwrotu) : var_export($sposobZwrotu, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\SposobZwrotuType::getValidValues())), __LINE__);
        }
        $this->sposobZwrotu = $sposobZwrotu;

        return $this;
    }
}
