<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addShipmentResponseItemType StructType.
 */
class AddShipmentResponseItemType extends AbstractStructBase
{
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - use: required
     * - whiteSpace: collapse.
     *
     * @var string
     */
    public $guid;
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
     * The numerNadania
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minLength: 13.
     *
     * @var string
     */
    public $numerNadania;
    /**
     * The numerTransakcjiOdbioru.
     *
     * @var string
     */
    public $numerTransakcjiOdbioru;

    /**
     * Constructor method for addShipmentResponseItemType.
     *
     * @uses AddShipmentResponseItemType::setGuid()
     * @uses AddShipmentResponseItemType::setError()
     * @uses AddShipmentResponseItemType::setNumerNadania()
     * @uses AddShipmentResponseItemType::setNumerTransakcjiOdbioru()
     *
     * @param string                                                          $guid
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType[] $error
     * @param string                                                          $numerNadania
     * @param string                                                          $numerTransakcjiOdbioru
     */
    public function __construct($guid = null, array $error = [], $numerNadania = null, $numerTransakcjiOdbioru = null)
    {
        $this
            ->setGuid($guid)
            ->setError($error)
            ->setNumerNadania($numerNadania)
            ->setNumerTransakcjiOdbioru($numerTransakcjiOdbioru);
    }

    /**
     * Get guid value.
     *
     * @return string
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Set guid value.
     *
     * @param string $guid
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddShipmentResponseItemType
     */
    public function setGuid($guid = null)
    {
        // validation for constraint: string
        if (!is_null($guid) && !is_string($guid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guid, true), gettype($guid)), __LINE__);
        }
        // validation for constraint: length(32)
        if (!is_null($guid) && 32 !== mb_strlen($guid)) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 32', mb_strlen($guid)), __LINE__);
        }
        $this->guid = $guid;

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
        foreach ($values as $addShipmentResponseItemTypeErrorItem) {
            // validation for constraint: itemType
            if (!$addShipmentResponseItemTypeErrorItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($addShipmentResponseItemTypeErrorItem) ? get_class($addShipmentResponseItemTypeErrorItem) : sprintf('%s(%s)', gettype($addShipmentResponseItemTypeErrorItem), var_export($addShipmentResponseItemTypeErrorItem, true));
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddShipmentResponseItemType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddShipmentResponseItemType
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
     * Get numerNadania value.
     *
     * @return string|null
     */
    public function getNumerNadania()
    {
        return $this->numerNadania;
    }

    /**
     * Set numerNadania value.
     *
     * @param string $numerNadania
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddShipmentResponseItemType
     */
    public function setNumerNadania($numerNadania = null)
    {
        // validation for constraint: string
        if (!is_null($numerNadania) && !is_string($numerNadania)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerNadania, true), gettype($numerNadania)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($numerNadania) && mb_strlen($numerNadania) > 20) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen($numerNadania)), __LINE__);
        }
        // validation for constraint: minLength(13)
        if (!is_null($numerNadania) && mb_strlen($numerNadania) < 13) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 13', mb_strlen($numerNadania)), __LINE__);
        }
        $this->numerNadania = $numerNadania;

        return $this;
    }

    /**
     * Get numerTransakcjiOdbioru value.
     *
     * @return string|null
     */
    public function getNumerTransakcjiOdbioru()
    {
        return $this->numerTransakcjiOdbioru;
    }

    /**
     * Set numerTransakcjiOdbioru value.
     *
     * @param string $numerTransakcjiOdbioru
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddShipmentResponseItemType
     */
    public function setNumerTransakcjiOdbioru($numerTransakcjiOdbioru = null)
    {
        // validation for constraint: string
        if (!is_null($numerTransakcjiOdbioru) && !is_string($numerTransakcjiOdbioru)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerTransakcjiOdbioru, true), gettype($numerTransakcjiOdbioru)), __LINE__);
        }
        $this->numerTransakcjiOdbioru = $numerTransakcjiOdbioru;

        return $this;
    }
}
