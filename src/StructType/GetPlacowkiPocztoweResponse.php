<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPlacowkiPocztoweResponse StructType.
 */
class GetPlacowkiPocztoweResponse extends AbstractStructBase
{
    /**
     * The placowka
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType[]
     */
    public $placowka;

    /**
     * Constructor method for getPlacowkiPocztoweResponse.
     *
     * @uses GetPlacowkiPocztoweResponse::setPlacowka()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType[] $placowka
     */
    public function __construct(array $placowka = [])
    {
        $this
            ->setPlacowka($placowka);
    }

    /**
     * Get placowka value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType[]
     */
    public function getPlacowka()
    {
        return $this->placowka;
    }

    /**
     * This method is responsible for validating the values passed to the setPlacowka method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPlacowka method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePlacowkaForArrayConstraintsFromSetPlacowka(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPlacowkiPocztoweResponsePlacowkaItem) {
            // validation for constraint: itemType
            if (!$getPlacowkiPocztoweResponsePlacowkaItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType) {
                $invalidValues[] = is_object($getPlacowkiPocztoweResponsePlacowkaItem) ? get_class($getPlacowkiPocztoweResponsePlacowkaItem) : sprintf('%s(%s)', gettype($getPlacowkiPocztoweResponsePlacowkaItem), var_export($getPlacowkiPocztoweResponsePlacowkaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The placowka property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set placowka value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType[] $placowka
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetPlacowkiPocztoweResponse
     */
    public function setPlacowka(array $placowka = [])
    {
        // validation for constraint: array
        if ('' !== ($placowkaArrayErrorMessage = self::validatePlacowkaForArrayConstraintsFromSetPlacowka($placowka))) {
            throw new \InvalidArgumentException($placowkaArrayErrorMessage, __LINE__);
        }
        $this->placowka = $placowka;

        return $this;
    }

    /**
     * Add item to placowka value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetPlacowkiPocztoweResponse
     */
    public function addToPlacowka(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType) {
            throw new \InvalidArgumentException(sprintf('The placowka property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->placowka[] = $item;

        return $this;
    }
}
