<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

/**
 * This class stands for przesylkaFirmowaPoleconaType StructType.
 */
class PrzesylkaFirmowaPoleconaType extends PrzesylkaRejestrowanaType
{
    /**
     * The gabaryt
     * Meta information extracted from the WSDL
     * - use: required.
     *
     * @var string
     */
    public $gabaryt;
    /**
     * The epo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPOType
     */
    public $epo;
    /**
     * The zasadySpecjalne
     * Meta information extracted from the WSDL
     * - use: optional.
     *
     * @var string
     */
    public $zasadySpecjalne;
    /**
     * The posteRestante.
     *
     * @var bool
     */
    public $posteRestante;
    /**
     * The iloscPotwierdzenOdbioru
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - maxInclusive: 9
     * - minInclusive: 0.
     *
     * @var int
     */
    public $iloscPotwierdzenOdbioru;
    /**
     * The masa
     * Meta information extracted from the WSDL
     * - documentation: masa przesyłki podana w gramach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 1.
     *
     * @var int
     */
    public $masa;
    /**
     * The miejscowa.
     *
     * @var bool
     */
    public $miejscowa;
    /**
     * The obszarMiasto.
     *
     * @var bool
     */
    public $obszarMiasto;
    /**
     * The kategoria
     * Meta information extracted from the WSDL
     * - use: optional.
     *
     * @var string
     */
    public $kategoria;

    /**
     * Constructor method for przesylkaFirmowaPoleconaType.
     *
     * @uses PrzesylkaFirmowaPoleconaType::setGabaryt()
     * @uses PrzesylkaFirmowaPoleconaType::setEpo()
     * @uses PrzesylkaFirmowaPoleconaType::setZasadySpecjalne()
     * @uses PrzesylkaFirmowaPoleconaType::setPosteRestante()
     * @uses PrzesylkaFirmowaPoleconaType::setIloscPotwierdzenOdbioru()
     * @uses PrzesylkaFirmowaPoleconaType::setMasa()
     * @uses PrzesylkaFirmowaPoleconaType::setMiejscowa()
     * @uses PrzesylkaFirmowaPoleconaType::setObszarMiasto()
     * @uses PrzesylkaFirmowaPoleconaType::setKategoria()
     *
     * @param string                                                      $gabaryt
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPOType $epo
     * @param string                                                      $zasadySpecjalne
     * @param bool                                                        $posteRestante
     * @param int                                                         $iloscPotwierdzenOdbioru
     * @param int                                                         $masa
     * @param bool                                                        $miejscowa
     * @param bool                                                        $obszarMiasto
     * @param string                                                      $kategoria
     */
    public function __construct($gabaryt = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPOType $epo = null, $zasadySpecjalne = null, $posteRestante = null, $iloscPotwierdzenOdbioru = null, $masa = null, $miejscowa = null, $obszarMiasto = null, $kategoria = null)
    {
        $this
            ->setGabaryt($gabaryt)
            ->setEpo($epo)
            ->setZasadySpecjalne($zasadySpecjalne)
            ->setPosteRestante($posteRestante)
            ->setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
            ->setMasa($masa)
            ->setMiejscowa($miejscowa)
            ->setObszarMiasto($obszarMiasto)
            ->setKategoria($kategoria);
    }

    /**
     * Get gabaryt value.
     *
     * @return string
     */
    public function getGabaryt()
    {
        return $this->gabaryt;
    }

    /**
     * Set gabaryt value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\GabarytType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\GabarytType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $gabaryt
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaFirmowaPoleconaType
     */
    public function setGabaryt($gabaryt = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\GabarytType::valueIsValid($gabaryt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\GabarytType', is_array($gabaryt) ? implode(', ', $gabaryt) : var_export($gabaryt, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\GabarytType::getValidValues())), __LINE__);
        }
        $this->gabaryt = $gabaryt;

        return $this;
    }

    /**
     * Get epo value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPOType|null
     */
    public function getEpo()
    {
        return $this->epo;
    }

    /**
     * Set epo value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPOType $epo
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaFirmowaPoleconaType
     */
    public function setEpo(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPOType $epo = null)
    {
        $this->epo = $epo;

        return $this;
    }

    /**
     * Get zasadySpecjalne value.
     *
     * @return string|null
     */
    public function getZasadySpecjalne()
    {
        return $this->zasadySpecjalne;
    }

