<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for buforType StructType.
 */
class BuforType extends AbstractStructBase
{
    /**
     * The profil
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType
     */
    public $profil;
    /**
     * The idBufor.
     *
     * @var int
     */
    public $idBufor;
    /**
     * The dataNadania.
     *
     * @var string
     */
    public $dataNadania;
    /**
     * The urzadNadania
     * Meta information extracted from the WSDL
     * - base: xsd:int.
     *
     * @var int
     */
    public $urzadNadania;
    /**
     * The active.
     *
     * @var bool
     */
    public $active;
    /**
     * The opis.
     *
     * @var string
     */
    public $opis;
    /**
     * The aktualizujPlanowanaDateNadaniaPrzesylek
     * Meta information extracted from the WSDL
     * - documentation: W przypadku ustawienia TRUE zostaną zmodyfikowane planowane daty nadania dla przesyłek znajdujących się w aktualizowanym buforze.Dla przesyłek dla których wcześniej pobrano etykietę adresową zostaną wygenerowane nowe
     * przesyłki z identycznymi parametrami jednak z NOWYM numerem nadania i GUID.Przesyłki pierwotne (tzn. te dla których pobrano wcześniej etykiety adresowe) nie będą już dostępne.W przypadku ustawienia FALSE lub nie przekazania tego atrybutu,
     * planowane daty nadania przesyłek nie będą modyfikowane.
     * - use: optional.
     *
     * @var bool
     */
    public $aktualizujPlanowanaDateNadaniaPrzesylek;

    /**
     * Constructor method for buforType.
     *
     * @uses BuforType::setProfil()
     * @uses BuforType::setIdBufor()
     * @uses BuforType::setDataNadania()
     * @uses BuforType::setUrzadNadania()
     * @uses BuforType::setActive()
     * @uses BuforType::setOpis()
     * @uses BuforType::setAktualizujPlanowanaDateNadaniaPrzesylek()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType $profil
     * @param int                                                            $idBufor
     * @param string                                                         $dataNadania
     * @param int                                                            $urzadNadania
     * @param bool                                                           $active
     * @param string                                                         $opis
     * @param bool                                                           $aktualizujPlanowanaDateNadaniaPrzesylek
     */
    public function __construct(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType $profil = null, $idBufor = null, $dataNadania = null, $urzadNadania = null, $active = null, $opis = null, $aktualizujPlanowanaDateNadaniaPrzesylek = null)
    {
        $this
            ->setProfil($profil)
            ->setIdBufor($idBufor)
            ->setDataNadania($dataNadania)
            ->setUrzadNadania($urzadNadania)
            ->setActive($active)
            ->setOpis($opis)
            ->setAktualizujPlanowanaDateNadaniaPrzesylek($aktualizujPlanowanaDateNadaniaPrzesylek);
    }

    /**
     * Get profil value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType|null
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType
     */
    public function setProfil(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType $profil = null)
    {
        $this->profil = $profil;

        return $this;
    }

    /**
     * Get idBufor value.
     *
     * @return int|null
     */
    public function getIdBufor()
    {
        return $this->idBufor;
    }

    /**
     * Set idBufor value.
     *
     * @param int $idBufor
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType
     */
    public function setIdBufor($idBufor = null)
    {
        // validation for constraint: int
        if (!is_null($idBufor) && !(is_int($idBufor) || ctype_digit($idBufor))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idBufor, true), gettype($idBufor)), __LINE__);
        }
        $this->idBufor = $idBufor;

        return $this;
    }

    /**
     * Get dataNadania value.
     *
     * @return string|null
     */
    public function getDataNadania()
    {
        return $this->dataNadania;
    }

    /**
     * Set dataNadania value.
     *
     * @param string $dataNadania
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType
     */
    public function setDataNadania($dataNadania = null)
    {
        // validation for constraint: string
        if (!is_null($dataNadania) && !is_string($dataNadania)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataNadania, true), gettype($dataNadania)), __LINE__);
        }
        $this->dataNadania = $dataNadania;

        return $this;
    }

    /**
     * Get urzadNadania value.
     *
     * @return int|null
     */
    public function getUrzadNadania()
    {
        return $this->urzadNadania;
    }

    /**
     * Set urzadNadania value.
     *
     * @param int $urzadNadania
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType
     */
    public function setUrzadNadania($urzadNadania = null)
    {
        // validation for constraint: int
        if (!is_null($urzadNadania) && !(is_int($urzadNadania) || ctype_digit($urzadNadania))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($urzadNadania, true), gettype($urzadNadania)), __LINE__);
        }
        $this->urzadNadania = $urzadNadania;

        return $this;
    }

    /**
     * Get active value.
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set active value.
     *
     * @param bool $active
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType
     */
    public function setActive($active = null)
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($active, true), gettype($active)), __LINE__);
        }
        $this->active = $active;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType
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
     * Get aktualizujPlanowanaDateNadaniaPrzesylek value.
     *
     * @return bool|null
     */
    public function getAktualizujPlanowanaDateNadaniaPrzesylek()
    {
        return $this->aktualizujPlanowanaDateNadaniaPrzesylek;
    }

    /**
     * Set aktualizujPlanowanaDateNadaniaPrzesylek value.
     *
     * @param bool $aktualizujPlanowanaDateNadaniaPrzesylek
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\BuforType
     */
    public function setAktualizujPlanowanaDateNadaniaPrzesylek($aktualizujPlanowanaDateNadaniaPrzesylek = null)
    {
        // validation for constraint: boolean
        if (!is_null($aktualizujPlanowanaDateNadaniaPrzesylek) && !is_bool($aktualizujPlanowanaDateNadaniaPrzesylek)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($aktualizujPlanowanaDateNadaniaPrzesylek, true), gettype($aktualizujPlanowanaDateNadaniaPrzesylek)), __LINE__);
        }
        $this->aktualizujPlanowanaDateNadaniaPrzesylek = $aktualizujPlanowanaDateNadaniaPrzesylek;

        return $this;
    }
}
