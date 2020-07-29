<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getUrzedyWydajaceEPrzesylkiResponse StructType.
 */
class GetUrzedyWydajaceEPrzesylkiResponse extends AbstractStructBase
{
    /**
     * The urzadWydaniaEPrzesylki
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType[]
     */
    public $urzadWydaniaEPrzesylki;

    /**
     * Constructor method for getUrzedyWydajaceEPrzesylkiResponse.
     *
     * @uses GetUrzedyWydajaceEPrzesylkiResponse::setUrzadWydaniaEPrzesylki()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType[] $urzadWydaniaEPrzesylki
     */
    public function __construct(array $urzadWydaniaEPrzesylki = [])
    {
        $this
            ->setUrzadWydaniaEPrzesylki($urzadWydaniaEPrzesylki);
    }

    /**
     * Get urzadWydaniaEPrzesylki value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType[]
     */
    public function getUrzadWydaniaEPrzesylki()
    {
        return $this->urzadWydaniaEPrzesylki;
    }

    /**
     * This method is responsible for validating the values passed to the setUrzadWydaniaEPrzesylki method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUrzadWydaniaEPrzesylki method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUrzadWydaniaEPrzesylkiForArrayConstraintsFromSetUrzadWydaniaEPrzesylki(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUrzedyWydajaceEPrzesylkiResponseUrzadWydaniaEPrzesylkiItem) {
            // validation for constraint: itemType
            if (!$getUrzedyWydajaceEPrzesylkiResponseUrzadWydaniaEPrzesylkiItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType) {
                $invalidValues[] = is_object($getUrzedyWydajaceEPrzesylkiResponseUrzadWydaniaEPrzesylkiItem) ? get_class($getUrzedyWydajaceEPrzesylkiResponseUrzadWydaniaEPrzesylkiItem) : sprintf('%s(%s)', gettype($getUrzedyWydajaceEPrzesylkiResponseUrzadWydaniaEPrzesylkiItem), var_export($getUrzedyWydajaceEPrzesylkiResponseUrzadWydaniaEPrzesylkiItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The urzadWydaniaEPrzesylki property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set urzadWydaniaEPrzesylki value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType[] $urzadWydaniaEPrzesylki
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetUrzedyWydajaceEPrzesylkiResponse
     */
    public function setUrzadWydaniaEPrzesylki(array $urzadWydaniaEPrzesylki = [])
    {
        // validation for constraint: array
        if ('' !== ($urzadWydaniaEPrzesylkiArrayErrorMessage = self::validateUrzadWydaniaEPrzesylkiForArrayConstraintsFromSetUrzadWydaniaEPrzesylki($urzadWydaniaEPrzesylki))) {
            throw new \InvalidArgumentException($urzadWydaniaEPrzesylkiArrayErrorMessage, __LINE__);
        }
        $this->urzadWydaniaEPrzesylki = $urzadWydaniaEPrzesylki;

        return $this;
    }

    /**
     * Add item to urzadWydaniaEPrzesylki value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetUrzedyWydajaceEPrzesylkiResponse
     */
    public function addToUrzadWydaniaEPrzesylki(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType) {
            throw new \InvalidArgumentException(sprintf('The urzadWydaniaEPrzesylki property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->urzadWydaniaEPrzesylki[] = $item;

        return $this;
    }
}
