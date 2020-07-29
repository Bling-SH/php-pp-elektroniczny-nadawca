<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for powodSzczegolowyType StructType.
 */
class PowodSzczegolowyType extends AbstractStructBase
{
    /**
     * The idPowodSzczegolowy.
     *
     * @var int
     */
    public $idPowodSzczegolowy;
    /**
     * The powodSzczegolowyOpis.
     *
     * @var string
     */
    public $powodSzczegolowyOpis;

    /**
     * Constructor method for powodSzczegolowyType.
     *
     * @uses PowodSzczegolowyType::setIdPowodSzczegolowy()
     * @uses PowodSzczegolowyType::setPowodSzczegolowyOpis()
     *
     * @param int    $idPowodSzczegolowy
     * @param string $powodSzczegolowyOpis
     */
    public function __construct($idPowodSzczegolowy = null, $powodSzczegolowyOpis = null)
    {
        $this
            ->setIdPowodSzczegolowy($idPowodSzczegolowy)
            ->setPowodSzczegolowyOpis($powodSzczegolowyOpis);
    }

    /**
     * Get idPowodSzczegolowy value.
     *
     * @return int|null
     */
    public function getIdPowodSzczegolowy()
    {
        return $this->idPowodSzczegolowy;
    }

    /**
     * Set idPowodSzczegolowy value.
     *
     * @param int $idPowodSzczegolowy
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PowodSzczegolowyType
     */
    public function setIdPowodSzczegolowy($idPowodSzczegolowy = null)
    {
        // validation for constraint: int
        if (!is_null($idPowodSzczegolowy) && !(is_int($idPowodSzczegolowy) || ctype_digit($idPowodSzczegolowy))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idPowodSzczegolowy, true), gettype($idPowodSzczegolowy)), __LINE__);
        }
        $this->idPowodSzczegolowy = $idPowodSzczegolowy;

        return $this;
    }

    /**
     * Get powodSzczegolowyOpis value.
     *
     * @return string|null
     */
    public function getPowodSzczegolowyOpis()
    {
        return $this->powodSzczegolowyOpis;
    }

    /**
     * Set powodSzczegolowyOpis value.
     *
     * @param string $powodSzczegolowyOpis
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PowodSzczegolowyType
     */
    public function setPowodSzczegolowyOpis($powodSzczegolowyOpis = null)
    {
        // validation for constraint: string
        if (!is_null($powodSzczegolowyOpis) && !is_string($powodSzczegolowyOpis)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($powodSzczegolowyOpis, true), gettype($powodSzczegolowyOpis)), __LINE__);
        }
        $this->powodSzczegolowyOpis = $powodSzczegolowyOpis;

        return $this;
    }
}
