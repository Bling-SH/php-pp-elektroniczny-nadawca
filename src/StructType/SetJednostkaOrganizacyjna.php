<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for setJednostkaOrganizacyjna StructType.
 */
class SetJednostkaOrganizacyjna extends AbstractStructBase
{
    /**
     * The jednostkaOrganizacyjna
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[]
     */
    public $jednostkaOrganizacyjna;

    /**
     * Constructor method for setJednostkaOrganizacyjna.
     *
     * @uses SetJednostkaOrganizacyjna::setJednostkaOrganizacyjna()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[] $jednostkaOrganizacyjna
     */
    public function __construct(array $jednostkaOrganizacyjna = [])
    {
        $this
            ->setJednostkaOrganizacyjna($jednostkaOrganizacyjna);
    }

    /**
     * Get jednostkaOrganizacyjna value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[]
     */
    public function getJednostkaOrganizacyjna()
    {
        return $this->jednostkaOrganizacyjna;
    }

    /**
     * This method is responsible for validating the values passed to the setJednostkaOrganizacyjna method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJednostkaOrganizacyjna method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJednostkaOrganizacyjnaForArrayConstraintsFromSetJednostkaOrganizacyjna(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $setJednostkaOrganizacyjnaJednostkaOrganizacyjnaItem) {
            // validation for constraint: itemType
            if (!$setJednostkaOrganizacyjnaJednostkaOrganizacyjnaItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType) {
                $invalidValues[] = is_object($setJednostkaOrganizacyjnaJednostkaOrganizacyjnaItem) ? get_class($setJednostkaOrganizacyjnaJednostkaOrganizacyjnaItem) : sprintf('%s(%s)', gettype($setJednostkaOrganizacyjnaJednostkaOrganizacyjnaItem), var_export($setJednostkaOrganizacyjnaJednostkaOrganizacyjnaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The jednostkaOrganizacyjna property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set jednostkaOrganizacyjna value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[] $jednostkaOrganizacyjna
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SetJednostkaOrganizacyjna
     */
    public function setJednostkaOrganizacyjna(array $jednostkaOrganizacyjna = [])
    {
        // validation for constraint: array
        if ('' !== ($jednostkaOrganizacyjnaArrayErrorMessage = self::validateJednostkaOrganizacyjnaForArrayConstraintsFromSetJednostkaOrganizacyjna($jednostkaOrganizacyjna))) {
            throw new \InvalidArgumentException($jednostkaOrganizacyjnaArrayErrorMessage, __LINE__);
        }
        $this->jednostkaOrganizacyjna = $jednostkaOrganizacyjna;

        return $this;
    }

    /**
     * Add item to jednostkaOrganizacyjna value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SetJednostkaOrganizacyjna
     */
    public function addToJednostkaOrganizacyjna(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType) {
            throw new \InvalidArgumentException(sprintf('The jednostkaOrganizacyjna property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->jednostkaOrganizacyjna[] = $item;

        return $this;
    }
}
