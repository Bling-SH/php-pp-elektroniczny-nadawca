<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

/**
 * This class stands for profilType StructType.
 */
class ProfilType extends AdresType
{
    /**
     * The idProfil.
     *
     * @var int
     */
    public $idProfil;
    /**
     * The nazwaSkrocona.
     *
     * @var string
     */
    public $nazwaSkrocona;
    /**
     * The fax.
     *
     * @var string
     */
    public $fax;

    /**
     * Constructor method for profilType.
     *
     * @uses ProfilType::setIdProfil()
     * @uses ProfilType::setNazwaSkrocona()
     * @uses ProfilType::setFax()
     *
     * @param int    $idProfil
     * @param string $nazwaSkrocona
     * @param string $fax
     */
    public function __construct($idProfil = null, $nazwaSkrocona = null, $fax = null)
    {
        $this
            ->setIdProfil($idProfil)
            ->setNazwaSkrocona($nazwaSkrocona)
            ->setFax($fax);
    }

    /**
     * Get idProfil value.
     *
     * @return int|null
     */
    public function getIdProfil()
    {
        return $this->idProfil;
    }

    /**
     * Set idProfil value.
     *
     * @param int $idProfil
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType
     */
    public function setIdProfil($idProfil = null)
    {
        // validation for constraint: int
        if (!is_null($idProfil) && !(is_int($idProfil) || ctype_digit($idProfil))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idProfil, true), gettype($idProfil)), __LINE__);
        }
        $this->idProfil = $idProfil;

        return $this;
    }

    /**
     * Get nazwaSkrocona value.
     *
     * @return string|null
     */
    public function getNazwaSkrocona()
    {
        return $this->nazwaSkrocona;
    }

    /**
     * Set nazwaSkrocona value.
     *
     * @param string $nazwaSkrocona
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType
     */
    public function setNazwaSkrocona($nazwaSkrocona = null)
    {
        // validation for constraint: string
        if (!is_null($nazwaSkrocona) && !is_string($nazwaSkrocona)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nazwaSkrocona, true), gettype($nazwaSkrocona)), __LINE__);
        }
        $this->nazwaSkrocona = $nazwaSkrocona;

        return $this;
    }

    /**
     * Get fax value.
     *
     * @return string|null
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set fax value.
     *
     * @param string $fax
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType
     */
    public function setFax($fax = null)
    {
        // validation for constraint: string
        if (!is_null($fax) && !is_string($fax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fax, true), gettype($fax)), __LINE__);
        }
        $this->fax = $fax;

        return $this;
    }
}
