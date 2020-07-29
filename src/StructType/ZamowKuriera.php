<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zamowKuriera StructType.
 */
class ZamowKuriera extends AbstractStructBase
{
    /**
     * The miejsceOdbioru
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType
     */
    public $miejsceOdbioru;
    /**
     * The oczekiwanaDataOdbioru
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var string
     */
    public $oczekiwanaDataOdbioru;
    /**
     * The oczekiwanaGodzinaOdbioru
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var string
     */
    public $oczekiwanaGodzinaOdbioru;
    /**
     * The szacowanaIloscPrzeslek
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var string
     */
    public $szacowanaIloscPrzeslek;
    /**
     * The szacowanaLacznaMasaPrzesylek
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var string
     */
    public $szacowanaLacznaMasaPrzesylek;
    /**
     * The nadawca
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType
     */
    public $nadawca;

    /**
     * Constructor method for zamowKuriera.
     *
     * @uses ZamowKuriera::setMiejsceOdbioru()
     * @uses ZamowKuriera::setOczekiwanaDataOdbioru()
     * @uses ZamowKuriera::setOczekiwanaGodzinaOdbioru()
     * @uses ZamowKuriera::setSzacowanaIloscPrzeslek()
     * @uses ZamowKuriera::setSzacowanaLacznaMasaPrzesylek()
     * @uses ZamowKuriera::setNadawca()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $miejsceOdbioru
     * @param string                                                        $oczekiwanaDataOdbioru
     * @param string                                                        $oczekiwanaGodzinaOdbioru
     * @param string                                                        $szacowanaIloscPrzeslek
     * @param string                                                        $szacowanaLacznaMasaPrzesylek
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $nadawca
     */
    public function __construct(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $miejsceOdbioru = null, $oczekiwanaDataOdbioru = null, $oczekiwanaGodzinaOdbioru = null, $szacowanaIloscPrzeslek = null, $szacowanaLacznaMasaPrzesylek = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $nadawca = null)
    {
        $this
            ->setMiejsceOdbioru($miejsceOdbioru)
            ->setOczekiwanaDataOdbioru($oczekiwanaDataOdbioru)
            ->setOczekiwanaGodzinaOdbioru($oczekiwanaGodzinaOdbioru)
            ->setSzacowanaIloscPrzeslek($szacowanaIloscPrzeslek)
            ->setSzacowanaLacznaMasaPrzesylek($szacowanaLacznaMasaPrzesylek)
            ->setNadawca($nadawca);
    }

    /**
     * Get miejsceOdbioru value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType
     */
    public function getMiejsceOdbioru()
    {
        return $this->miejsceOdbioru;
    }

    /**
     * Set miejsceOdbioru value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $miejsceOdbioru
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZamowKuriera
     */
    public function setMiejsceOdbioru(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $miejsceOdbioru = null)
    {
        $this->miejsceOdbioru = $miejsceOdbioru;

        return $this;
    }

    /**
     * Get oczekiwanaDataOdbioru value.
     *
     * @return string
     */
    public function getOczekiwanaDataOdbioru()
    {
        return $this->oczekiwanaDataOdbioru;
    }

    /**
     * Set oczekiwanaDataOdbioru value.
     *
     * @param string $oczekiwanaDataOdbioru
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZamowKuriera
     */
    public function setOczekiwanaDataOdbioru($oczekiwanaDataOdbioru = null)
    {
        // validation for constraint: string
        if (!is_null($oczekiwanaDataOdbioru) && !is_string($oczekiwanaDataOdbioru)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oczekiwanaDataOdbioru, true), gettype($oczekiwanaDataOdbioru)), __LINE__);
        }
        $this->oczekiwanaDataOdbioru = $oczekiwanaDataOdbioru;

        return $this;
    }

    /**
     * Get oczekiwanaGodzinaOdbioru value.
     *
     * @return string
     */
    public function getOczekiwanaGodzinaOdbioru()
    {
        return $this->oczekiwanaGodzinaOdbioru;
    }

    /**
     * Set oczekiwanaGodzinaOdbioru value.
     *
     * @param string $oczekiwanaGodzinaOdbioru
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZamowKuriera
     */
    public function setOczekiwanaGodzinaOdbioru($oczekiwanaGodzinaOdbioru = null)
    {
        // validation for constraint: string
        if (!is_null($oczekiwanaGodzinaOdbioru) && !is_string($oczekiwanaGodzinaOdbioru)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oczekiwanaGodzinaOdbioru, true), gettype($oczekiwanaGodzinaOdbioru)), __LINE__);
        }
        $this->oczekiwanaGodzinaOdbioru = $oczekiwanaGodzinaOdbioru;

        return $this;
    }

    /**
     * Get szacowanaIloscPrzeslek value.
     *
     * @return string
     */
    public function getSzacowanaIloscPrzeslek()
    {
        return $this->szacowanaIloscPrzeslek;
    }

    /**
     * Set szacowanaIloscPrzeslek value.
     *
     * @param string $szacowanaIloscPrzeslek
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZamowKuriera
     */
    public function setSzacowanaIloscPrzeslek($szacowanaIloscPrzeslek = null)
    {
        // validation for constraint: string
        if (!is_null($szacowanaIloscPrzeslek) && !is_string($szacowanaIloscPrzeslek)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($szacowanaIloscPrzeslek, true), gettype($szacowanaIloscPrzeslek)), __LINE__);
        }
        $this->szacowanaIloscPrzeslek = $szacowanaIloscPrzeslek;

        return $this;
    }

    /**
     * Get szacowanaLacznaMasaPrzesylek value.
     *
     * @return string
     */
    public function getSzacowanaLacznaMasaPrzesylek()
    {
        return $this->szacowanaLacznaMasaPrzesylek;
    }

    /**
     * Set szacowanaLacznaMasaPrzesylek value.
     *
     * @param string $szacowanaLacznaMasaPrzesylek
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZamowKuriera
     */
    public function setSzacowanaLacznaMasaPrzesylek($szacowanaLacznaMasaPrzesylek = null)
    {
        // validation for constraint: string
        if (!is_null($szacowanaLacznaMasaPrzesylek) && !is_string($szacowanaLacznaMasaPrzesylek)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($szacowanaLacznaMasaPrzesylek, true), gettype($szacowanaLacznaMasaPrzesylek)), __LINE__);
        }
        $this->szacowanaLacznaMasaPrzesylek = $szacowanaLacznaMasaPrzesylek;

        return $this;
    }

    /**
     * Get nadawca value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType|null
     */
    public function getNadawca()
    {
        return $this->nadawca;
    }

    /**
     * Set nadawca value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $nadawca
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZamowKuriera
     */
    public function setNadawca(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $nadawca = null)
    {
        $this->nadawca = $nadawca;

        return $this;
    }
}
