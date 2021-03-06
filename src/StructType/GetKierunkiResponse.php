<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getKierunkiResponse StructType.
 */
class GetKierunkiResponse extends AbstractStructBase
{
    /**
     * The kierunek
     * Meta information extracted from the WSDL
     * - maxOccurs: 1000
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KierunekType[]
     */
    public $kierunek;
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
     * Constructor method for getKierunkiResponse.
     *
     * @uses GetKierunkiResponse::setKierunek()
     * @uses GetKierunkiResponse::setError()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KierunekType[] $kierunek
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType[]    $error
     */
    public function __construct(array $kierunek = [], array $error = [])
    {
        $this
            ->setKierunek($kierunek)
            ->setError($error);
    }

    /**
     * Get kierunek value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KierunekType[]|null
     */
    public function getKierunek()
    {
        return $this->kierunek;
    }

    /**
     * This method is responsible for validating the values passed to the setKierunek method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKierunek method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKierunekForArrayConstraintsFromSetKierunek(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getKierunkiResponseKierunekItem) {
            // validation for constraint: itemType
            if (!$getKierunkiResponseKierunekItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KierunekType) {
                $invalidValues[] = is_object($getKierunkiResponseKierunekItem) ? get_class($getKierunkiResponseKierunekItem) : sprintf('%s(%s)', gettype($getKierunkiResponseKierunekItem), var_export($getKierunkiResponseKierunekItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The kierunek property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KierunekType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set kierunek value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KierunekType[] $kierunek
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetKierunkiResponse
     */
    public function setKierunek(array $kierunek = [])
    {
        // validation for constraint: array
        if ('' !== ($kierunekArrayErrorMessage = self::validateKierunekForArrayConstraintsFromSetKierunek($kierunek))) {
            throw new \InvalidArgumentException($kierunekArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(1000)
        if (is_array($kierunek) && count($kierunek) > 1000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1000', count($kierunek)), __LINE__);
        }
        $this->kierunek = $kierunek;

        return $this;
    }

    /**
     * Add item to kierunek value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetKierunkiResponse
     */
    public function addToKierunek(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\KierunekType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KierunekType) {
            throw new \InvalidArgumentException(sprintf('The kierunek property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KierunekType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(1000)
        if (is_array($this->kierunek) && count($this->kierunek) >= 1000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1000', count($this->kierunek)), __LINE__);
        }
        $this->kierunek[] = $item;

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
        foreach ($values as $getKierunkiResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getKierunkiResponseErrorItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($getKierunkiResponseErrorItem) ? get_class($getKierunkiResponseErrorItem) : sprintf('%s(%s)', gettype($getKierunkiResponseErrorItem), var_export($getKierunkiResponseErrorItem, true));
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetKierunkiResponse
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetKierunkiResponse
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
