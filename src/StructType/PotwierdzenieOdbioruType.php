<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for potwierdzenieOdbioruType StructType.
 */
class PotwierdzenieOdbioruType extends AbstractStructBase
{
    /**
     * The ilosc
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - maxInclusive: 9
     * - minInclusive: 0.
     *
     * @var int
     */
    public $ilosc;
    /**
     * The sposob.
     *
     * @var string
     */
    public $sposob;

    /**
     * Constructor method for potwierdzenieOdbioruType.
     *
     * @uses PotwierdzenieOdbioruType::setIlosc()
     * @uses PotwierdzenieOdbioruType::setSposob()
     *
     * @param int    $ilosc
     * @param string $sposob
     */
    public function __construct($ilosc = null, $sposob = null)
    {
        $this
            ->setIlosc($ilosc)
            ->setSposob($sposob);
    }

    /**
     * Get ilosc value.
     *
     * @return int|null
     */
    public function getIlosc()
    {
        return $this->ilosc;
    }

    /**
     * Set ilosc value.
     *
     * @param int $ilosc
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruType
     */
    public function setIlosc($ilosc = null)
    {
        // validation for constraint: int
        if (!is_null($ilosc) && !(is_int($ilosc) || ctype_digit($ilosc))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ilosc, true), gettype($ilosc)), __LINE__);
        }
        // validation for constraint: maxInclusive(9)
        if (!is_null($ilosc) && $ilosc > 9) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9', var_export($ilosc, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($ilosc) && $ilosc < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($ilosc, true)), __LINE__);
        }
        $this->ilosc = $ilosc;

        return $this;
    }

    /**
     * Get sposob value.
     *
     * @return string|null
     */
    public function getSposob()
    {
        return $this->sposob;
    }

    /**
     * Set sposob value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\SposobPrzekazaniaPotwierdzeniaOdbioruType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\SposobPrzekazaniaPotwierdzeniaOdbioruType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $sposob
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruType
     */
    public function setSposob($sposob = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\SposobPrzekazaniaPotwierdzeniaOdbioruType::valueIsValid($sposob)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\SposobPrzekazaniaPotwierdzeniaOdbioruType', is_array($sposob) ? implode(', ', $sposob) : var_export($sposob, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\SposobPrzekazaniaPotwierdzeniaOdbioruType::getValidValues())), __LINE__);
        }
        $this->sposob = $sposob;

        return $this;
    }
}
