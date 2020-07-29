<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getWplatyCKPResponse StructType.
 */
class GetWplatyCKPResponse extends AbstractStructBase
{
    /**
     * The wplaty
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\WplataCKPType[]
     */
    public $wplaty;
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
     * Constructor method for getWplatyCKPResponse.
     *
     * @uses GetWplatyCKPResponse::setWplaty()
     * @uses GetWplatyCKPResponse::setError()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\WplataCKPType[] $wplaty
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType[]     $error
     */
    public function __construct(array $wplaty = [], array $error = [])
    {
        $this
            ->setWplaty($wplaty)
            ->setError($error);
    }

    /**
     * Get wplaty value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\WplataCKPType[]|null
     */
    public function getWplaty()
    {
        return $this->wplaty;
    }

    /**
     * This method is responsible for validating the values passed to the setWplaty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWplaty method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWplatyForArrayConstraintsFromSetWplaty(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getWplatyCKPResponseWplatyItem) {
            // validation for constraint: itemType
            if (!$getWplatyCKPResponseWplatyItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\WplataCKPType) {
                $invalidValues[] = is_object($getWplatyCKPResponseWplatyItem) ? get_class($getWplatyCKPResponseWplatyItem) : sprintf('%s(%s)', gettype($getWplatyCKPResponseWplatyItem), var_export($getWplatyCKPResponseWplatyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The wplaty property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\WplataCKPType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set wplaty value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\WplataCKPType[] $wplaty
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetWplatyCKPResponse
     */
    public function setWplaty(array $wplaty = [])
    {
        // validation for constraint: array
        if ('' !== ($wplatyArrayErrorMessage = self::validateWplatyForArrayConstraintsFromSetWplaty($wplaty))) {
            throw new \InvalidArgumentException($wplatyArrayErrorMessage, __LINE__);
        }
        $this->wplaty = $wplaty;

        return $this;
    }

    /**
     * Add item to wplaty value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetWplatyCKPResponse
     */
    public function addToWplaty(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\WplataCKPType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\WplataCKPType) {
            throw new \InvalidArgumentException(sprintf('The wplaty property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\WplataCKPType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->wplaty[] = $item;

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
        foreach ($values as $getWplatyCKPResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getWplatyCKPResponseErrorItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($getWplatyCKPResponseErrorItem) ? get_class($getWplatyCKPResponseErrorItem) : sprintf('%s(%s)', gettype($getWplatyCKPResponseErrorItem), var_export($getWplatyCKPResponseErrorItem, true));
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetWplatyCKPResponse
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetWplatyCKPResponse
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
