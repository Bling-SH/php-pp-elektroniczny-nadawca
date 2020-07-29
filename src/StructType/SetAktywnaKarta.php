<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for setAktywnaKarta StructType.
 */
class SetAktywnaKarta extends AbstractStructBase
{
    /**
     * The idKarta
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var int
     */
    public $idKarta;

    /**
     * Constructor method for setAktywnaKarta.
     *
     * @uses SetAktywnaKarta::setIdKarta()
     *
     * @param int $idKarta
     */
    public function __construct($idKarta = null)
    {
        $this
            ->setIdKarta($idKarta);
    }

    /**
     * Get idKarta value.
     *
     * @return int
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SetAktywnaKarta
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
}
