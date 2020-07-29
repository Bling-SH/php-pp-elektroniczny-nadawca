<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for setJednostkaOrganizacyjnaResponse StructType.
 */
class SetJednostkaOrganizacyjnaResponse extends AbstractStructBase
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
     * The jednostkaOrganizacyjna
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[]
     */
    public $jednostkaOrganizacyjna;

    /**
     * Constructor method for setJednostkaOrganizacyjnaResponse.
     *
     * @uses SetJednostkaOrganizacyjnaResponse::setError()
     * @uses SetJednostkaOrganizacyjnaResponse::setJednostkaOrganizacyjna()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType[]                  $error
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[] $jednostkaOrganizacyjna
     */
    public function __construct(array $error = [], array $jednostkaOrganizacyjna = [])
    {
        $this
            ->setError($error)
            ->setJednostkaOrganizacyjna($jednostkaOrganizacyjna);
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
        foreach ($values as $setJednostkaOrganizacyjnaResponseErrorItem) {
            // validation for constraint: itemType
            if (!$setJednostkaOrganizacyjnaResponseErrorItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($setJednostkaOrganizacyjnaResponseErrorItem) ? get_class($setJednostkaOrganizacyjnaResponseErrorItem) : sprintf('%s(%s)', gettype($setJednostkaOrganizacyjnaResponseErrorItem), var_export($setJednostkaOrganizacyjnaResponseErrorItem, true));
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SetJednostkaOrganizacyjnaResponse
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SetJednostkaOrganizacyjnaResponse
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
     * Get jednostkaOrganizacyjna value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[]|null
     */
    public function getJednostkaOrganizacyjna()
    {
        return $this->jednostkaOrganizacyjna;
    }

    /**
     * This method is responsible for validating the values passed to the setJednostkaOrganizacyjna method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJednostkaOrganizacyjna method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJednostkaOrganizacyjnaForArrayConstraintsFromSetJednostkaOrganizacyjna(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $setJednostkaOrganizacyjnaResponseJednostkaOrganizacyjnaItem) {
            // validation for constraint: itemType
            if (!$setJednostkaOrganizacyjnaResponseJednostkaOrganizacyjnaItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType) {
                $invalidValues[] = is_object($setJednostkaOrganizacyjnaResponseJednostkaOrganizacyjnaItem) ? get_class($setJednostkaOrganizacyjnaResponseJednostkaOrganizacyjnaItem) : sprintf('%s(%s)', gettype($setJednostkaOrganizacyjnaResponseJednostkaOrganizacyjnaItem), var_export($setJednostkaOrganizacyjnaResponseJednostkaOrganizacyjnaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The jednostkaOrganizacyjna property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set jednostkaOrganizacyjna value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[] $jednostkaOrganizacyjna
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SetJednostkaOrganizacyjnaResponse
     */
    public function setJednostkaOrganizacyjna(array $jednostkaOrganizacyjna = [])
    {
        // validation for constraint: array
        if ('' !== ($jednostkaOrganizacyjnaArrayErrorMessage = self::validateJednostkaOrganizacyjnaForArrayConstraintsFromSetJednostkaOrganizacyjna($jednostkaOrganizacyjna))) {
            throw new \InvalidArgumentException($jednostkaOrganizacyjnaArrayErrorMessage, __LINE__);
        }
        $this->jednostkaOrganizacyjna = $jednostkaOrganizacyjna;

        return $this;
    }

    /**
     * Add item to jednostkaOrganizacyjna value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SetJednostkaOrganizacyjnaResponse
     */
    public function addToJednostkaOrganizacyjna(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType) {
            throw new \InvalidArgumentException(sprintf('The jednostkaOrganizacyjna property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->jednostkaOrganizacyjna[] = $item;

        return $this;
    }
}
