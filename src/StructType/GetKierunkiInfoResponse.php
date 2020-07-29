<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getKierunkiInfoResponse StructType.
 */
class GetKierunkiInfoResponse extends AbstractStructBase
{
    /**
     * The lastUpdate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var string
     */
    public $lastUpdate;
    /**
     * The usluga
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugiType[]
     */
    public $usluga;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType[]
     */
    public $error;

    /**
     * Constructor method for getKierunkiInfoResponse.
     *
     * @uses GetKierunkiInfoResponse::setLastUpdate()
     * @uses GetKierunkiInfoResponse::setUsluga()
     * @uses GetKierunkiInfoResponse::setError()
     *
     * @param string                                                           $lastUpdate
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugiType[] $usluga
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType[]  $error
     */
    public function __construct($lastUpdate = null, array $usluga = [], array $error = [])
    {
        $this
            ->setLastUpdate($lastUpdate)
            ->setUsluga($usluga)
            ->setError($error);
    }

    /**
     * Get lastUpdate value.
     *
     * @return string
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * Set lastUpdate value.
     *
     * @param string $lastUpdate
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetKierunkiInfoResponse
     */
    public function setLastUpdate($lastUpdate = null)
    {
        // validation for constraint: string
        if (!is_null($lastUpdate) && !is_string($lastUpdate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastUpdate, true), gettype($lastUpdate)), __LINE__);
        }
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * Get usluga value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugiType[]
     */
    public function getUsluga()
    {
        return $this->usluga;
    }

    /**
     * This method is responsible for validating the values passed to the setUsluga method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUsluga method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUslugaForArrayConstraintsFromSetUsluga(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getKierunkiInfoResponseUslugaItem) {
            // validation for constraint: itemType
            if (!$getKierunkiInfoResponseUslugaItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugiType) {
                $invalidValues[] = is_object($getKierunkiInfoResponseUslugaItem) ? get_class($getKierunkiInfoResponseUslugaItem) : sprintf('%s(%s)', gettype($getKierunkiInfoResponseUslugaItem), var_export($getKierunkiInfoResponseUslugaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The usluga property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugiType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set usluga value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugiType[] $usluga
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetKierunkiInfoResponse
     */
    public function setUsluga(array $usluga = [])
    {
        // validation for constraint: array
        if ('' !== ($uslugaArrayErrorMessage = self::validateUslugaForArrayConstraintsFromSetUsluga($usluga))) {
            throw new \InvalidArgumentException($uslugaArrayErrorMessage, __LINE__);
        }
        $this->usluga = $usluga;

        return $this;
    }

    /**
     * Add item to usluga value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetKierunkiInfoResponse
     */
    public function addToUsluga(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugiType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugiType) {
            throw new \InvalidArgumentException(sprintf('The usluga property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugiType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->usluga[] = $item;

        return $this;
    }

    /**
     * Get error value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType[]|null
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * This method is responsible for validating the values passed to the setError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setError method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorForArrayConstraintsFromSetError(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getKierunkiInfoResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getKierunkiInfoResponseErrorItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($getKierunkiInfoResponseErrorItem) ? get_class($getKierunkiInfoResponseErrorItem) : sprintf('%s(%s)', gettype($getKierunkiInfoResponseErrorItem), var_export($getKierunkiInfoResponseErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The error property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set error value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType[] $error
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetKierunkiInfoResponse
     */
    public function setError(array $error = [])
    {
        // validation for constraint: array
        if ('' !== ($errorArrayErrorMessage = self::validateErrorForArrayConstraintsFromSetError($error))) {
            throw new \InvalidArgumentException($errorArrayErrorMessage, __LINE__);
        }
        $this->error = $error;

        return $this;
    }

    /**
     * Add item to error value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetKierunkiInfoResponse
     */
    public function addToError(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType) {
            throw new \InvalidArgumentException(sprintf('The error property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->error[] = $item;

        return $this;
    }
}
