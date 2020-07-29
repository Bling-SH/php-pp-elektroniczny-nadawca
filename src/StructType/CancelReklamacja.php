<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cancelReklamacja StructType.
 */
class CancelReklamacja extends AbstractStructBase
{
    /**
     * The idRelkamacja
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var int
     */
    public $idRelkamacja;

    /**
     * Constructor method for cancelReklamacja.
     *
     * @uses CancelReklamacja::setIdRelkamacja()
     *
     * @param int $idRelkamacja
     */
    public function __construct($idRelkamacja = null)
    {
        $this
            ->setIdRelkamacja($idRelkamacja);
    }

    /**
     * Get idRelkamacja value.
     *
     * @return int
     */
    public function getIdRelkamacja()
    {
        return $this->idRelkamacja;
    }

    /**
     * Set idRelkamacja value.
     *
     * @param int $idRelkamacja
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\CancelReklamacja
     */
    public function setIdRelkamacja($idRelkamacja = null)
    {
        // validation for constraint: int
        if (!is_null($idRelkamacja) && !(is_int($idRelkamacja) || ctype_digit($idRelkamacja))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idRelkamacja, true), gettype($idRelkamacja)), __LINE__);
        }
        $this->idRelkamacja = $idRelkamacja;

        return $this;
    }
}
