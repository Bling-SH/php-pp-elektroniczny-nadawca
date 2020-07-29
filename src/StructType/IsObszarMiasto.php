<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for isObszarMiasto StructType.
 */
class IsObszarMiasto extends AbstractStructBase
{
    /**
     * The adres
     * Meta information extracted from the WSDL
     * - maxOccurs: 500
     * - minOccurs: 1.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ObszarAdresowyType[]
     */
    public $adres;

    /**
     * Constructor method for isObszarMiasto.
     *
     * @uses IsObszarMiasto::setAdres()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ObszarAdresowyType[] $adres
     */
    public function __construct(array $adres = [])
    {
        $this
            ->setAdres($adres);
    }

    /**
     * Get adres value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ObszarAdresowyType[]
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * This method is responsible for validating the values passed to the setAdres method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdres method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdresForArrayConstraintsFromSetAdres(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $isObszarMiastoAdresItem) {
            // validation for constraint: itemType
            if (!$isObszarMiastoAdresItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ObszarAdresowyType) {
                $invalidValues[] = is_object($isObszarMiastoAdresItem) ? get_class($isObszarMiastoAdresItem) : sprintf('%s(%s)', gettype($isObszarMiastoAdresItem), var_export($isObszarMiastoAdresItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The adres property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ObszarAdresowyType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set adres value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ObszarAdresowyType[] $adres
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\IsObszarMiasto
     */
    public function setAdres(array $adres = [])
    {
        // validation for constraint: array
        if ('' !== ($adresArrayErrorMessage = self::validateAdresForArrayConstraintsFromSetAdres($adres))) {
            throw new \InvalidArgumentException($adresArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($adres) && count($adres) > 500) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 500', count($adres)), __LINE__);
        }
        $this->adres = $adres;

        return $this;
    }

    /**
     * Add item to adres value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\IsObszarMiasto
     */
    public function addToAdres(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\ObszarAdresowyType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ObszarAdresowyType) {
            throw new \InvalidArgumentException(sprintf('The adres property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ObszarAdresowyType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($this->adres) && count($this->adres) >= 500) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 500', count($this->adres)), __LINE__);
        }
        $this->adres[] = $item;

        return $this;
    }
}
