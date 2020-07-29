<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addShipmentResponse StructType.
 */
class AddShipmentResponse extends AbstractStructBase
{
    /**
     * The retval
     * Meta information extracted from the WSDL
     * - maxOccurs: 500
     * - minOccurs: 1.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddShipmentResponseItemType[]
     */
    public $retval;

    /**
     * Constructor method for addShipmentResponse.
     *
     * @uses AddShipmentResponse::setRetval()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddShipmentResponseItemType[] $retval
     */
    public function __construct(array $retval = [])
    {
        $this
            ->setRetval($retval);
    }

    /**
     * Get retval value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddShipmentResponseItemType[]
     */
    public function getRetval()
    {
        return $this->retval;
    }

    /**
     * This method is responsible for validating the values passed to the setRetval method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRetval method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRetvalForArrayConstraintsFromSetRetval(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $addShipmentResponseRetvalItem) {
            // validation for constraint: itemType
            if (!$addShipmentResponseRetvalItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddShipmentResponseItemType) {
                $invalidValues[] = is_object($addShipmentResponseRetvalItem) ? get_class($addShipmentResponseRetvalItem) : sprintf('%s(%s)', gettype($addShipmentResponseRetvalItem), var_export($addShipmentResponseRetvalItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The retval property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddShipmentResponseItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set retval value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddShipmentResponseItemType[] $retval
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddShipmentResponse
     */
    public function setRetval(array $retval = [])
    {
        // validation for constraint: array
        if ('' !== ($retvalArrayErrorMessage = self::validateRetvalForArrayConstraintsFromSetRetval($retval))) {
            throw new \InvalidArgumentException($retvalArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($retval) && count($retval) > 500) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 500', count($retval)), __LINE__);
        }
        $this->retval = $retval;

        return $this;
    }

    /**
     * Add item to retval value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddShipmentResponse
     */
    public function addToRetval(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddShipmentResponseItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddShipmentResponseItemType) {
            throw new \InvalidArgumentException(sprintf('The retval property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddShipmentResponseItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($this->retval) && count($this->retval) >= 500) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 500', count($this->retval)), __LINE__);
        }
        $this->retval[] = $item;

        return $this;
    }
}
