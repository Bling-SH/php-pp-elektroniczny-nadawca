<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createEnvelopeBuforResponse StructType.
 */
class CreateEnvelopeBuforResponse extends AbstractStructBase
{
    /**
     * The createdBufor
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType[]
     */
    public $createdBufor;
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
     * Constructor method for createEnvelopeBuforResponse.
     *
     * @uses CreateEnvelopeBuforResponse::setCreatedBufor()
     * @uses CreateEnvelopeBuforResponse::setError()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType[] $createdBufor
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(array $createdBufor = [], array $error = [])
    {
        $this
            ->setCreatedBufor($createdBufor)
            ->setError($error);
    }

    /**
     * Get createdBufor value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType[]|null
     */
    public function getCreatedBufor()
    {
        return $this->createdBufor;
    }

    /**
     * This method is responsible for validating the values passed to the setCreatedBufor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreatedBufor method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCreatedBuforForArrayConstraintsFromSetCreatedBufor(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $createEnvelopeBuforResponseCreatedBuforItem) {
            // validation for constraint: itemType
            if (!$createEnvelopeBuforResponseCreatedBuforItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType) {
                $invalidValues[] = is_object($createEnvelopeBuforResponseCreatedBuforItem) ? get_class($createEnvelopeBuforResponseCreatedBuforItem) : sprintf('%s(%s)', gettype($createEnvelopeBuforResponseCreatedBuforItem), var_export($createEnvelopeBuforResponseCreatedBuforItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The createdBufor property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set createdBufor value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType[] $createdBufor
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\CreateEnvelopeBuforResponse
     */
    public function setCreatedBufor(array $createdBufor = [])
    {
        // validation for constraint: array
        if ('' !== ($createdBuforArrayErrorMessage = self::validateCreatedBuforForArrayConstraintsFromSetCreatedBufor($createdBufor))) {
            throw new \InvalidArgumentException($createdBuforArrayErrorMessage, __LINE__);
        }
        $this->createdBufor = $createdBufor;

        return $this;
    }

    /**
     * Add item to createdBufor value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\CreateEnvelopeBuforResponse
     */
    public function addToCreatedBufor(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType) {
            throw new \InvalidArgumentException(sprintf('The createdBufor property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->createdBufor[] = $item;

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
        foreach ($values as $createEnvelopeBuforResponseErrorItem) {
            // validation for constraint: itemType
            if (!$createEnvelopeBuforResponseErrorItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($createEnvelopeBuforResponseErrorItem) ? get_class($createEnvelopeBuforResponseErrorItem) : sprintf('%s(%s)', gettype($createEnvelopeBuforResponseErrorItem), var_export($createEnvelopeBuforResponseErrorItem, true));
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\CreateEnvelopeBuforResponse
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\CreateEnvelopeBuforResponse
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
