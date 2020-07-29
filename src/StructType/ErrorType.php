<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for errorType StructType.
 */
class ErrorType extends AbstractStructBase
{
    /**
     * The errorNumber
     * Meta information extracted from the WSDL
     * - default: 0
     * - use: optional.
     *
     * @var int
     */
    public $errorNumber;
    /**
     * The errorDesc
     * Meta information extracted from the WSDL
     * - use: optional.
     *
     * @var string
     */
    public $errorDesc;
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
     * Constructor method for errorType.
     *
     * @uses ErrorType::setErrorNumber()
     * @uses ErrorType::setErrorDesc()
     * @uses ErrorType::setGuid()
     *
     * @param int    $errorNumber
     * @param string $errorDesc
     * @param string $guid
     */
    public function __construct($errorNumber = 0, $errorDesc = null, $guid = null)
    {
        $this
            ->setErrorNumber($errorNumber)
            ->setErrorDesc($errorDesc)
            ->setGuid($guid);
    }

    /**
     * Get errorNumber value.
     *
     * @return int|null
     */
    public function getErrorNumber()
    {
        return $this->errorNumber;
    }

    /**
     * Set errorNumber value.
     *
     * @param int $errorNumber
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType
     */
    public function setErrorNumber($errorNumber = 0)
    {
        // validation for constraint: int
        if (!is_null($errorNumber) && !(is_int($errorNumber) || ctype_digit($errorNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorNumber, true), gettype($errorNumber)), __LINE__);
        }
        $this->errorNumber = $errorNumber;

        return $this;
    }

    /**
     * Get errorDesc value.
     *
     * @return string|null
     */
    public function getErrorDesc()
    {
        return $this->errorDesc;
    }

    /**
     * Set errorDesc value.
     *
     * @param string $errorDesc
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType
     */
    public function setErrorDesc($errorDesc = null)
    {
        // validation for constraint: string
        if (!is_null($errorDesc) && !is_string($errorDesc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorDesc, true), gettype($errorDesc)), __LINE__);
        }
        $this->errorDesc = $errorDesc;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType
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
