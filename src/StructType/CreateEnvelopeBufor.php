<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createEnvelopeBufor StructType.
 */
class CreateEnvelopeBufor extends AbstractStructBase
{
    /**
     * The bufor
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType[]
     */
    public $bufor;

    /**
     * Constructor method for createEnvelopeBufor.
     *
     * @uses CreateEnvelopeBufor::setBufor()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType[] $bufor
     */
    public function __construct(array $bufor = [])
    {
        $this
            ->setBufor($bufor);
    }

    /**
     * Get bufor value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType[]
     */
    public function getBufor()
    {
        return $this->bufor;
    }

    /**
     * This method is responsible for validating the values passed to the setBufor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBufor method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBuforForArrayConstraintsFromSetBufor(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $createEnvelopeBuforBuforItem) {
            // validation for constraint: itemType
            if (!$createEnvelopeBuforBuforItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType) {
                $invalidValues[] = is_object($createEnvelopeBuforBuforItem) ? get_class($createEnvelopeBuforBuforItem) : sprintf('%s(%s)', gettype($createEnvelopeBuforBuforItem), var_export($createEnvelopeBuforBuforItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The bufor property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set bufor value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType[] $bufor
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\CreateEnvelopeBufor
     */
    public function setBufor(array $bufor = [])
    {
        // validation for constraint: array
        if ('' !== ($buforArrayErrorMessage = self::validateBuforForArrayConstraintsFromSetBufor($bufor))) {
            throw new \InvalidArgumentException($buforArrayErrorMessage, __LINE__);
        }
        $this->bufor = $bufor;

        return $this;
    }

    /**
     * Add item to bufor value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\CreateEnvelopeBufor
     */
    public function addToBufor(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType) {
            throw new \InvalidArgumentException(sprintf('The bufor property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->bufor[] = $item;

        return $this;
    }
}
