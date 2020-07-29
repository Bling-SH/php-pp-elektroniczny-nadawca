<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getKartyResponse StructType.
 */
class GetKartyResponse extends AbstractStructBase
{
    /**
     * The karta
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KartaType[]
     */
    public $karta;

    /**
     * Constructor method for getKartyResponse.
     *
     * @uses GetKartyResponse::setKarta()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KartaType[] $karta
     */
    public function __construct(array $karta = [])
    {
        $this
            ->setKarta($karta);
    }

    /**
     * Get karta value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KartaType[]
     */
    public function getKarta()
    {
        return $this->karta;
    }

    /**
     * This method is responsible for validating the values passed to the setKarta method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKarta method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKartaForArrayConstraintsFromSetKarta(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getKartyResponseKartaItem) {
            // validation for constraint: itemType
            if (!$getKartyResponseKartaItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KartaType) {
                $invalidValues[] = is_object($getKartyResponseKartaItem) ? get_class($getKartyResponseKartaItem) : sprintf('%s(%s)', gettype($getKartyResponseKartaItem), var_export($getKartyResponseKartaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The karta property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KartaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set karta value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KartaType[] $karta
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetKartyResponse
     */
    public function setKarta(array $karta = [])
    {
        // validation for constraint: array
        if ('' !== ($kartaArrayErrorMessage = self::validateKartaForArrayConstraintsFromSetKarta($karta))) {
            throw new \InvalidArgumentException($kartaArrayErrorMessage, __LINE__);
        }
        $this->karta = $karta;

        return $this;
    }

    /**
     * Add item to karta value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetKartyResponse
     */
    public function addToKarta(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\KartaType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KartaType) {
            throw new \InvalidArgumentException(sprintf('The karta property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KartaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->karta[] = $item;

        return $this;
    }
}
