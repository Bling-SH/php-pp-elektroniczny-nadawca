<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doreczenieUslugaPocztowaType StructType.
 */
class DoreczenieUslugaPocztowaType extends AbstractStructBase
{
    /**
     * The oczekiwanyTerminDoreczenia.
     *
     * @var string
     */
    public $oczekiwanyTerminDoreczenia;
    /**
     * The oczekiwanaGodzinaDoreczenia.
     *
     * @var string
     */
    public $oczekiwanaGodzinaDoreczenia;
    /**
     * The wSobote.
     *
     * @var bool
     */
    public $wSobote;
    /**
     * The doRakWlasnych.
     *
     * @var bool
     */
    public $doRakWlasnych;

    /**
     * Constructor method for doreczenieUslugaPocztowaType.
     *
     * @uses DoreczenieUslugaPocztowaType::setOczekiwanyTerminDoreczenia()
     * @uses DoreczenieUslugaPocztowaType::setOczekiwanaGodzinaDoreczenia()
     * @uses DoreczenieUslugaPocztowaType::setWSobote()
     * @uses DoreczenieUslugaPocztowaType::setDoRakWlasnych()
     *
     * @param string $oczekiwanyTerminDoreczenia
     * @param string $oczekiwanaGodzinaDoreczenia
     * @param bool   $wSobote
     * @param bool   $doRakWlasnych
     */
    public function __construct($oczekiwanyTerminDoreczenia = null, $oczekiwanaGodzinaDoreczenia = null, $wSobote = null, $doRakWlasnych = null)
    {
        $this
            ->setOczekiwanyTerminDoreczenia($oczekiwanyTerminDoreczenia)
            ->setOczekiwanaGodzinaDoreczenia($oczekiwanaGodzinaDoreczenia)
            ->setWSobote($wSobote)
            ->setDoRakWlasnych($doRakWlasnych);
    }

    /**
     * Get oczekiwanyTerminDoreczenia value.
     *
     * @return string|null
     */
    public function getOczekiwanyTerminDoreczenia()
    {
        return $this->oczekiwanyTerminDoreczenia;
    }

    /**
     * Set oczekiwanyTerminDoreczenia value.
     *
     * @param string $oczekiwanyTerminDoreczenia
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczenieUslugaPocztowaType
     */
    public function setOczekiwanyTerminDoreczenia($oczekiwanyTerminDoreczenia = null)
    {
        // validation for constraint: string
        if (!is_null($oczekiwanyTerminDoreczenia) && !is_string($oczekiwanyTerminDoreczenia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oczekiwanyTerminDoreczenia, true), gettype($oczekiwanyTerminDoreczenia)), __LINE__);
        }
        $this->oczekiwanyTerminDoreczenia = $oczekiwanyTerminDoreczenia;

        return $this;
    }

    /**
     * Get oczekiwanaGodzinaDoreczenia value.
     *
     * @return string|null
     */
    public function getOczekiwanaGodzinaDoreczenia()
    {
        return $this->oczekiwanaGodzinaDoreczenia;
    }

    /**
     * Set oczekiwanaGodzinaDoreczenia value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\OczekiwanaGodzinaDoreczeniaUslugiType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\OczekiwanaGodzinaDoreczeniaUslugiType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $oczekiwanaGodzinaDoreczenia
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczenieUslugaPocztowaType
     */
    public function setOczekiwanaGodzinaDoreczenia($oczekiwanaGodzinaDoreczenia = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\OczekiwanaGodzinaDoreczeniaUslugiType::valueIsValid($oczekiwanaGodzinaDoreczenia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\OczekiwanaGodzinaDoreczeniaUslugiType', is_array($oczekiwanaGodzinaDoreczenia) ? implode(', ', $oczekiwanaGodzinaDoreczenia) : var_export($oczekiwanaGodzinaDoreczenia, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\OczekiwanaGodzinaDoreczeniaUslugiType::getValidValues())), __LINE__);
        }
        $this->oczekiwanaGodzinaDoreczenia = $oczekiwanaGodzinaDoreczenia;

        return $this;
    }

    /**
     * Get wSobote value.
     *
     * @return bool|null
     */
    public function getWSobote()
    {
        return $this->wSobote;
    }

    /**
     * Set wSobote value.
     *
     * @param bool $wSobote
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczenieUslugaPocztowaType
     */
    public function setWSobote($wSobote = null)
    {
        // validation for constraint: boolean
        if (!is_null($wSobote) && !is_bool($wSobote)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($wSobote, true), gettype($wSobote)), __LINE__);
        }
        $this->wSobote = $wSobote;

        return $this;
    }

    /**
     * Get doRakWlasnych value.
     *
     * @return bool|null
     */
    public function getDoRakWlasnych()
    {
        return $this->doRakWlasnych;
    }

    /**
     * Set doRakWlasnych value.
     *
     * @param bool $doRakWlasnych
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczenieUslugaPocztowaType
     */
    public function setDoRakWlasnych($doRakWlasnych = null)
    {
        // validation for constraint: boolean
        if (!is_null($doRakWlasnych) && !is_bool($doRakWlasnych)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($doRakWlasnych, true), gettype($doRakWlasnych)), __LINE__);
        }
        $this->doRakWlasnych = $doRakWlasnych;

        return $this;
    }
}
