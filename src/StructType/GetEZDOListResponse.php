<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEZDOListResponse StructType.
 */
class GetEZDOListResponse extends AbstractStructBase
{
    /**
     * The EZDOPakiet
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EZDOPakietType[]
     */
    public $EZDOPakiet;

    /**
     * Constructor method for getEZDOListResponse.
     *
     * @uses GetEZDOListResponse::setEZDOPakiet()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EZDOPakietType[] $eZDOPakiet
     */
    public function __construct(array $eZDOPakiet = [])
    {
        $this
            ->setEZDOPakiet($eZDOPakiet);
    }

    /**
     * Get EZDOPakiet value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EZDOPakietType[]|null
     */
    public function getEZDOPakiet()
    {
        return $this->EZDOPakiet;
    }

    /**
     * This method is responsible for validating the values passed to the setEZDOPakiet method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEZDOPakiet method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEZDOPakietForArrayConstraintsFromSetEZDOPakiet(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEZDOListResponseEZDOPakietItem) {
            // validation for constraint: itemType
            if (!$getEZDOListResponseEZDOPakietItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EZDOPakietType) {
                $invalidValues[] = is_object($getEZDOListResponseEZDOPakietItem) ? get_class($getEZDOListResponseEZDOPakietItem) : sprintf('%s(%s)', gettype($getEZDOListResponseEZDOPakietItem), var_export($getEZDOListResponseEZDOPakietItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EZDOPakiet property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EZDOPakietType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set EZDOPakiet value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EZDOPakietType[] $eZDOPakiet
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEZDOListResponse
     */
    public function setEZDOPakiet(array $eZDOPakiet = [])
    {
        // validation for constraint: array
        if ('' !== ($eZDOPakietArrayErrorMessage = self::validateEZDOPakietForArrayConstraintsFromSetEZDOPakiet($eZDOPakiet))) {
            throw new \InvalidArgumentException($eZDOPakietArrayErrorMessage, __LINE__);
        }
        $this->EZDOPakiet = $eZDOPakiet;

        return $this;
    }

    /**
     * Add item to EZDOPakiet value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEZDOListResponse
     */
    public function addToEZDOPakiet(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\EZDOPakietType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EZDOPakietType) {
            throw new \InvalidArgumentException(sprintf('The EZDOPakiet property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EZDOPakietType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->EZDOPakiet[] = $item;

        return $this;
    }
}
