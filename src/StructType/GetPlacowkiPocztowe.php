<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPlacowkiPocztowe StructType.
 */
class GetPlacowkiPocztowe extends AbstractStructBase
{
    /**
     * The idWojewodztwo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var string
     */
    public $idWojewodztwo;

    /**
     * Constructor method for getPlacowkiPocztowe.
     *
     * @uses GetPlacowkiPocztowe::setIdWojewodztwo()
     *
     * @param string $idWojewodztwo
     */
    public function __construct($idWojewodztwo = null)
    {
        $this
            ->setIdWojewodztwo($idWojewodztwo);
    }

    /**
     * Get idWojewodztwo value.
     *
     * @return string
     */
    public function getIdWojewodztwo()
    {
        return $this->idWojewodztwo;
    }

    /**
     * Set idWojewodztwo value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\IdWojewodztwoType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\IdWojewodztwoType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $idWojewodztwo
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetPlacowkiPocztowe
     */
    public function setIdWojewodztwo($idWojewodztwo = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\IdWojewodztwoType::valueIsValid($idWojewodztwo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\IdWojewodztwoType', is_array($idWojewodztwo) ? implode(', ', $idWojewodztwo) : var_export($idWojewodztwo, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\IdWojewodztwoType::getValidValues())), __LINE__);
        }
        $this->idWojewodztwo = $idWojewodztwo;

        return $this;
    }
}
