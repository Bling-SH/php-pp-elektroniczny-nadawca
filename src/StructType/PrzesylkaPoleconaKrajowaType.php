<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

/**
 * This class stands for przesylkaPoleconaKrajowaType StructType.
 */
class PrzesylkaPoleconaKrajowaType extends PrzesylkaRejestrowanaType
{
    /**
     * The kategoria
     * Meta information extracted from the WSDL
     * - use: required.
     *
     * @var string
     */
    public $kategoria;
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
     * The posteRestante
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional.
     *
     * @var bool
     */
    public $posteRestante;
    /**
     * The iloscPotwierdzenOdbioru
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - default: 0
     * - maxInclusive: 9
     * - minInclusive: 0
     * - use: optional.
     *
     * @var int
     */
    public $iloscPotwierdzenOdbioru;
    /**
     * The gabaryt
     * Meta information extracted from the WSDL
     * - documentation: Gabaryt przesyłki
     * - use: optional.
     *
     * @var string
     */
    public $gabaryt;
    /**
     * The format
     * Meta information extracted from the WSDL
     * - documentation: Format przesyłki
     * - use: optional.
     *
     * @var string
     */
    public $format;
    /**
     * The masa
     * Meta information extracted from the WSDL
     * - documentation: masa przesyłki podana w gramach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 1
     * - use: optional.
     *
     * @var int
     */
    public $masa;
    /**
     * The egzemplarzBiblioteczny.
     *
     * @var bool
     */
    public $egzemplarzBiblioteczny;
    /**
     * The dlaOciemnialych.
     *
     * @var bool
     */
    public $dlaOciemnialych;
    /**
     * The obszarMiasto.
     *
     * @var bool
     */
    public $obszarMiasto;
    /**
     * The miejscowa.
     *
     * @var bool
     */
    public $miejscowa;

    /**
     * Constructor method for przesylkaPoleconaKrajowaType.
     *
     * @uses PrzesylkaPoleconaKrajowaType::setKategoria()
     * @uses PrzesylkaPoleconaKrajowaType::setEpo()
     * @uses PrzesylkaPoleconaKrajowaType::setZasadySpecjalne()
     * @uses PrzesylkaPoleconaKrajowaType::setPosteRestante()
     * @uses PrzesylkaPoleconaKrajowaType::setIloscPotwierdzenOdbioru()
     * @uses PrzesylkaPoleconaKrajowaType::setGabaryt()
     * @uses PrzesylkaPoleconaKrajowaType::setFormat()
     * @uses PrzesylkaPoleconaKrajowaType::setMasa()
     * @uses PrzesylkaPoleconaKrajowaType::setEgzemplarzBiblioteczny()
     * @uses PrzesylkaPoleconaKrajowaType::setDlaOciemnialych()
     * @uses PrzesylkaPoleconaKrajowaType::setObszarMiasto()
     * @uses PrzesylkaPoleconaKrajowaType::setMiejscowa()
     *
     * @param string                                                      $kategoria
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPOType $epo
     * @param string                                                      $zasadySpecjalne
     * @param bool                                                        $posteRestante
     * @param int                                                         $iloscPotwierdzenOdbioru
     * @param string                                                      $gabaryt
     * @param string                                                      $format
     * @param int                                                         $masa
     * @param bool                                                        $egzemplarzBiblioteczny
     * @param bool                                                        $dlaOciemnialych
     * @param bool                                                        $obszarMiasto
     * @param bool                                                        $miejscowa
     */
    public function __construct($kategoria = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPOType $epo = null, $zasadySpecjalne = null, $posteRestante = false, $iloscPotwierdzenOdbioru = 0, $gabaryt = null, $format = null, $masa = null, $egzemplarzBiblioteczny = null, $dlaOciemnialych = null, $obszarMiasto = null, $miejscowa = null)
    {
        $this
            ->setKategoria($kategoria)
            ->setEpo($epo)
            ->setZasadySpecjalne($zasadySpecjalne)
            ->setPosteRestante($posteRestante)
            ->setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
            ->setGabaryt($gabaryt)
            ->setFormat($format)
            ->setMasa($masa)
            ->setEgzemplarzBiblioteczny($egzemplarzBiblioteczny)
            ->setDlaOciemnialych($dlaOciemnialych)
            ->setObszarMiasto($obszarMiasto)
            ->setMiejscowa($miejscowa);
    }

    /**
     * Get kategoria value.
     *
     * @return string
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPoleconaKrajowaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPoleconaKrajowaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPoleconaKrajowaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPoleconaKrajowaType
     */
    public function setPosteRestante($posteRestante = false)
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPoleconaKrajowaType
     */
    public function setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru = 0)
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
     * Get gabaryt value.
     *
     * @return string|null
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPoleconaKrajowaType
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
     * Get format value.
     *
     * @return string|null
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set format value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\FormatType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\FormatType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $format
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPoleconaKrajowaType
     */
    public function setFormat($format = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\FormatType::valueIsValid($format)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\FormatType', is_array($format) ? implode(', ', $format) : var_export($format, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\FormatType::getValidValues())), __LINE__);
        }
        $this->format = $format;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPoleconaKrajowaType
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
     * Get egzemplarzBiblioteczny value.
     *
     * @return bool|null
     */
    public function getEgzemplarzBiblioteczny()
    {
        return $this->egzemplarzBiblioteczny;
    }

    /**
     * Set egzemplarzBiblioteczny value.
     *
     * @param bool $egzemplarzBiblioteczny
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPoleconaKrajowaType
     */
    public function setEgzemplarzBiblioteczny($egzemplarzBiblioteczny = null)
    {
        // validation for constraint: boolean
        if (!is_null($egzemplarzBiblioteczny) && !is_bool($egzemplarzBiblioteczny)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($egzemplarzBiblioteczny, true), gettype($egzemplarzBiblioteczny)), __LINE__);
        }
        $this->egzemplarzBiblioteczny = $egzemplarzBiblioteczny;

        return $this;
    }

    /**
     * Get dlaOciemnialych value.
     *
     * @return bool|null
     */
    public function getDlaOciemnialych()
    {
        return $this->dlaOciemnialych;
    }

    /**
     * Set dlaOciemnialych value.
     *
     * @param bool $dlaOciemnialych
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPoleconaKrajowaType
     */
    public function setDlaOciemnialych($dlaOciemnialych = null)
    {
        // validation for constraint: boolean
        if (!is_null($dlaOciemnialych) && !is_bool($dlaOciemnialych)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dlaOciemnialych, true), gettype($dlaOciemnialych)), __LINE__);
        }
        $this->dlaOciemnialych = $dlaOciemnialych;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPoleconaKrajowaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPoleconaKrajowaType
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
}
