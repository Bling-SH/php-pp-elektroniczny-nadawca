<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createProfil StructType.
 */
class CreateProfil extends AbstractStructBase
{
    /**
     * The profil
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType
     */
    public $profil;

    /**
     * Constructor method for createProfil.
     *
     * @uses CreateProfil::setProfil()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType $profil
     */
    public function __construct(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType $profil = null)
    {
        $this
            ->setProfil($profil);
    }

    /**
     * Get profil value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Set profil value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType $profil
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\CreateProfil
     */
    public function setProfil(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType $profil = null)
    {
        $this->profil = $profil;

        return $this;
    }
}
