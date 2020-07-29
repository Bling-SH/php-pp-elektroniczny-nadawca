<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaEPOType StructType.
 */
class PrzesylkaEPOType extends AbstractStructBase
{
    /**
     * The EPOInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPOInfoType
     */
    public $EPOInfo;
    /**
     * The biometricSignatureContent
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var string
     */
    public $biometricSignatureContent;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - documentation: 10: First version (to September 2019) 20: Second version (since October 2019)
     * - base: xsd:int
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var int
     */
    public $version;
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - whiteSpace: collapse.
     *
     * @var string
     */
    public $guid;
    /**
     * The numerNadania
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minLength: 13.
     *
     * @var string
     */
    public $numerNadania;
    /**
     * The statusEPO.
     *
     * @var string
     */
    public $statusEPO;

    /**
     * Constructor method for przesylkaEPOType.
     *
     * @uses PrzesylkaEPOType::setEPOInfo()
     * @uses PrzesylkaEPOType::setBiometricSignatureContent()
     * @uses PrzesylkaEPOType::setVersion()
     * @uses PrzesylkaEPOType::setGuid()
     * @uses PrzesylkaEPOType::setNumerNadania()
     * @uses PrzesylkaEPOType::setStatusEPO()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPOInfoType $ePOInfo
     * @param string                                                          $biometricSignatureContent
     * @param int                                                             $version
     * @param string                                                          $guid
     * @param string                                                          $numerNadania
     * @param string                                                          $statusEPO
     */
    public function __construct(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPOInfoType $ePOInfo = null, $biometricSignatureContent = null, $version = null, $guid = null, $numerNadania = null, $statusEPO = null)
    {
        $this
            ->setEPOInfo($ePOInfo)
            ->setBiometricSignatureContent($biometricSignatureContent)
            ->setVersion($version)
            ->setGuid($guid)
            ->setNumerNadania($numerNadania)
            ->setStatusEPO($statusEPO);
    }

    /**
     * Get EPOInfo value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPOInfoType|null
     */
    public function getEPOInfo()
    {
        return $this->EPOInfo;
    }

    /**
     * Set EPOInfo value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPOInfoType $ePOInfo
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaEPOType
     */
    public function setEPOInfo(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPOInfoType $ePOInfo = null)
    {
        $this->EPOInfo = $ePOInfo;

        return $this;
    }

    /**
     * Get biometricSignatureContent value.
     *
     * @return string|null
     */
    public function getBiometricSignatureContent()
    {
        return $this->biometricSignatureContent;
    }

    /**
     * Set biometricSignatureContent value.
     *
     * @param string $biometricSignatureContent
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaEPOType
     */
    public function setBiometricSignatureContent($biometricSignatureContent = null)
    {
        // validation for constraint: string
        if (!is_null($biometricSignatureContent) && !is_string($biometricSignatureContent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($biometricSignatureContent, true), gettype($biometricSignatureContent)), __LINE__);
        }
        $this->biometricSignatureContent = $biometricSignatureContent;

        return $this;
    }

    /**
     * Get version value.
     *
     * @return int|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set version value.
     *
     * @param int $version
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaEPOType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: int
        if (!is_null($version) && !(is_int($version) || ctype_digit($version))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;

        return $this;
    }

    /**
     * Get guid value.
     *
     * @return string|null
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Set guid value.
     *
     * @param string $guid
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaEPOType
     */
    public function setGuid($guid = null)
    {
        // validation for constraint: string
        if (!is_null($guid) && !is_string($guid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guid, true), gettype($guid)), __LINE__);
        }
        // validation for constraint: length(32)
        if (!is_null($guid) && 32 !== mb_strlen($guid)) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 32', mb_strlen($guid)), __LINE__);
        }
        $this->guid = $guid;

        return $this;
    }

    /**
     * Get numerNadania value.
     *
     * @return string|null
     */
    public function getNumerNadania()
    {
        return $this->numerNadania;
    }

    /**
     * Set numerNadania value.
     *
     * @param string $numerNadania
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaEPOType
     */
    public function setNumerNadania($numerNadania = null)
    {
        // validation for constraint: string
        if (!is_null($numerNadania) && !is_string($numerNadania)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerNadania, true), gettype($numerNadania)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($numerNadania) && mb_strlen($numerNadania) > 20) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen($numerNadania)), __LINE__);
        }
        // validation for constraint: minLength(13)
        if (!is_null($numerNadania) && mb_strlen($numerNadania) < 13) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 13', mb_strlen($numerNadania)), __LINE__);
        }
        $this->numerNadania = $numerNadania;

        return $this;
    }

    /**
     * Get statusEPO value.
     *
     * @return string|null
     */
    public function getStatusEPO()
    {
        return $this->statusEPO;
    }

    /**
     * Set statusEPO value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\StatusEPOEnum::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\StatusEPOEnum::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $statusEPO
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaEPOType
     */
    public function setStatusEPO($statusEPO = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\StatusEPOEnum::valueIsValid($statusEPO)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\StatusEPOEnum', is_array($statusEPO) ? implode(', ', $statusEPO) : var_export($statusEPO, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\StatusEPOEnum::getValidValues())), __LINE__);
        }
        $this->statusEPO = $statusEPO;

        return $this;
    }
}
