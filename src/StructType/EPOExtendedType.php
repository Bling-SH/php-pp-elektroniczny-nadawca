<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

/**
 * This class stands for EPOExtendedType StructType
 * Meta information extracted from the WSDL
 * - documentation: atrybut zasadySpecjalne zostanie usunięty z EPOExtendedType do końca 2016 roku.
 */
class EPOExtendedType extends EPOType
{
    /**
     * The zasadySpecjalne.
     *
     * @var string
     */
    public $zasadySpecjalne;

    /**
     * Constructor method for EPOExtendedType.
     *
     * @uses EPOExtendedType::setZasadySpecjalne()
     *
     * @param string $zasadySpecjalne
     */
    public function __construct($zasadySpecjalne = null)
    {
        $this
            ->setZasadySpecjalne($zasadySpecjalne);
    }

    /**
     * Get zasadySpecjalne value.
     *
     * @return string|null
     */
    public function getZasadySpecjalne()
    {
        return $this->zasadySpecjalne;
    }

    /**
     * Set zasadySpecjalne value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ZasadySpecjalneEnum::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ZasadySpecjalneEnum::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $zasadySpecjalne
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPOExtendedType
     */
    public function setZasadySpecjalne($zasadySpecjalne = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ZasadySpecjalneEnum::valueIsValid($zasadySpecjalne)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ZasadySpecjalneEnum', is_array($zasadySpecjalne) ? implode(', ', $zasadySpecjalne) : var_export($zasadySpecjalne, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ZasadySpecjalneEnum::getValidValues())), __LINE__);
        }
        $this->zasadySpecjalne = $zasadySpecjalne;

        return $this;
    }
}
