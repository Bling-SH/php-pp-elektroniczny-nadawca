<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getListaZgodEZwrotow StructType.
 */
class GetListaZgodEZwrotow extends AbstractStructBase
{
    /**
     * The status
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var string
     */
    public $status;

    /**
     * Constructor method for getListaZgodEZwrotow.
     *
     * @uses GetListaZgodEZwrotow::setStatus()
     *
     * @param string $status
     */
    public function __construct($status = null)
    {
        $this
            ->setStatus($status);
    }

    /**
     * Get status value.
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set status value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\StatusZgodyEZwrotNameType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\StatusZgodyEZwrotNameType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $status
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetListaZgodEZwrotow
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\StatusZgodyEZwrotNameType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\StatusZgodyEZwrotNameType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\StatusZgodyEZwrotNameType::getValidValues())), __LINE__);
        }
        $this->status = $status;

        return $this;
    }
}
