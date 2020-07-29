<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEnvelopeBuforResponse StructType.
 */
class GetEnvelopeBuforResponse extends AbstractStructBase
{
    /**
     * The przesylka
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType[]
     */
    public $przesylka;
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
     * Constructor method for getEnvelopeBuforResponse.
     *
     * @uses GetEnvelopeBuforResponse::setPrzesylka()
     * @uses GetEnvelopeBuforResponse::setError()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType[] $przesylka
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType[]     $error
     */
    public function __construct(array $przesylka = [], array $error = [])
    {
        $this
            ->setPrzesylka($przesylka)
            ->setError($error);
    }

    /**
     * Get przesylka value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType[]|null
     */
    public function getPrzesylka()
    {
        return $this->przesylka;
    }

    /**
     * This method is responsible for validating the values passed to the setPrzesylka method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrzesylka method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrzesylkaForArrayConstraintsFromSetPrzesylka(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEnvelopeBuforResponsePrzesylkaItem) {
            // validation for constraint: itemType
            if (!$getEnvelopeBuforResponsePrzesylkaItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType) {
                $invalidValues[] = is_object($getEnvelopeBuforResponsePrzesylkaItem) ? get_class($getEnvelopeBuforResponsePrzesylkaItem) : sprintf('%s(%s)', gettype($getEnvelopeBuforResponsePrzesylkaItem), var_export($getEnvelopeBuforResponsePrzesylkaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The przesylka property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set przesylka value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType[] $przesylka
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeBuforResponse
     */
    public function setPrzesylka(array $przesylka = [])
    {
        // validation for constraint: array
        if ('' !== ($przesylkaArrayErrorMessage = self::validatePrzesylkaForArrayConstraintsFromSetPrzesylka($przesylka))) {
            throw new \InvalidArgumentException($przesylkaArrayErrorMessage, __LINE__);
        }
        $this->przesylka = $przesylka;

        return $this;
    }

    /**
     * Add item to przesylka value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeBuforResponse
     */
    public function addToPrzesylka(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType) {
            throw new \InvalidArgumentException(sprintf('The przesylka property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->przesylka[] = $item;

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
        foreach ($values as $getEnvelopeBuforResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getEnvelopeBuforResponseErrorItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($getEnvelopeBuforResponseErrorItem) ? get_class($getEnvelopeBuforResponseErrorItem) : sprintf('%s(%s)', gettype($getEnvelopeBuforResponseErrorItem), var_export($getEnvelopeBuforResponseErrorItem, true));
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeBuforResponse
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeBuforResponse
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
