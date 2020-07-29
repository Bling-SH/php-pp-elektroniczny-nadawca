<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEnvelopeContentFullResponse StructType.
 */
class GetEnvelopeContentFullResponse extends AbstractStructBase
{
    /**
     * The przesylka
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaFullType[]
     */
    public $przesylka;

    /**
     * Constructor method for getEnvelopeContentFullResponse.
     *
     * @uses GetEnvelopeContentFullResponse::setPrzesylka()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaFullType[] $przesylka
     */
    public function __construct(array $przesylka = [])
    {
        $this
            ->setPrzesylka($przesylka);
    }

    /**
     * Get przesylka value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaFullType[]|null
     */
    public function getPrzesylka()
    {
        return $this->przesylka;
    }

    /**
     * This method is responsible for validating the values passed to the setPrzesylka method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrzesylka method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrzesylkaForArrayConstraintsFromSetPrzesylka(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEnvelopeContentFullResponsePrzesylkaItem) {
            // validation for constraint: itemType
            if (!$getEnvelopeContentFullResponsePrzesylkaItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaFullType) {
                $invalidValues[] = is_object($getEnvelopeContentFullResponsePrzesylkaItem) ? get_class($getEnvelopeContentFullResponsePrzesylkaItem) : sprintf('%s(%s)', gettype($getEnvelopeContentFullResponsePrzesylkaItem), var_export($getEnvelopeContentFullResponsePrzesylkaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The przesylka property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaFullType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set przesylka value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaFullType[] $przesylka
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeContentFullResponse
     */
    public function setPrzesylka(array $przesylka = [])
    {
        // validation for constraint: array
        if ('' !== ($przesylkaArrayErrorMessage = self::validatePrzesylkaForArrayConstraintsFromSetPrzesylka($przesylka))) {
            throw new \InvalidArgumentException($przesylkaArrayErrorMessage, __LINE__);
        }
        $this->przesylka = $przesylka;

        return $this;
    }

    /**
     * Add item to przesylka value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeContentFullResponse
     */
    public function addToPrzesylka(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaFullType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaFullType) {
            throw new \InvalidArgumentException(sprintf('The przesylka property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaFullType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->przesylka[] = $item;

        return $this;
    }
}
