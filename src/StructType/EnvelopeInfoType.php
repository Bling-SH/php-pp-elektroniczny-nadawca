<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for envelopeInfoType StructType.
 */
class EnvelopeInfoType extends AbstractStructBase
{
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
     * The idEnvelope.
     *
     * @var int
     */
    public $idEnvelope;
    /**
     * The envelopeStatus.
     *
     * @var string
     */
    public $envelopeStatus;
    /**
     * The dataTransmisji.
     *
     * @var string
     */
    public $dataTransmisji;

    /**
     * Constructor method for envelopeInfoType.
     *
     * @uses EnvelopeInfoType::setError()
     * @uses EnvelopeInfoType::setIdEnvelope()
     * @uses EnvelopeInfoType::setEnvelopeStatus()
     * @uses EnvelopeInfoType::setDataTransmisji()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType[] $error
     * @param int                                                             $idEnvelope
     * @param string                                                          $envelopeStatus
     * @param string                                                          $dataTransmisji
     */
    public function __construct(array $error = [], $idEnvelope = null, $envelopeStatus = null, $dataTransmisji = null)
    {
        $this
            ->setError($error)
            ->setIdEnvelope($idEnvelope)
            ->setEnvelopeStatus($envelopeStatus)
            ->setDataTransmisji($dataTransmisji);
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
        foreach ($values as $envelopeInfoTypeErrorItem) {
            // validation for constraint: itemType
            if (!$envelopeInfoTypeErrorItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($envelopeInfoTypeErrorItem) ? get_class($envelopeInfoTypeErrorItem) : sprintf('%s(%s)', gettype($envelopeInfoTypeErrorItem), var_export($envelopeInfoTypeErrorItem, true));
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EnvelopeInfoType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EnvelopeInfoType
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
     * Get idEnvelope value.
     *
     * @return int|null
     */
    public function getIdEnvelope()
    {
        return $this->idEnvelope;
    }

    /**
     * Set idEnvelope value.
     *
     * @param int $idEnvelope
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EnvelopeInfoType
     */
    public function setIdEnvelope($idEnvelope = null)
    {
        // validation for constraint: int
        if (!is_null($idEnvelope) && !(is_int($idEnvelope) || ctype_digit($idEnvelope))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idEnvelope, true), gettype($idEnvelope)), __LINE__);
        }
        $this->idEnvelope = $idEnvelope;

        return $this;
    }

    /**
     * Get envelopeStatus value.
     *
     * @return string|null
     */
    public function getEnvelopeStatus()
    {
        return $this->envelopeStatus;
    }

    /**
     * Set envelopeStatus value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\EnvelopeStatusType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\EnvelopeStatusType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $envelopeStatus
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EnvelopeInfoType
     */
    public function setEnvelopeStatus($envelopeStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\EnvelopeStatusType::valueIsValid($envelopeStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\EnvelopeStatusType', is_array($envelopeStatus) ? implode(', ', $envelopeStatus) : var_export($envelopeStatus, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\EnvelopeStatusType::getValidValues())), __LINE__);
        }
        $this->envelopeStatus = $envelopeStatus;

        return $this;
    }

    /**
     * Get dataTransmisji value.
     *
     * @return string|null
     */
    public function getDataTransmisji()
    {
        return $this->dataTransmisji;
    }

    /**
     * Set dataTransmisji value.
     *
     * @param string $dataTransmisji
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EnvelopeInfoType
     */
    public function setDataTransmisji($dataTransmisji = null)
    {
        // validation for constraint: string
        if (!is_null($dataTransmisji) && !is_string($dataTransmisji)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataTransmisji, true), gettype($dataTransmisji)), __LINE__);
        }
        $this->dataTransmisji = $dataTransmisji;

        return $this;
    }
}
