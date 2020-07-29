<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for potwierdzenieDoreczeniaType StructType.
 */
class PotwierdzenieDoreczeniaType extends AbstractStructBase
{
    /**
     * The sposob.
     *
     * @var string
     */
    public $sposob;
    /**
     * The kontakt.
     *
     * @var string
     */
    public $kontakt;

    /**
     * Constructor method for potwierdzenieDoreczeniaType.
     *
     * @uses PotwierdzenieDoreczeniaType::setSposob()
     * @uses PotwierdzenieDoreczeniaType::setKontakt()
     *
     * @param string $sposob
     * @param string $kontakt
     */
    public function __construct($sposob = null, $kontakt = null)
    {
        $this
            ->setSposob($sposob)
            ->setKontakt($kontakt);
    }

    /**
     * Get sposob value.
     *
     * @return string|null
     */
    public function getSposob()
    {
        return $this->sposob;
    }

    /**
     * Set sposob value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\SposobDoreczeniaPotwierdzeniaType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\SposobDoreczeniaPotwierdzeniaType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $sposob
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType
     */
    public function setSposob($sposob = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\SposobDoreczeniaPotwierdzeniaType::valueIsValid($sposob)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\SposobDoreczeniaPotwierdzeniaType', is_array($sposob) ? implode(', ', $sposob) : var_export($sposob, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\SposobDoreczeniaPotwierdzeniaType::getValidValues())), __LINE__);
        }
        $this->sposob = $sposob;

        return $this;
    }

    /**
     * Get kontakt value.
     *
     * @return string|null
     */
    public function getKontakt()
    {
        return $this->kontakt;
    }

    /**
     * Set kontakt value.
     *
     * @param string $kontakt
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType
     */
    public function setKontakt($kontakt = null)
    {
        // validation for constraint: string
        if (!is_null($kontakt) && !is_string($kontakt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kontakt, true), gettype($kontakt)), __LINE__);
        }
        $this->kontakt = $kontakt;

        return $this;
    }
}
