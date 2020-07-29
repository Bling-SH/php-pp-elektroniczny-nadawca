<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getListaPowodowReklamacjiResponse StructType.
 */
class GetListaPowodowReklamacjiResponse extends AbstractStructBase
{
    /**
     * The kategoriePowodowReklamacji
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KategoriePowodowReklamacjiType[]
     */
    public $kategoriePowodowReklamacji;

    /**
     * Constructor method for getListaPowodowReklamacjiResponse.
     *
     * @uses GetListaPowodowReklamacjiResponse::setKategoriePowodowReklamacji()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KategoriePowodowReklamacjiType[] $kategoriePowodowReklamacji
     */
    public function __construct(array $kategoriePowodowReklamacji = [])
    {
        $this
            ->setKategoriePowodowReklamacji($kategoriePowodowReklamacji);
    }

    /**
     * Get kategoriePowodowReklamacji value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KategoriePowodowReklamacjiType[]
     */
    public function getKategoriePowodowReklamacji()
    {
        return $this->kategoriePowodowReklamacji;
    }

    /**
     * This method is responsible for validating the values passed to the setKategoriePowodowReklamacji method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKategoriePowodowReklamacji method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKategoriePowodowReklamacjiForArrayConstraintsFromSetKategoriePowodowReklamacji(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getListaPowodowReklamacjiResponseKategoriePowodowReklamacjiItem) {
            // validation for constraint: itemType
            if (!$getListaPowodowReklamacjiResponseKategoriePowodowReklamacjiItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KategoriePowodowReklamacjiType) {
                $invalidValues[] = is_object($getListaPowodowReklamacjiResponseKategoriePowodowReklamacjiItem) ? get_class($getListaPowodowReklamacjiResponseKategoriePowodowReklamacjiItem) : sprintf('%s(%s)', gettype($getListaPowodowReklamacjiResponseKategoriePowodowReklamacjiItem), var_export($getListaPowodowReklamacjiResponseKategoriePowodowReklamacjiItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The kategoriePowodowReklamacji property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KategoriePowodowReklamacjiType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set kategoriePowodowReklamacji value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KategoriePowodowReklamacjiType[] $kategoriePowodowReklamacji
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetListaPowodowReklamacjiResponse
     */
    public function setKategoriePowodowReklamacji(array $kategoriePowodowReklamacji = [])
    {
        // validation for constraint: array
        if ('' !== ($kategoriePowodowReklamacjiArrayErrorMessage = self::validateKategoriePowodowReklamacjiForArrayConstraintsFromSetKategoriePowodowReklamacji($kategoriePowodowReklamacji))) {
            throw new \InvalidArgumentException($kategoriePowodowReklamacjiArrayErrorMessage, __LINE__);
        }
        $this->kategoriePowodowReklamacji = $kategoriePowodowReklamacji;

        return $this;
    }

    /**
     * Add item to kategoriePowodowReklamacji value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetListaPowodowReklamacjiResponse
     */
    public function addToKategoriePowodowReklamacji(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\KategoriePowodowReklamacjiType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KategoriePowodowReklamacjiType) {
            throw new \InvalidArgumentException(sprintf('The kategoriePowodowReklamacji property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KategoriePowodowReklamacjiType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->kategoriePowodowReklamacji[] = $item;

        return $this;
    }
}
