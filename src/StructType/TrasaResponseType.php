<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trasaResponseType StructType.
 */
class TrasaResponseType extends AbstractStructBase
{
    /**
     * The isMiejscowa.
     *
     * @var bool
     */
    public $isMiejscowa;
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
     * Constructor method for trasaResponseType.
     *
     * @uses TrasaResponseType::setIsMiejscowa()
     * @uses TrasaResponseType::setGuid()
     *
     * @param bool   $isMiejscowa
     * @param string $guid
     */
    public function __construct($isMiejscowa = null, $guid = null)
    {
        $this
            ->setIsMiejscowa($isMiejscowa)
            ->setGuid($guid);
    }

    /**
     * Get isMiejscowa value.
     *
     * @return bool|null
     */
    public function getIsMiejscowa()
    {
        return $this->isMiejscowa;
    }

    /**
     * Set isMiejscowa value.
     *
     * @param bool $isMiejscowa
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\TrasaResponseType
     */
    public function setIsMiejscowa($isMiejscowa = null)
    {
        // validation for constraint: boolean
        if (!is_null($isMiejscowa) && !is_bool($isMiejscowa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMiejscowa, true), gettype($isMiejscowa)), __LINE__);
        }
        $this->isMiejscowa = $isMiejscowa;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\TrasaResponseType
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
