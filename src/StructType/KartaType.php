<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kartaType StructType.
 */
class KartaType extends AbstractStructBase
{
    /**
     * The idKarta.
     *
     * @var int
     */
    public $idKarta;
    /**
     * The opis.
     *
     * @var string
     */
    public $opis;
    /**
     * The aktywna.
     *
     * @var bool
     */
    public $aktywna;

    /**
     * Constructor method for kartaType.
     *
     * @uses KartaType::setIdKarta()
     * @uses KartaType::setOpis()
     * @uses KartaType::setAktywna()
     *
     * @param int    $idKarta
     * @param string $opis
     * @param bool   $aktywna
     */
    public function __construct($idKarta = null, $opis = null, $aktywna = null)
    {
        $this
            ->setIdKarta($idKarta)
            ->setOpis($opis)
            ->setAktywna($aktywna);
    }

    /**
     * Get idKarta value.
     *
     * @return int|null
     */
    public function getIdKarta()
    {
        return $this->idKarta;
    }

    /**
     * Set idKarta value.
     *
     * @param int $idKarta
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KartaType
     */
    public function setIdKarta($idKarta = null)
    {
        // validation for constraint: int
        if (!is_null($idKarta) && !(is_int($idKarta) || ctype_digit($idKarta))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idKarta, true), gettype($idKarta)), __LINE__);
        }
        $this->idKarta = $idKarta;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KartaType
     */
    public function setOpis($opis = null)
    {
        // validation for constraint: string
        if (!is_null($opis) && !is_string($opis)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($opis, true), gettype($opis)), __LINE__);
        }
        $this->opis = $opis;

        return $this;
    }

    /**
     * Get aktywna value.
     *
     * @return bool|null
     */
    public function getAktywna()
    {
        return $this->aktywna;
    }

    /**
     * Set aktywna value.
     *
     * @param bool $aktywna
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KartaType
     */
    public function setAktywna($aktywna = null)
    {
        // validation for constraint: boolean
        if (!is_null($aktywna) && !is_bool($aktywna)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($aktywna, true), gettype($aktywna)), __LINE__);
        }
        $this->aktywna = $aktywna;

        return $this;
    }
}
