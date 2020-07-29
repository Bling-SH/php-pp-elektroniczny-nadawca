<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEZDOResponse StructType.
 */
class GetEZDOResponse extends AbstractStructBase
{
    /**
     * The adres
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType
     */
    public $adres;
    /**
     * The przesylka
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EZDOPrzesylkaType[]
     */
    public $przesylka;
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
     * The numerKD.
     *
     * @var string
     */
    public $numerKD;
    /**
     * The numerEZDO.
     *
     * @var string
     */
    public $numerEZDO;

    /**
     * Constructor method for getEZDOResponse.
     *
     * @uses GetEZDOResponse::setAdres()
     * @uses GetEZDOResponse::setPrzesylka()
     * @uses GetEZDOResponse::setError()
     * @uses GetEZDOResponse::setNumerKD()
     * @uses GetEZDOResponse::setNumerEZDO()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType           $adres
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EZDOPrzesylkaType[] $przesylka
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType[]         $error
     * @param string                                                                  $numerKD
     * @param string                                                                  $numerEZDO
     */
    public function __construct(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $adres = null, array $przesylka = [], array $error = [], $numerKD = null, $numerEZDO = null)
    {
        $this
            ->setAdres($adres)
            ->setPrzesylka($przesylka)
            ->setError($error)
            ->setNumerKD($numerKD)
            ->setNumerEZDO($numerEZDO);
    }

    /**
     * Get adres value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * Set adres value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $adres
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEZDOResponse
     */
    public function setAdres(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $adres = null)
    {
        $this->adres = $adres;

        return $this;
    }

    /**
     * Get przesylka value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EZDOPrzesylkaType[]
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
        foreach ($values as $getEZDOResponsePrzesylkaItem) {
            // validation for constraint: itemType
            if (!$getEZDOResponsePrzesylkaItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EZDOPrzesylkaType) {
                $invalidValues[] = is_object($getEZDOResponsePrzesylkaItem) ? get_class($getEZDOResponsePrzesylkaItem) : sprintf('%s(%s)', gettype($getEZDOResponsePrzesylkaItem), var_export($getEZDOResponsePrzesylkaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The przesylka property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EZDOPrzesylkaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set przesylka value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EZDOPrzesylkaType[] $przesylka
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEZDOResponse
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEZDOResponse
     */
    public function addToPrzesylka(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\EZDOPrzesylkaType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EZDOPrzesylkaType) {
            throw new \InvalidArgumentException(sprintf('The przesylka property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EZDOPrzesylkaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->przesylka[] = $item;

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
        foreach ($values as $getEZDOResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getEZDOResponseErrorItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($getEZDOResponseErrorItem) ? get_class($getEZDOResponseErrorItem) : sprintf('%s(%s)', gettype($getEZDOResponseErrorItem), var_export($getEZDOResponseErrorItem, true));
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEZDOResponse
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEZDOResponse
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

    /**
     * Get numerKD value.
     *
     * @return string|null
     */
    public function getNumerKD()
    {
        return $this->numerKD;
    }

    /**
     * Set numerKD value.
     *
     * @param string $numerKD
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEZDOResponse
     */
    public function setNumerKD($numerKD = null)
    {
        // validation for constraint: string
        if (!is_null($numerKD) && !is_string($numerKD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerKD, true), gettype($numerKD)), __LINE__);
        }
        $this->numerKD = $numerKD;

        return $this;
    }

    /**
     * Get numerEZDO value.
     *
     * @return string|null
     */
    public function getNumerEZDO()
    {
        return $this->numerEZDO;
    }

    /**
     * Set numerEZDO value.
     *
     * @param string $numerEZDO
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEZDOResponse
     */
    public function setNumerEZDO($numerEZDO = null)
    {
        // validation for constraint: string
        if (!is_null($numerEZDO) && !is_string($numerEZDO)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerEZDO, true), gettype($numerEZDO)), __LINE__);
        }
        $this->numerEZDO = $numerEZDO;

        return $this;
    }
}
