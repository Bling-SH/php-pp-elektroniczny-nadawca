<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wplataCKPType StructType.
 */
class WplataCKPType extends AbstractStructBase
{
    /**
     * The unikalnyIdentyfikatorWplaty
     * Meta information extracted from the WSDL
     * - use: required.
     *
     * @var string
     */
    public $unikalnyIdentyfikatorWplaty;
    /**
     * The numerNadania
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minLength: 13
     * - use: required.
     *
     * @var string
     */
    public $numerNadania;
    /**
     * The kwota
     * Meta information extracted from the WSDL
     * - documentation: Kwota w groszach
     * - use: required.
     *
     * @var int
     */
    public $kwota;
    /**
     * The dataPobrania
     * Meta information extracted from the WSDL
     * - use: required.
     *
     * @var string
     */
    public $dataPobrania;
    /**
     * The idUmowy
     * Meta information extracted from the WSDL
     * - use: required.
     *
     * @var int
     */
    public $idUmowy;
    /**
     * The tytulPrzelewuZbiorczego
     * Meta information extracted from the WSDL
     * - use: required.
     *
     * @var string
     */
    public $tytulPrzelewuZbiorczego;
    /**
     * The dataPrzelewu
     * Meta information extracted from the WSDL
     * - use: optional.
     *
     * @var string
     */
    public $dataPrzelewu;

    /**
     * Constructor method for wplataCKPType.
     *
     * @uses WplataCKPType::setUnikalnyIdentyfikatorWplaty()
     * @uses WplataCKPType::setNumerNadania()
     * @uses WplataCKPType::setKwota()
     * @uses WplataCKPType::setDataPobrania()
     * @uses WplataCKPType::setIdUmowy()
     * @uses WplataCKPType::setTytulPrzelewuZbiorczego()
     * @uses WplataCKPType::setDataPrzelewu()
     *
     * @param string $unikalnyIdentyfikatorWplaty
     * @param string $numerNadania
     * @param int    $kwota
     * @param string $dataPobrania
     * @param int    $idUmowy
     * @param string $tytulPrzelewuZbiorczego
     * @param string $dataPrzelewu
     */
    public function __construct($unikalnyIdentyfikatorWplaty = null, $numerNadania = null, $kwota = null, $dataPobrania = null, $idUmowy = null, $tytulPrzelewuZbiorczego = null, $dataPrzelewu = null)
    {
        $this
            ->setUnikalnyIdentyfikatorWplaty($unikalnyIdentyfikatorWplaty)
            ->setNumerNadania($numerNadania)
            ->setKwota($kwota)
            ->setDataPobrania($dataPobrania)
            ->setIdUmowy($idUmowy)
            ->setTytulPrzelewuZbiorczego($tytulPrzelewuZbiorczego)
            ->setDataPrzelewu($dataPrzelewu);
    }

    /**
     * Get unikalnyIdentyfikatorWplaty value.
     *
     * @return string
     */
    public function getUnikalnyIdentyfikatorWplaty()
    {
        return $this->unikalnyIdentyfikatorWplaty;
    }

    /**
     * Set unikalnyIdentyfikatorWplaty value.
     *
     * @param string $unikalnyIdentyfikatorWplaty
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\WplataCKPType
     */
    public function setUnikalnyIdentyfikatorWplaty($unikalnyIdentyfikatorWplaty = null)
    {
        // validation for constraint: string
        if (!is_null($unikalnyIdentyfikatorWplaty) && !is_string($unikalnyIdentyfikatorWplaty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unikalnyIdentyfikatorWplaty, true), gettype($unikalnyIdentyfikatorWplaty)), __LINE__);
        }
        $this->unikalnyIdentyfikatorWplaty = $unikalnyIdentyfikatorWplaty;

        return $this;
    }

    /**
     * Get numerNadania value.
     *
     * @return string
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\WplataCKPType
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
     * Get kwota value.
     *
     * @return int
     */
    public function getKwota()
    {
        return $this->kwota;
    }

    /**
     * Set kwota value.
     *
     * @param int $kwota
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\WplataCKPType
     */
    public function setKwota($kwota = null)
    {
        // validation for constraint: int
        if (!is_null($kwota) && !(is_int($kwota) || ctype_digit($kwota))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($kwota, true), gettype($kwota)), __LINE__);
        }
        $this->kwota = $kwota;

        return $this;
    }

    /**
     * Get dataPobrania value.
     *
     * @return string
     */
    public function getDataPobrania()
    {
        return $this->dataPobrania;
    }

    /**
     * Set dataPobrania value.
     *
     * @param string $dataPobrania
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\WplataCKPType
     */
    public function setDataPobrania($dataPobrania = null)
    {
        // validation for constraint: string
        if (!is_null($dataPobrania) && !is_string($dataPobrania)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataPobrania, true), gettype($dataPobrania)), __LINE__);
        }
        $this->dataPobrania = $dataPobrania;

        return $this;
    }

    /**
     * Get idUmowy value.
     *
     * @return int
     */
    public function getIdUmowy()
    {
        return $this->idUmowy;
    }

    /**
     * Set idUmowy value.
     *
     * @param int $idUmowy
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\WplataCKPType
     */
    public function setIdUmowy($idUmowy = null)
    {
        // validation for constraint: int
        if (!is_null($idUmowy) && !(is_int($idUmowy) || ctype_digit($idUmowy))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idUmowy, true), gettype($idUmowy)), __LINE__);
        }
        $this->idUmowy = $idUmowy;

        return $this;
    }

    /**
     * Get tytulPrzelewuZbiorczego value.
     *
     * @return string
     */
    public function getTytulPrzelewuZbiorczego()
    {
        return $this->tytulPrzelewuZbiorczego;
    }

    /**
     * Set tytulPrzelewuZbiorczego value.
     *
     * @param string $tytulPrzelewuZbiorczego
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\WplataCKPType
     */
    public function setTytulPrzelewuZbiorczego($tytulPrzelewuZbiorczego = null)
    {
        // validation for constraint: string
        if (!is_null($tytulPrzelewuZbiorczego) && !is_string($tytulPrzelewuZbiorczego)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tytulPrzelewuZbiorczego, true), gettype($tytulPrzelewuZbiorczego)), __LINE__);
        }
        $this->tytulPrzelewuZbiorczego = $tytulPrzelewuZbiorczego;

        return $this;
    }

    /**
     * Get dataPrzelewu value.
     *
     * @return string|null
     */
    public function getDataPrzelewu()
    {
        return $this->dataPrzelewu;
    }

    /**
     * Set dataPrzelewu value.
     *
     * @param string $dataPrzelewu
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\WplataCKPType
     */
    public function setDataPrzelewu($dataPrzelewu = null)
    {
        // validation for constraint: string
        if (!is_null($dataPrzelewu) && !is_string($dataPrzelewu)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataPrzelewu, true), gettype($dataPrzelewu)), __LINE__);
        }
        $this->dataPrzelewu = $dataPrzelewu;

        return $this;
    }
}
