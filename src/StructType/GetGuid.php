<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getGuid StructType.
 */
class GetGuid extends AbstractStructBase
{
    /**
     * The ilosc.
     *
     * @var int
     */
    public $ilosc;

    /**
     * Constructor method for getGuid.
     *
     * @uses GetGuid::setIlosc()
     *
     * @param int $ilosc
     */
    public function __construct($ilosc = null)
    {
        $this
            ->setIlosc($ilosc);
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetGuid
     */
    public function setIlosc($ilosc = null)
    {
        // validation for constraint: int
        if (!is_null($ilosc) && !(is_int($ilosc) || ctype_digit($ilosc))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ilosc, true), gettype($ilosc)), __LINE__);
        }
        $this->ilosc = $ilosc;

        return $this;
    }
}
