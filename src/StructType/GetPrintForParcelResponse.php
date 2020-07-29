<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPrintForParcelResponse StructType.
 */
class GetPrintForParcelResponse extends AbstractStructBase
{
    /**
     * The printResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrintResultType[]
     */
    public $printResult;
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
     * Constructor method for getPrintForParcelResponse.
     *
     * @uses GetPrintForParcelResponse::setPrintResult()
     * @uses GetPrintForParcelResponse::setError()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrintResultType[] $printResult
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType[]       $error
     */
    public function __construct(array $printResult = [], array $error = [])
    {
        $this
            ->setPrintResult($printResult)
            ->setError($error);
    }

    /**
     * Get printResult value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrintResultType[]|null
     */
    public function getPrintResult()
    {
        return $this->printResult;
    }

    /**
     * This method is responsible for validating the values passed to the setPrintResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrintResult method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrintResultForArrayConstraintsFromSetPrintResult(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPrintForParcelResponsePrintResultItem) {
            // validation for constraint: itemType
            if (!$getPrintForParcelResponsePrintResultItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrintResultType) {
                $invalidValues[] = is_object($getPrintForParcelResponsePrintResultItem) ? get_class($getPrintForParcelResponsePrintResultItem) : sprintf('%s(%s)', gettype($getPrintForParcelResponsePrintResultItem), var_export($getPrintForParcelResponsePrintResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The printResult property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrintResultType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set printResult value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrintResultType[] $printResult
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetPrintForParcelResponse
     */
    public function setPrintResult(array $printResult = [])
    {
        // validation for constraint: array
        if ('' !== ($printResultArrayErrorMessage = self::validatePrintResultForArrayConstraintsFromSetPrintResult($printResult))) {
            throw new \InvalidArgumentException($printResultArrayErrorMessage, __LINE__);
        }
        $this->printResult = $printResult;

        return $this;
    }

    /**
     * Add item to printResult value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetPrintForParcelResponse
     */
    public function addToPrintResult(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrintResultType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrintResultType) {
            throw new \InvalidArgumentException(sprintf('The printResult property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrintResultType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->printResult[] = $item;

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
        foreach ($values as $getPrintForParcelResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getPrintForParcelResponseErrorItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($getPrintForParcelResponseErrorItem) ? get_class($getPrintForParcelResponseErrorItem) : sprintf('%s(%s)', gettype($getPrintForParcelResponseErrorItem), var_export($getPrintForParcelResponseErrorItem, true));
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetPrintForParcelResponse
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetPrintForParcelResponse
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
