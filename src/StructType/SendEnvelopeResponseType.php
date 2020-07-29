<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sendEnvelopeResponseType StructType.
 */
class SendEnvelopeResponseType extends AbstractStructBase
{
    /**
     * The idEnvelope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var int
     */
    public $idEnvelope;
    /**
     * The envelopeStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var string
     */
    public $envelopeStatus;
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
     * The envelopeFilename
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var string
     */
    public $envelopeFilename;

    /**
     * Constructor method for sendEnvelopeResponseType.
     *
     * @uses SendEnvelopeResponseType::setIdEnvelope()
     * @uses SendEnvelopeResponseType::setEnvelopeStatus()
     * @uses SendEnvelopeResponseType::setError()
     * @uses SendEnvelopeResponseType::setEnvelopeFilename()
     *
     * @param int                                                             $idEnvelope
     * @param string                                                          $envelopeStatus
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType[] $error
     * @param string                                                          $envelopeFilename
     */
    public function __construct($idEnvelope = null, $envelopeStatus = null, array $error = [], $envelopeFilename = null)
    {
        $this
            ->setIdEnvelope($idEnvelope)
            ->setEnvelopeStatus($envelopeStatus)
            ->setError($error)
            ->setEnvelopeFilename($envelopeFilename);
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SendEnvelopeResponseType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SendEnvelopeResponseType
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
        foreach ($values as $sendEnvelopeResponseTypeErrorItem) {
            // validation for constraint: itemType
            if (!$sendEnvelopeResponseTypeErrorItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ErrorType) {
                $invalidValues[] = is_object($sendEnvelopeResponseTypeErrorItem) ? get_class($sendEnvelopeResponseTypeErrorItem) : sprintf('%s(%s)', gettype($sendEnvelopeResponseTypeErrorItem), var_export($sendEnvelopeResponseTypeErrorItem, true));
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SendEnvelopeResponseType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SendEnvelopeResponseType
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
     * Get envelopeFilename value.
     *
     * @return string|null
     */
    public function getEnvelopeFilename()
    {
        return $this->envelopeFilename;
    }

    /**
     * Set envelopeFilename value.
     *
     * @param string $envelopeFilename
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SendEnvelopeResponseType
     */
    public function setEnvelopeFilename($envelopeFilename = null)
    {
        // validation for constraint: string
        if (!is_null($envelopeFilename) && !is_string($envelopeFilename)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($envelopeFilename, true), gettype($envelopeFilename)), __LINE__);
        }
        $this->envelopeFilename = $envelopeFilename;

        return $this;
    }
}
