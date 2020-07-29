<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addOdwolanieDoReklamacjiResponse StructType.
 */
class AddOdwolanieDoReklamacjiResponse extends AbstractStructBase
{
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
     * The reklamacjaInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 500
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamacjaInfoType[]
     */
    public $reklamacjaInfo;

    /**
     * Constructor method for addOdwolanieDoReklamacjiResponse.
     *
     * @uses AddOdwolanieDoReklamacjiResponse::setError()
     * @uses AddOdwolanieDoReklamacjiResponse::setReklamacjaInfo()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType[]          $error
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamacjaInfoType[] $reklamacjaInfo
     */
    public function __construct(array $error = [], array $reklamacjaInfo = [])
    {
        $this
            ->setError($error)
            ->setReklamacjaInfo($reklamacjaInfo);
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
        foreach ($values as $addOdwolanieDoReklamacjiResponseErrorItem) {
            // validation for constraint: itemType
            if (!$addOdwolanieDoReklamacjiResponseErrorItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($addOdwolanieDoReklamacjiResponseErrorItem) ? get_class($addOdwolanieDoReklamacjiResponseErrorItem) : sprintf('%s(%s)', gettype($addOdwolanieDoReklamacjiResponseErrorItem), var_export($addOdwolanieDoReklamacjiResponseErrorItem, true));
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddOdwolanieDoReklamacjiResponse
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddOdwolanieDoReklamacjiResponse
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

    /**
     * Get reklamacjaInfo value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamacjaInfoType[]|null
     */
    public function getReklamacjaInfo()
    {
        return $this->reklamacjaInfo;
    }

    /**
     * This method is responsible for validating the values passed to the setReklamacjaInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReklamacjaInfo method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReklamacjaInfoForArrayConstraintsFromSetReklamacjaInfo(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $addOdwolanieDoReklamacjiResponseReklamacjaInfoItem) {
            // validation for constraint: itemType
            if (!$addOdwolanieDoReklamacjiResponseReklamacjaInfoItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamacjaInfoType) {
                $invalidValues[] = is_object($addOdwolanieDoReklamacjiResponseReklamacjaInfoItem) ? get_class($addOdwolanieDoReklamacjiResponseReklamacjaInfoItem) : sprintf('%s(%s)', gettype($addOdwolanieDoReklamacjiResponseReklamacjaInfoItem), var_export($addOdwolanieDoReklamacjiResponseReklamacjaInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The reklamacjaInfo property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamacjaInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set reklamacjaInfo value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamacjaInfoType[] $reklamacjaInfo
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddOdwolanieDoReklamacjiResponse
     */
    public function setReklamacjaInfo(array $reklamacjaInfo = [])
    {
        // validation for constraint: array
        if ('' !== ($reklamacjaInfoArrayErrorMessage = self::validateReklamacjaInfoForArrayConstraintsFromSetReklamacjaInfo($reklamacjaInfo))) {
            throw new \InvalidArgumentException($reklamacjaInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($reklamacjaInfo) && count($reklamacjaInfo) > 500) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 500', count($reklamacjaInfo)), __LINE__);
        }
        $this->reklamacjaInfo = $reklamacjaInfo;

        return $this;
    }

    /**
     * Add item to reklamacjaInfo value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddOdwolanieDoReklamacjiResponse
     */
    public function addToReklamacjaInfo(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamacjaInfoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamacjaInfoType) {
            throw new \InvalidArgumentException(sprintf('The reklamacjaInfo property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamacjaInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($this->reklamacjaInfo) && count($this->reklamacjaInfo) >= 500) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 500', count($this->reklamacjaInfo)), __LINE__);
        }
        $this->reklamacjaInfo[] = $item;

        return $this;
    }
}
