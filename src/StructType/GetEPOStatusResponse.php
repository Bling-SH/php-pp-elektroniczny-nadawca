<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEPOStatusResponse StructType.
 */
class GetEPOStatusResponse extends AbstractStructBase
{
    /**
     * The epo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaEPOType[]
     */
    public $epo;
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
     * Constructor method for getEPOStatusResponse.
     *
     * @uses GetEPOStatusResponse::setEpo()
     * @uses GetEPOStatusResponse::setError()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaEPOType[] $epo
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType[]        $error
     */
    public function __construct(array $epo = [], array $error = [])
    {
        $this
            ->setEpo($epo)
            ->setError($error);
    }

    /**
     * Get epo value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaEPOType[]|null
     */
    public function getEpo()
    {
        return $this->epo;
    }

    /**
     * This method is responsible for validating the values passed to the setEpo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEpo method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEpoForArrayConstraintsFromSetEpo(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEPOStatusResponseEpoItem) {
            // validation for constraint: itemType
            if (!$getEPOStatusResponseEpoItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaEPOType) {
                $invalidValues[] = is_object($getEPOStatusResponseEpoItem) ? get_class($getEPOStatusResponseEpoItem) : sprintf('%s(%s)', gettype($getEPOStatusResponseEpoItem), var_export($getEPOStatusResponseEpoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The epo property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaEPOType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set epo value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaEPOType[] $epo
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEPOStatusResponse
     */
    public function setEpo(array $epo = [])
    {
        // validation for constraint: array
        if ('' !== ($epoArrayErrorMessage = self::validateEpoForArrayConstraintsFromSetEpo($epo))) {
            throw new \InvalidArgumentException($epoArrayErrorMessage, __LINE__);
        }
        $this->epo = $epo;

        return $this;
    }

    /**
     * Add item to epo value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEPOStatusResponse
     */
    public function addToEpo(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaEPOType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaEPOType) {
            throw new \InvalidArgumentException(sprintf('The epo property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaEPOType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->epo[] = $item;

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
        foreach ($values as $getEPOStatusResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getEPOStatusResponseErrorItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($getEPOStatusResponseErrorItem) ? get_class($getEPOStatusResponseErrorItem) : sprintf('%s(%s)', gettype($getEPOStatusResponseErrorItem), var_export($getEPOStatusResponseErrorItem, true));
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEPOStatusResponse
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEPOStatusResponse
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
