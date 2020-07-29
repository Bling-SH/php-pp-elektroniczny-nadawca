<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trasaRequestType StructType.
 */
class TrasaRequestType extends AbstractStructBase
{
    /**
     * The fromUrzadNadania
     * Meta information extracted from the WSDL
     * - base: xsd:int.
     *
     * @var int
     */
    public $fromUrzadNadania;
    /**
     * The toKodPocztowy
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 10
     * - minLength: 0
     * - whiteSpace: collapse.
     *
     * @var string
     */
    public $toKodPocztowy;
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
     * Constructor method for trasaRequestType.
     *
     * @uses TrasaRequestType::setFromUrzadNadania()
     * @uses TrasaRequestType::setToKodPocztowy()
     * @uses TrasaRequestType::setGuid()
     *
     * @param int    $fromUrzadNadania
     * @param string $toKodPocztowy
     * @param string $guid
     */
    public function __construct($fromUrzadNadania = null, $toKodPocztowy = null, $guid = null)
    {
        $this
            ->setFromUrzadNadania($fromUrzadNadania)
            ->setToKodPocztowy($toKodPocztowy)
            ->setGuid($guid);
    }

    /**
     * Get fromUrzadNadania value.
     *
     * @return int|null
     */
    public function getFromUrzadNadania()
    {
        return $this->fromUrzadNadania;
    }

    /**
     * Set fromUrzadNadania value.
     *
     * @param int $fromUrzadNadania
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\TrasaRequestType
     */
    public function setFromUrzadNadania($fromUrzadNadania = null)
    {
        // validation for constraint: int
        if (!is_null($fromUrzadNadania) && !(is_int($fromUrzadNadania) || ctype_digit($fromUrzadNadania))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fromUrzadNadania, true), gettype($fromUrzadNadania)), __LINE__);
        }
        $this->fromUrzadNadania = $fromUrzadNadania;

        return $this;
    }

    /**
     * Get toKodPocztowy value.
     *
     * @return string|null
     */
    public function getToKodPocztowy()
    {
        return $this->toKodPocztowy;
    }

    /**
     * Set toKodPocztowy value.
     *
     * @param string $toKodPocztowy
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\TrasaRequestType
     */
    public function setToKodPocztowy($toKodPocztowy = null)
    {
        // validation for constraint: string
        if (!is_null($toKodPocztowy) && !is_string($toKodPocztowy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toKodPocztowy, true), gettype($toKodPocztowy)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($toKodPocztowy) && mb_strlen($toKodPocztowy) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen($toKodPocztowy)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($toKodPocztowy) && mb_strlen($toKodPocztowy) < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen($toKodPocztowy)), __LINE__);
        }
        $this->toKodPocztowy = $toKodPocztowy;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\TrasaRequestType
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
