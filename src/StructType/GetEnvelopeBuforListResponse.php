<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEnvelopeBuforListResponse StructType.
 */
class GetEnvelopeBuforListResponse extends AbstractStructBase
{
    /**
     * The bufor
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType[]
     */
    public $bufor;
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
     * Constructor method for getEnvelopeBuforListResponse.
     *
     * @uses GetEnvelopeBuforListResponse::setBufor()
     * @uses GetEnvelopeBuforListResponse::setError()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType[] $bufor
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(array $bufor = [], array $error = [])
    {
        $this
            ->setBufor($bufor)
            ->setError($error);
    }

    /**
     * Get bufor value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType[]|null
     */
    public function getBufor()
    {
        return $this->bufor;
    }

    /**
     * This method is responsible for validating the values passed to the setBufor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBufor method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBuforForArrayConstraintsFromSetBufor(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEnvelopeBuforListResponseBuforItem) {
            // validation for constraint: itemType
            if (!$getEnvelopeBuforListResponseBuforItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType) {
                $invalidValues[] = is_object($getEnvelopeBuforListResponseBuforItem) ? get_class($getEnvelopeBuforListResponseBuforItem) : sprintf('%s(%s)', gettype($getEnvelopeBuforListResponseBuforItem), var_export($getEnvelopeBuforListResponseBuforItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The bufor property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set bufor value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType[] $bufor
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeBuforListResponse
     */
    public function setBufor(array $bufor = [])
    {
        // validation for constraint: array
        if ('' !== ($buforArrayErrorMessage = self::validateBuforForArrayConstraintsFromSetBufor($bufor))) {
            throw new \InvalidArgumentException($buforArrayErrorMessage, __LINE__);
        }
        $this->bufor = $bufor;

        return $this;
    }

    /**
     * Add item to bufor value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeBuforListResponse
     */
    public function addToBufor(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType) {
            throw new \InvalidArgumentException(sprintf('The bufor property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->bufor[] = $item;

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
        foreach ($values as $getEnvelopeBuforListResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getEnvelopeBuforListResponseErrorItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($getEnvelopeBuforListResponseErrorItem) ? get_class($getEnvelopeBuforListResponseErrorItem) : sprintf('%s(%s)', gettype($getEnvelopeBuforListResponseErrorItem), var_export($getEnvelopeBuforListResponseErrorItem, true));
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeBuforListResponse
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeBuforListResponse
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
