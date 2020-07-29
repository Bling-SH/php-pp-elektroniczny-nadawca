<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for obszarAdresowyResponseType StructType.
 */
class ObszarAdresowyResponseType extends AbstractStructBase
{
    /**
     * The isObszarMiasto.
     *
     * @var bool
     */
    public $isObszarMiasto;
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - whiteSpace: collapse.
     *
     * @var string
     */
    public $guid;

    /**
     * Constructor method for obszarAdresowyResponseType.
     *
     * @uses ObszarAdresowyResponseType::setIsObszarMiasto()
     * @uses ObszarAdresowyResponseType::setGuid()
     *
     * @param bool   $isObszarMiasto
     * @param string $guid
     */
    public function __construct($isObszarMiasto = null, $guid = null)
    {
        $this
            ->setIsObszarMiasto($isObszarMiasto)
            ->setGuid($guid);
    }

    /**
     * Get isObszarMiasto value.
     *
     * @return bool|null
     */
    public function getIsObszarMiasto()
    {
        return $this->isObszarMiasto;
    }

    /**
     * Set isObszarMiasto value.
     *
     * @param bool $isObszarMiasto
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ObszarAdresowyResponseType
     */
    public function setIsObszarMiasto($isObszarMiasto = null)
    {
        // validation for constraint: boolean
        if (!is_null($isObszarMiasto) && !is_bool($isObszarMiasto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isObszarMiasto, true), gettype($isObszarMiasto)), __LINE__);
        }
        $this->isObszarMiasto = $isObszarMiasto;

        return $this;
    }

    /**
     * Get guid value.
     *
     * @return string|null
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Set guid value.
     *
     * @param string $guid
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ObszarAdresowyResponseType
     */
    public function setGuid($guid = null)
    {
        // validation for constraint: string
        if (!is_null($guid) && !is_string($guid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guid, true), gettype($guid)), __LINE__);
        }
        // validation for constraint: length(32)
        if (!is_null($guid) && 32 !== mb_strlen($guid)) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 32', mb_strlen($guid)), __LINE__);
        }
        $this->guid = $guid;

        return $this;
    }
}