    /**
     * Set zasadySpecjalne value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ZasadySpecjalneEnum::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ZasadySpecjalneEnum::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $zasadySpecjalne
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaFirmowaPoleconaType
     */
    public function setZasadySpecjalne($zasadySpecjalne = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ZasadySpecjalneEnum::valueIsValid($zasadySpecjalne)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ZasadySpecjalneEnum', is_array($zasadySpecjalne) ? implode(', ', $zasadySpecjalne) : var_export($zasadySpecjalne, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ZasadySpecjalneEnum::getValidValues())), __LINE__);
        }
        $this->zasadySpecjalne = $zasadySpecjalne;

        return $this;
    }

    /**
     * Get posteRestante value.
     *
     * @return bool|null
     */
    public function getPosteRestante()
    {
        return $this->posteRestante;
    }

    /**
     * Set posteRestante value.
     *
     * @param bool $posteRestante
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaFirmowaPoleconaType
     */
    public function setPosteRestante($posteRestante = null)
    {
        // validation for constraint: boolean
        if (!is_null($posteRestante) && !is_bool($posteRestante)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($posteRestante, true), gettype($posteRestante)), __LINE__);
        }
        $this->posteRestante = $posteRestante;

        return $this;
    }

    /**
     * Get iloscPotwierdzenOdbioru value.
     *
     * @return int|null
     */
    public function getIloscPotwierdzenOdbioru()
    {
        return $this->iloscPotwierdzenOdbioru;
    }

    /**
     * Set iloscPotwierdzenOdbioru value.
     *
     * @param int $iloscPotwierdzenOdbioru
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaFirmowaPoleconaType
     */
    public function setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru = null)
    {
        // validation for constraint: int
        if (!is_null($iloscPotwierdzenOdbioru) && !(is_int($iloscPotwierdzenOdbioru) || ctype_digit($iloscPotwierdzenOdbioru))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iloscPotwierdzenOdbioru, true), gettype($iloscPotwierdzenOdbioru)), __LINE__);
        }
        // validation for constraint: maxInclusive(9)
        if (!is_null($iloscPotwierdzenOdbioru) && $iloscPotwierdzenOdbioru > 9) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9', var_export($iloscPotwierdzenOdbioru, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($iloscPotwierdzenOdbioru) && $iloscPotwierdzenOdbioru < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($iloscPotwierdzenOdbioru, true)), __LINE__);
        }
        $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;

        return $this;
    }

    /**
     * Get masa value.
     *
     * @return int|null
     */
    public function getMasa()
    {
        return $this->masa;
    }

    /**
     * Set masa value.
     *
     * @param int $masa
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaFirmowaPoleconaType
     */
    public function setMasa($masa = null)
    {
        // validation for constraint: int
        if (!is_null($masa) && !(is_int($masa) || ctype_digit($masa))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($masa, true), gettype($masa)), __LINE__);
        }
        // validation for constraint: maxInclusive(9999999)
        if (!is_null($masa) && $masa > 9999999) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9999999', var_export($masa, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($masa) && $masa < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($masa, true)), __LINE__);
        }
        $this->masa = $masa;

        return $this;
    }

    /**
     * Get miejscowa value.
     *
     * @return bool|null
     */
    public function getMiejscowa()
    {
        return $this->miejscowa;
    }

    /**
     * Set miejscowa value.
     *
     * @param bool $miejscowa
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaFirmowaPoleconaType
     */
    public function setMiejscowa($miejscowa = null)
    {
        // validation for constraint: boolean
        if (!is_null($miejscowa) && !is_bool($miejscowa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($miejscowa, true), gettype($miejscowa)), __LINE__);
        }
        $this->miejscowa = $miejscowa;

        return $this;
    }

    /**
     * Get obszarMiasto value.
     *
     * @return bool|null
     */
    public function getObszarMiasto()
    {
        return $this->obszarMiasto;
    }

    /**
     * Set obszarMiasto value.
     *
     * @param bool $obszarMiasto
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaFirmowaPoleconaType
     */
    public function setObszarMiasto($obszarMiasto = null)
    {
        // validation for constraint: boolean
        if (!is_null($obszarMiasto) && !is_bool($obszarMiasto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($obszarMiasto, true), gettype($obszarMiasto)), __LINE__);
        }
        $this->obszarMiasto = $obszarMiasto;

        return $this;
    }

    /**
     * Get kategoria value.
     *
     * @return string|null
     */
    public function getKategoria()
    {
        return $this->kategoria;
    }

    /**
     * Set kategoria value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\KategoriaType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\KategoriaType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $kategoria
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaFirmowaPoleconaType
     */
    public function setKategoria($kategoria = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\KategoriaType::valueIsValid($kategoria)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\KategoriaType', is_array($kategoria) ? implode(', ', $kategoria) : var_export($kategoria, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\KategoriaType::getValidValues())), __LINE__);
        }
        $this->kategoria = $kategoria;

        return $this;
    }
}
