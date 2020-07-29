<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getUbezpieczeniaInfoResponse StructType.
 */
class GetUbezpieczeniaInfoResponse extends AbstractStructBase
{
    /**
     * The poziomyUbezpieczenia
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczeniaInfoType[]
     */
    public $poziomyUbezpieczenia;

    /**
     * Constructor method for getUbezpieczeniaInfoResponse.
     *
     * @uses GetUbezpieczeniaInfoResponse::setPoziomyUbezpieczenia()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczeniaInfoType[] $poziomyUbezpieczenia
     */
    public function __construct(array $poziomyUbezpieczenia = [])
    {
        $this
            ->setPoziomyUbezpieczenia($poziomyUbezpieczenia);
    }

    /**
     * Get poziomyUbezpieczenia value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczeniaInfoType[]|null
     */
    public function getPoziomyUbezpieczenia()
    {
        return $this->poziomyUbezpieczenia;
    }

    /**
     * This method is responsible for validating the values passed to the setPoziomyUbezpieczenia method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPoziomyUbezpieczenia method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePoziomyUbezpieczeniaForArrayConstraintsFromSetPoziomyUbezpieczenia(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUbezpieczeniaInfoResponsePoziomyUbezpieczeniaItem) {
            // validation for constraint: itemType
            if (!$getUbezpieczeniaInfoResponsePoziomyUbezpieczeniaItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczeniaInfoType) {
                $invalidValues[] = is_object($getUbezpieczeniaInfoResponsePoziomyUbezpieczeniaItem) ? get_class($getUbezpieczeniaInfoResponsePoziomyUbezpieczeniaItem) : sprintf('%s(%s)', gettype($getUbezpieczeniaInfoResponsePoziomyUbezpieczeniaItem), var_export($getUbezpieczeniaInfoResponsePoziomyUbezpieczeniaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The poziomyUbezpieczenia property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczeniaInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set poziomyUbezpieczenia value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczeniaInfoType[] $poziomyUbezpieczenia
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetUbezpieczeniaInfoResponse
     */
    public function setPoziomyUbezpieczenia(array $poziomyUbezpieczenia = [])
    {
        // validation for constraint: array
        if ('' !== ($poziomyUbezpieczeniaArrayErrorMessage = self::validatePoziomyUbezpieczeniaForArrayConstraintsFromSetPoziomyUbezpieczenia($poziomyUbezpieczenia))) {
            throw new \InvalidArgumentException($poziomyUbezpieczeniaArrayErrorMessage, __LINE__);
        }
        $this->poziomyUbezpieczenia = $poziomyUbezpieczenia;

        return $this;
    }

    /**
     * Add item to poziomyUbezpieczenia value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetUbezpieczeniaInfoResponse
     */
    public function addToPoziomyUbezpieczenia(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczeniaInfoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczeniaInfoType) {
            throw new \InvalidArgumentException(sprintf('The poziomyUbezpieczenia property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczeniaInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->poziomyUbezpieczenia[] = $item;

        return $this;
    }
}
