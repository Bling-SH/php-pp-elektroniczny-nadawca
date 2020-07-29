<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReklamacjeResponse StructType.
 */
class GetReklamacjeResponse extends AbstractStructBase
{
    /**
     * The reklamacja
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType[]
     */
    public $reklamacja;

    /**
     * Constructor method for getReklamacjeResponse.
     *
     * @uses GetReklamacjeResponse::setReklamacja()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType[] $reklamacja
     */
    public function __construct(array $reklamacja = [])
    {
        $this
            ->setReklamacja($reklamacja);
    }

    /**
     * Get reklamacja value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType[]|null
     */
    public function getReklamacja()
    {
        return $this->reklamacja;
    }

    /**
     * This method is responsible for validating the values passed to the setReklamacja method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReklamacja method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReklamacjaForArrayConstraintsFromSetReklamacja(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getReklamacjeResponseReklamacjaItem) {
            // validation for constraint: itemType
            if (!$getReklamacjeResponseReklamacjaItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType) {
                $invalidValues[] = is_object($getReklamacjeResponseReklamacjaItem) ? get_class($getReklamacjeResponseReklamacjaItem) : sprintf('%s(%s)', gettype($getReklamacjeResponseReklamacjaItem), var_export($getReklamacjeResponseReklamacjaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The reklamacja property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set reklamacja value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType[] $reklamacja
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetReklamacjeResponse
     */
    public function setReklamacja(array $reklamacja = [])
    {
        // validation for constraint: array
        if ('' !== ($reklamacjaArrayErrorMessage = self::validateReklamacjaForArrayConstraintsFromSetReklamacja($reklamacja))) {
            throw new \InvalidArgumentException($reklamacjaArrayErrorMessage, __LINE__);
        }
        $this->reklamacja = $reklamacja;

        return $this;
    }

    /**
     * Add item to reklamacja value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetReklamacjeResponse
     */
    public function addToReklamacja(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType) {
            throw new \InvalidArgumentException(sprintf('The reklamacja property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->reklamacja[] = $item;

        return $this;
    }
}
