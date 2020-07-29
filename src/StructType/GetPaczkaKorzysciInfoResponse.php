<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPaczkaKorzysciInfoResponse StructType.
 */
class GetPaczkaKorzysciInfoResponse extends AbstractStructBase
{
    /**
     * The status.
     *
     * @var string
     */
    public $status;
    /**
     * The idKarta
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     *
     * @var int
     */
    public $idKarta;
    /**
     * The info
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\InfoPaczkaKorzysciType
     */
    public $info;
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
     * Constructor method for getPaczkaKorzysciInfoResponse.
     *
     * @uses GetPaczkaKorzysciInfoResponse::setStatus()
     * @uses GetPaczkaKorzysciInfoResponse::setIdKarta()
     * @uses GetPaczkaKorzysciInfoResponse::setInfo()
     * @uses GetPaczkaKorzysciInfoResponse::setError()
     *
     * @param string                                                                     $status
     * @param int                                                                        $idKarta
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\InfoPaczkaKorzysciType $info
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType[]            $error
     */
    public function __construct($status = null, $idKarta = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\InfoPaczkaKorzysciType $info = null, array $error = [])
    {
        $this
            ->setStatus($status)
            ->setIdKarta($idKarta)
            ->setInfo($info)
            ->setError($error);
    }

    /**
     * Get status value.
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set status value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\StatusPaczkaKorzysciType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\StatusPaczkaKorzysciType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $status
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetPaczkaKorzysciInfoResponse
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\StatusPaczkaKorzysciType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\StatusPaczkaKorzysciType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\StatusPaczkaKorzysciType::getValidValues())), __LINE__);
        }
        $this->status = $status;

        return $this;
    }

    /**
     * Get idKarta value.
     *
     * @return int|null
     */
    public function getIdKarta()
    {
        return $this->idKarta;
    }

    /**
     * Set idKarta value.
     *
     * @param int $idKarta
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetPaczkaKorzysciInfoResponse
     */
    public function setIdKarta($idKarta = null)
    {
        // validation for constraint: int
        if (!is_null($idKarta) && !(is_int($idKarta) || ctype_digit($idKarta))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idKarta, true), gettype($idKarta)), __LINE__);
        }
        $this->idKarta = $idKarta;

        return $this;
    }

    /**
     * Get info value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\InfoPaczkaKorzysciType|null
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set info value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\InfoPaczkaKorzysciType $info
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetPaczkaKorzysciInfoResponse
     */
    public function setInfo(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\InfoPaczkaKorzysciType $info = null)
    {
        $this->info = $info;

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
        foreach ($values as $getPaczkaKorzysciInfoResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getPaczkaKorzysciInfoResponseErrorItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($getPaczkaKorzysciInfoResponseErrorItem) ? get_class($getPaczkaKorzysciInfoResponseErrorItem) : sprintf('%s(%s)', gettype($getPaczkaKorzysciInfoResponseErrorItem), var_export($getPaczkaKorzysciInfoResponseErrorItem, true));
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetPaczkaKorzysciInfoResponse
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetPaczkaKorzysciInfoResponse
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
