<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getFirmowaPocztaBookResponse StructType.
 */
class GetFirmowaPocztaBookResponse extends AbstractStructBase
{
    /**
     * The pdfContent.
     *
     * @var string
     */
    public $pdfContent;
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
     * Constructor method for getFirmowaPocztaBookResponse.
     *
     * @uses GetFirmowaPocztaBookResponse::setPdfContent()
     * @uses GetFirmowaPocztaBookResponse::setError()
     *
     * @param string                                                          $pdfContent
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct($pdfContent = null, array $error = [])
    {
        $this
            ->setPdfContent($pdfContent)
            ->setError($error);
    }

    /**
     * Get pdfContent value.
     *
     * @return string|null
     */
    public function getPdfContent()
    {
        return $this->pdfContent;
    }

    /**
     * Set pdfContent value.
     *
     * @param string $pdfContent
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetFirmowaPocztaBookResponse
     */
    public function setPdfContent($pdfContent = null)
    {
        // validation for constraint: string
        if (!is_null($pdfContent) && !is_string($pdfContent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pdfContent, true), gettype($pdfContent)), __LINE__);
        }
        $this->pdfContent = $pdfContent;

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
        foreach ($values as $getFirmowaPocztaBookResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getFirmowaPocztaBookResponseErrorItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($getFirmowaPocztaBookResponseErrorItem) ? get_class($getFirmowaPocztaBookResponseErrorItem) : sprintf('%s(%s)', gettype($getFirmowaPocztaBookResponseErrorItem), var_export($getFirmowaPocztaBookResponseErrorItem, true));
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetFirmowaPocztaBookResponse
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetFirmowaPocztaBookResponse
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
