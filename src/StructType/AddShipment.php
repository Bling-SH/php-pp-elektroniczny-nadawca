<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addShipment StructType.
 */
class AddShipment extends AbstractStructBase
{
    /**
     * The przesylki
     * Meta information extracted from the WSDL
     * - maxOccurs: 500
     * - minOccurs: 1.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType[]
     */
    public $przesylki;
    /**
     * The idBufor
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var int
     */
    public $idBufor;

    /**
     * Constructor method for addShipment.
     *
     * @uses AddShipment::setPrzesylki()
     * @uses AddShipment::setIdBufor()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType[] $przesylki
     * @param int                                                                 $idBufor
     */
    public function __construct(array $przesylki = [], $idBufor = null)
    {
        $this
            ->setPrzesylki($przesylki)
            ->setIdBufor($idBufor);
    }

    /**
     * Get przesylki value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType[]
     */
    public function getPrzesylki()
    {
        return $this->przesylki;
    }

    /**
     * This method is responsible for validating the values passed to the setPrzesylki method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrzesylki method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrzesylkiForArrayConstraintsFromSetPrzesylki(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $addShipmentPrzesylkiItem) {
            // validation for constraint: itemType
            if (!$addShipmentPrzesylkiItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType) {
                $invalidValues[] = is_object($addShipmentPrzesylkiItem) ? get_class($addShipmentPrzesylkiItem) : sprintf('%s(%s)', gettype($addShipmentPrzesylkiItem), var_export($addShipmentPrzesylkiItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The przesylki property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set przesylki value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType[] $przesylki
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddShipment
     */
    public function setPrzesylki(array $przesylki = [])
    {
        // validation for constraint: array
        if ('' !== ($przesylkiArrayErrorMessage = self::validatePrzesylkiForArrayConstraintsFromSetPrzesylki($przesylki))) {
            throw new \InvalidArgumentException($przesylkiArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($przesylki) && count($przesylki) > 500) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 500', count($przesylki)), __LINE__);
        }
        $this->przesylki = $przesylki;

        return $this;
    }

    /**
     * Add item to przesylki value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddShipment
     */
    public function addToPrzesylki(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType) {
            throw new \InvalidArgumentException(sprintf('The przesylki property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($this->przesylki) && count($this->przesylki) >= 500) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 500', count($this->przesylki)), __LINE__);
        }
        $this->przesylki[] = $item;

        return $this;
    }

    /**
     * Get idBufor value.
     *
     * @return int|null
     */
    public function getIdBufor()
    {
        return $this->idBufor;
    }

    /**
     * Set idBufor value.
     *
     * @param int $idBufor
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddShipment
     */
    public function setIdBufor($idBufor = null)
    {
        // validation for constraint: int
        if (!is_null($idBufor) && !(is_int($idBufor) || ctype_digit($idBufor))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idBufor, true), gettype($idBufor)), __LINE__);
        }
        $this->idBufor = $idBufor;

        return $this;
    }
}
