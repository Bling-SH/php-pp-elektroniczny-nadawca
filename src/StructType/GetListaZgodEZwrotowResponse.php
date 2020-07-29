<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getListaZgodEZwrotowResponse StructType.
 */
class GetListaZgodEZwrotowResponse extends AbstractStructBase
{
    /**
     * The lista
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType[]
     */
    public $lista;
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
     * Constructor method for getListaZgodEZwrotowResponse.
     *
     * @uses GetListaZgodEZwrotowResponse::setLista()
     * @uses GetListaZgodEZwrotowResponse::setError()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType[] $lista
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType[]                 $error
     */
    public function __construct(array $lista = [], array $error = [])
    {
        $this
            ->setLista($lista)
            ->setError($error);
    }

    /**
     * Get lista value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType[]|null
     */
    public function getLista()
    {
        return $this->lista;
    }

    /**
     * This method is responsible for validating the values passed to the setLista method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLista method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListaForArrayConstraintsFromSetLista(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getListaZgodEZwrotowResponseListaItem) {
            // validation for constraint: itemType
            if (!$getListaZgodEZwrotowResponseListaItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType) {
                $invalidValues[] = is_object($getListaZgodEZwrotowResponseListaItem) ? get_class($getListaZgodEZwrotowResponseListaItem) : sprintf('%s(%s)', gettype($getListaZgodEZwrotowResponseListaItem), var_export($getListaZgodEZwrotowResponseListaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The lista property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set lista value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType[] $lista
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetListaZgodEZwrotowResponse
     */
    public function setLista(array $lista = [])
    {
        // validation for constraint: array
        if ('' !== ($listaArrayErrorMessage = self::validateListaForArrayConstraintsFromSetLista($lista))) {
            throw new \InvalidArgumentException($listaArrayErrorMessage, __LINE__);
        }
        $this->lista = $lista;

        return $this;
    }

    /**
     * Add item to lista value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetListaZgodEZwrotowResponse
     */
    public function addToLista(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType) {
            throw new \InvalidArgumentException(sprintf('The lista property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->lista[] = $item;

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
        foreach ($values as $getListaZgodEZwrotowResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getListaZgodEZwrotowResponseErrorItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($getListaZgodEZwrotowResponseErrorItem) ? get_class($getListaZgodEZwrotowResponseErrorItem) : sprintf('%s(%s)', gettype($getListaZgodEZwrotowResponseErrorItem), var_export($getListaZgodEZwrotowResponseErrorItem, true));
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetListaZgodEZwrotowResponse
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetListaZgodEZwrotowResponse
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
