<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaType StructType.
 */
abstract class PrzesylkaType extends AbstractStructBase
{
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - use: required
     * - whiteSpace: collapse.
     *
     * @var string
     */
    public $guid;
    /**
     * The pakietGuid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - whiteSpace: collapse.
     *
     * @var string
     */
    public $pakietGuid;
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
     * The opis
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 500
     * - whiteSpace: collapse.
     *
     * @var string
     */
    public $opis;

    /**
     * Constructor method for przesylkaType.
     *
     * @uses PrzesylkaType::setGuid()
     * @uses PrzesylkaType::setPakietGuid()
     * @uses PrzesylkaType::setOpakowanieGuid()
     * @uses PrzesylkaType::setOpis()
     *
     * @param string $guid
     * @param string $pakietGuid
     * @param string $opakowanieGuid
     * @param string $opis
     */
    public function __construct($guid = null, $pakietGuid = null, $opakowanieGuid = null, $opis = null)
    {
        $this
            ->setGuid($guid)
            ->setPakietGuid($pakietGuid)
            ->setOpakowanieGuid($opakowanieGuid)
            ->setOpis($opis);
    }

    /**
     * Get guid value.
     *
     * @return string
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType
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
     * Get pakietGuid value.
     *
     * @return string|null
     */
    public function getPakietGuid()
    {
        return $this->pakietGuid;
    }

    /**
     * Set pakietGuid value.
     *
     * @param string $pakietGuid
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType
     */
    public function setPakietGuid($pakietGuid = null)
    {
        // validation for constraint: string
        if (!is_null($pakietGuid) && !is_string($pakietGuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pakietGuid, true), gettype($pakietGuid)), __LINE__);
        }
        // validation for constraint: length(32)
        if (!is_null($pakietGuid) && 32 !== mb_strlen($pakietGuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 32', mb_strlen($pakietGuid)), __LINE__);
        }
        $this->pakietGuid = $pakietGuid;

        return $this;
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType
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
     * Get opis value.
     *
     * @return string|null
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * Set opis value.
     *
     * @param string $opis
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaType
     */
    public function setOpis($opis = null)
    {
        // validation for constraint: string
        if (!is_null($opis) && !is_string($opis)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($opis, true), gettype($opis)), __LINE__);
        }
        // validation for constraint: maxLength(500)
        if (!is_null($opis) && mb_strlen($opis) > 500) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 500', mb_strlen($opis)), __LINE__);
        }
        $this->opis = $opis;

        return $this;
    }
}
