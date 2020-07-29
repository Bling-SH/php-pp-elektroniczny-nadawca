<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for downloadIWDContentResponse StructType.
 */
class DownloadIWDContentResponse extends AbstractStructBase
{
    /**
     * The IWDContent
     * Meta information extracted from the WSDL
     * - minOccurs: 1.
     *
     * @var string
     */
    public $IWDContent;
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
     * Constructor method for downloadIWDContentResponse.
     *
     * @uses DownloadIWDContentResponse::setIWDContent()
     * @uses DownloadIWDContentResponse::setError()
     *
     * @param string                                                          $iWDContent
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct($iWDContent = null, array $error = [])
    {
        $this
            ->setIWDContent($iWDContent)
            ->setError($error);
    }

    /**
     * Get IWDContent value.
     *
     * @return string
     */
    public function getIWDContent()
    {
        return $this->IWDContent;
    }

    /**
     * Set IWDContent value.
     *
     * @param string $iWDContent
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DownloadIWDContentResponse
     */
    public function setIWDContent($iWDContent = null)
    {
        // validation for constraint: string
        if (!is_null($iWDContent) && !is_string($iWDContent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iWDContent, true), gettype($iWDContent)), __LINE__);
        }
        $this->IWDContent = $iWDContent;

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
        foreach ($values as $downloadIWDContentResponseErrorItem) {
            // validation for constraint: itemType
            if (!$downloadIWDContentResponseErrorItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($downloadIWDContentResponseErrorItem) ? get_class($downloadIWDContentResponseErrorItem) : sprintf('%s(%s)', gettype($downloadIWDContentResponseErrorItem), var_export($downloadIWDContentResponseErrorItem, true));
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DownloadIWDContentResponse
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DownloadIWDContentResponse
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
