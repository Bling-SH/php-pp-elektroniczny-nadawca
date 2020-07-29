<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for moveShipmentsResponse StructType.
 */
class MoveShipmentsResponse extends AbstractStructBase
{
    /**
     * The notMovedGuid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - whiteSpace: collapse.
     *
     * @var string[]
     */
    public $notMovedGuid;
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
     * Constructor method for moveShipmentsResponse.
     *
     * @uses MoveShipmentsResponse::setNotMovedGuid()
     * @uses MoveShipmentsResponse::setError()
     *
     * @param string[]                                                        $notMovedGuid
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType[] $error
     */
    public function __construct(array $notMovedGuid = [], array $error = [])
    {
        $this
            ->setNotMovedGuid($notMovedGuid)
            ->setError($error);
    }

    /**
     * Get notMovedGuid value.
     *
     * @return string[]|null
     */
    public function getNotMovedGuid()
    {
        return $this->notMovedGuid;
    }

    /**
     * This method is responsible for validating the values passed to the setNotMovedGuid method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNotMovedGuid method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNotMovedGuidForArrayConstraintsFromSetNotMovedGuid(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $moveShipmentsResponseNotMovedGuidItem) {
            // validation for constraint: itemType
            if (!is_string($moveShipmentsResponseNotMovedGuidItem)) {
                $invalidValues[] = is_object($moveShipmentsResponseNotMovedGuidItem) ? get_class($moveShipmentsResponseNotMovedGuidItem) : sprintf('%s(%s)', gettype($moveShipmentsResponseNotMovedGuidItem), var_export($moveShipmentsResponseNotMovedGuidItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The notMovedGuid property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * This method is responsible for validating the value passed to the setNotMovedGuid method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNotMovedGuid method
     * This has to validate that the items contained by the array match the length constraint.
     *
     * @param mixed $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNotMovedGuidForLengthConstraintFromSetNotMovedGuid($values)
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $moveShipmentsResponseNotMovedGuidItem) {
            // validation for constraint: length(32)
            if (32 !== mb_strlen($moveShipmentsResponseNotMovedGuidItem)) {
                $invalidValues[] = var_export($moveShipmentsResponseNotMovedGuidItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be equal to 32', implode(', ', $invalidValues));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set notMovedGuid value.
     *
     * @throws \InvalidArgumentException
     *
     * @param string[] $notMovedGuid
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\MoveShipmentsResponse
     */
    public function setNotMovedGuid(array $notMovedGuid = [])
    {
        // validation for constraint: array
        if ('' !== ($notMovedGuidArrayErrorMessage = self::validateNotMovedGuidForArrayConstraintsFromSetNotMovedGuid($notMovedGuid))) {
            throw new \InvalidArgumentException($notMovedGuidArrayErrorMessage, __LINE__);
        }
        // validation for constraint: length(32)
        if ('' !== ($notMovedGuidLengthErrorMessage = self::validateNotMovedGuidForLengthConstraintFromSetNotMovedGuid($notMovedGuid))) {
            throw new \InvalidArgumentException($notMovedGuidLengthErrorMessage, __LINE__);
        }
        $this->notMovedGuid = $notMovedGuid;

        return $this;
    }

    /**
     * Add item to notMovedGuid value.
     *
     * @throws \InvalidArgumentException
     *
     * @param string $item
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\MoveShipmentsResponse
     */
    public function addToNotMovedGuid($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The notMovedGuid property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: length(32)
        if (32 !== mb_strlen($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 32', mb_strlen($item)), __LINE__);
        }
        $this->notMovedGuid[] = $item;

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
        foreach ($values as $moveShipmentsResponseErrorItem) {
            // validation for constraint: itemType
            if (!$moveShipmentsResponseErrorItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($moveShipmentsResponseErrorItem) ? get_class($moveShipmentsResponseErrorItem) : sprintf('%s(%s)', gettype($moveShipmentsResponseErrorItem), var_export($moveShipmentsResponseErrorItem, true));
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\MoveShipmentsResponse
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\MoveShipmentsResponse
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
