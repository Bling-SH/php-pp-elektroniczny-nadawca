<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAddressLabelResponse StructType.
 */
class GetAddressLabelResponse extends AbstractStructBase
{
    /**
     * The content
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddressLabelContent[]
     */
    public $content;
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
     * Constructor method for getAddressLabelResponse.
     *
     * @uses GetAddressLabelResponse::setContent()
     * @uses GetAddressLabelResponse::setError()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddressLabelContent[] $content
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType[]           $error
     */
    public function __construct(array $content = [], array $error = [])
    {
        $this
            ->setContent($content)
            ->setError($error);
    }

    /**
     * Get content value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddressLabelContent[]|null
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * This method is responsible for validating the values passed to the setContent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContent method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContentForArrayConstraintsFromSetContent(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAddressLabelResponseContentItem) {
            // validation for constraint: itemType
            if (!$getAddressLabelResponseContentItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddressLabelContent) {
                $invalidValues[] = is_object($getAddressLabelResponseContentItem) ? get_class($getAddressLabelResponseContentItem) : sprintf('%s(%s)', gettype($getAddressLabelResponseContentItem), var_export($getAddressLabelResponseContentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The content property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddressLabelContent, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set content value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddressLabelContent[] $content
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetAddressLabelResponse
     */
    public function setContent(array $content = [])
    {
        // validation for constraint: array
        if ('' !== ($contentArrayErrorMessage = self::validateContentForArrayConstraintsFromSetContent($content))) {
            throw new \InvalidArgumentException($contentArrayErrorMessage, __LINE__);
        }
        $this->content = $content;

        return $this;
    }

    /**
     * Add item to content value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetAddressLabelResponse
     */
    public function addToContent(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddressLabelContent $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddressLabelContent) {
            throw new \InvalidArgumentException(sprintf('The content property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddressLabelContent, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->content[] = $item;

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
        foreach ($values as $getAddressLabelResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getAddressLabelResponseErrorItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($getAddressLabelResponseErrorItem) ? get_class($getAddressLabelResponseErrorItem) : sprintf('%s(%s)', gettype($getAddressLabelResponseErrorItem), var_export($getAddressLabelResponseErrorItem, true));
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetAddressLabelResponse
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetAddressLabelResponse
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
