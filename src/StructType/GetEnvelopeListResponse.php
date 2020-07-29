<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEnvelopeListResponse StructType.
 */
class GetEnvelopeListResponse extends AbstractStructBase
{
    /**
     * The envelopes
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EnvelopeInfoType[]
     */
    public $envelopes;

    /**
     * Constructor method for getEnvelopeListResponse.
     *
     * @uses GetEnvelopeListResponse::setEnvelopes()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EnvelopeInfoType[] $envelopes
     */
    public function __construct(array $envelopes = [])
    {
        $this
            ->setEnvelopes($envelopes);
    }

    /**
     * Get envelopes value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EnvelopeInfoType[]|null
     */
    public function getEnvelopes()
    {
        return $this->envelopes;
    }

    /**
     * This method is responsible for validating the values passed to the setEnvelopes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEnvelopes method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEnvelopesForArrayConstraintsFromSetEnvelopes(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEnvelopeListResponseEnvelopesItem) {
            // validation for constraint: itemType
            if (!$getEnvelopeListResponseEnvelopesItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EnvelopeInfoType) {
                $invalidValues[] = is_object($getEnvelopeListResponseEnvelopesItem) ? get_class($getEnvelopeListResponseEnvelopesItem) : sprintf('%s(%s)', gettype($getEnvelopeListResponseEnvelopesItem), var_export($getEnvelopeListResponseEnvelopesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The envelopes property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EnvelopeInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set envelopes value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EnvelopeInfoType[] $envelopes
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeListResponse
     */
    public function setEnvelopes(array $envelopes = [])
    {
        // validation for constraint: array
        if ('' !== ($envelopesArrayErrorMessage = self::validateEnvelopesForArrayConstraintsFromSetEnvelopes($envelopes))) {
            throw new \InvalidArgumentException($envelopesArrayErrorMessage, __LINE__);
        }
        $this->envelopes = $envelopes;

        return $this;
    }

    /**
     * Add item to envelopes value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeListResponse
     */
    public function addToEnvelopes(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\EnvelopeInfoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EnvelopeInfoType) {
            throw new \InvalidArgumentException(sprintf('The envelopes property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EnvelopeInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->envelopes[] = $item;

        return $this;
    }
}
