<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAddresLabelByGuid StructType.
 */
class GetAddresLabelByGuid extends AbstractStructBase
{
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - whiteSpace: collapse.
     *
     * @var string[]
     */
    public $guid;
    /**
     * The idBufor
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var int
     */
    public $idBufor;

    /**
     * Constructor method for getAddresLabelByGuid.
     *
     * @uses GetAddresLabelByGuid::setGuid()
     * @uses GetAddresLabelByGuid::setIdBufor()
     *
     * @param string[] $guid
     * @param int      $idBufor
     */
    public function __construct(array $guid = [], $idBufor = null)
    {
        $this
            ->setGuid($guid)
            ->setIdBufor($idBufor);
    }

    /**
     * Get guid value.
     *
     * @return string[]
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * This method is responsible for validating the values passed to the setGuid method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGuid method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGuidForArrayConstraintsFromSetGuid(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAddresLabelByGuidGuidItem) {
            // validation for constraint: itemType
            if (!is_string($getAddresLabelByGuidGuidItem)) {
                $invalidValues[] = is_object($getAddresLabelByGuidGuidItem) ? get_class($getAddresLabelByGuidGuidItem) : sprintf('%s(%s)', gettype($getAddresLabelByGuidGuidItem), var_export($getAddresLabelByGuidGuidItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The guid property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * This method is responsible for validating the value passed to the setGuid method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGuid method
     * This has to validate that the items contained by the array match the length constraint.
     *
     * @param mixed $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGuidForLengthConstraintFromSetGuid($values)
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAddresLabelByGuidGuidItem) {
            // validation for constraint: length(32)
            if (32 !== mb_strlen($getAddresLabelByGuidGuidItem)) {
                $invalidValues[] = var_export($getAddresLabelByGuidGuidItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be equal to 32', implode(', ', $invalidValues));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set guid value.
     *
     * @throws \InvalidArgumentException
     *
     * @param string[] $guid
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetAddresLabelByGuid
     */
    public function setGuid(array $guid = [])
    {
        // validation for constraint: array
        if ('' !== ($guidArrayErrorMessage = self::validateGuidForArrayConstraintsFromSetGuid($guid))) {
            throw new \InvalidArgumentException($guidArrayErrorMessage, __LINE__);
        }
        // validation for constraint: length(32)
        if ('' !== ($guidLengthErrorMessage = self::validateGuidForLengthConstraintFromSetGuid($guid))) {
            throw new \InvalidArgumentException($guidLengthErrorMessage, __LINE__);
        }
        $this->guid = $guid;

        return $this;
    }

    /**
     * Add item to guid value.
     *
     * @throws \InvalidArgumentException
     *
     * @param string $item
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetAddresLabelByGuid
     */
    public function addToGuid($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The guid property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: length(32)
        if (32 !== mb_strlen($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 32', mb_strlen($item)), __LINE__);
        }
        $this->guid[] = $item;

        return $this;
    }

    /**
     * Get idBufor value.
     *
     * @return int|null
     */
    public function getIdBufor()
    {
        return $this->idBufor;
    }

    /**
     * Set idBufor value.
     *
     * @param int $idBufor
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetAddresLabelByGuid
     */
    public function setIdBufor($idBufor = null)
    {
        // validation for constraint: int
        if (!is_null($idBufor) && !(is_int($idBufor) || ctype_digit($idBufor))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idBufor, true), gettype($idBufor)), __LINE__);
        }
        $this->idBufor = $idBufor;

        return $this;
    }
}
