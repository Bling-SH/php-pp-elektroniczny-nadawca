<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for opakowanieType StructType.
 */
class OpakowanieType extends AbstractStructBase
{
    /**
     * The opakowanieGuid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - whiteSpace: collapse.
     *
     * @var string
     */
    public $opakowanieGuid;
    /**
     * The typ.
     *
     * @var string
     */
    public $typ;
    /**
     * The sygnatura.
     *
     * @var string
     */
    public $sygnatura;
    /**
     * The ilosc.
     *
     * @var int
     */
    public $ilosc;
    /**
     * The numerOpakowaniaZbiorczego.
     *
     * @var string
     */
    public $numerOpakowaniaZbiorczego;

    /**
     * Constructor method for opakowanieType.
     *
     * @uses OpakowanieType::setOpakowanieGuid()
     * @uses OpakowanieType::setTyp()
     * @uses OpakowanieType::setSygnatura()
     * @uses OpakowanieType::setIlosc()
     * @uses OpakowanieType::setNumerOpakowaniaZbiorczego()
     *
     * @param string $opakowanieGuid
     * @param string $typ
     * @param string $sygnatura
     * @param int    $ilosc
     * @param string $numerOpakowaniaZbiorczego
     */
    public function __construct($opakowanieGuid = null, $typ = null, $sygnatura = null, $ilosc = null, $numerOpakowaniaZbiorczego = null)
    {
        $this
            ->setOpakowanieGuid($opakowanieGuid)
            ->setTyp($typ)
            ->setSygnatura($sygnatura)
            ->setIlosc($ilosc)
            ->setNumerOpakowaniaZbiorczego($numerOpakowaniaZbiorczego);
    }

    /**
     * Get opakowanieGuid value.
     *
     * @return string|null
     */
    public function getOpakowanieGuid()
    {
        return $this->opakowanieGuid;
    }

    /**
     * Set opakowanieGuid value.
     *
     * @param string $opakowanieGuid
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OpakowanieType
     */
    public function setOpakowanieGuid($opakowanieGuid = null)
    {
        // validation for constraint: string
        if (!is_null($opakowanieGuid) && !is_string($opakowanieGuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($opakowanieGuid, true), gettype($opakowanieGuid)), __LINE__);
        }
        // validation for constraint: length(32)
        if (!is_null($opakowanieGuid) && 32 !== mb_strlen($opakowanieGuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 32', mb_strlen($opakowanieGuid)), __LINE__);
        }
        $this->opakowanieGuid = $opakowanieGuid;

        return $this;
    }

    /**
     * Get typ value.
     *
     * @return string|null
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * Set typ value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\TypOpakowanieType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\TypOpakowanieType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $typ
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OpakowanieType
     */
    public function setTyp($typ = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\TypOpakowanieType::valueIsValid($typ)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\TypOpakowanieType', is_array($typ) ? implode(', ', $typ) : var_export($typ, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\TypOpakowanieType::getValidValues())), __LINE__);
        }
        $this->typ = $typ;

        return $this;
    }

    /**
     * Get sygnatura value.
     *
     * @return string|null
     */
    public function getSygnatura()
    {
        return $this->sygnatura;
    }

    /**
     * Set sygnatura value.
     *
     * @param string $sygnatura
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OpakowanieType
     */
    public function setSygnatura($sygnatura = null)
    {
        // validation for constraint: string
        if (!is_null($sygnatura) && !is_string($sygnatura)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sygnatura, true), gettype($sygnatura)), __LINE__);
        }
        $this->sygnatura = $sygnatura;

        return $this;
    }

    /**
     * Get ilosc value.
     *
     * @return int|null
     */
    public function getIlosc()
    {
        return $this->ilosc;
    }

    /**
     * Set ilosc value.
     *
     * @param int $ilosc
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OpakowanieType
     */
    public function setIlosc($ilosc = null)
    {
        // validation for constraint: int
        if (!is_null($ilosc) && !(is_int($ilosc) || ctype_digit($ilosc))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ilosc, true), gettype($ilosc)), __LINE__);
        }
        $this->ilosc = $ilosc;

        return $this;
    }

    /**
     * Get numerOpakowaniaZbiorczego value.
     *
     * @return string|null
     */
    public function getNumerOpakowaniaZbiorczego()
    {
        return $this->numerOpakowaniaZbiorczego;
    }

    /**
     * Set numerOpakowaniaZbiorczego value.
     *
     * @param string $numerOpakowaniaZbiorczego
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OpakowanieType
     */
    public function setNumerOpakowaniaZbiorczego($numerOpakowaniaZbiorczego = null)
    {
        // validation for constraint: string
        if (!is_null($numerOpakowaniaZbiorczego) && !is_string($numerOpakowaniaZbiorczego)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerOpakowaniaZbiorczego, true), gettype($numerOpakowaniaZbiorczego)), __LINE__);
        }
        $this->numerOpakowaniaZbiorczego = $numerOpakowaniaZbiorczego;

        return $this;
    }
}
