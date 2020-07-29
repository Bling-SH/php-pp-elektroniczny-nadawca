<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

/**
 * This class stands for paczkaPocztowaType StructType.
 */
class PaczkaPocztowaType extends PrzesylkaRejestrowanaType
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
     * The wartosc
     * Meta information extracted from the WSDL
     * - documentation: zadeklarowana wartość przesyłki w groszach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 0
     * - use: optional.
     *
     * @var int
     */
    public $wartosc;
    /**
     * The zwrotDoslanie.
     *
     * @var bool
     */
    public $zwrotDoslanie;
    /**
     * The egzemplarzBiblioteczny
     * Meta information extracted from the WSDL
     * - default: false.
     *
     * @var bool
     */
    public $egzemplarzBiblioteczny;
    /**
     * The dlaOciemnialych
     * Meta information extracted from the WSDL
     * - default: false.
     *
     * @var bool
     */
    public $dlaOciemnialych;

    /**
     * Constructor method for paczkaPocztowaType.
     *
     * @uses PaczkaPocztowaType::setKategoria()
     * @uses PaczkaPocztowaType::setGabaryt()
     * @uses PaczkaPocztowaType::setEpo()
     * @uses PaczkaPocztowaType::setZasadySpecjalne()
     * @uses PaczkaPocztowaType::setPosteRestante()
     * @uses PaczkaPocztowaType::setIloscPotwierdzenOdbioru()
     * @uses PaczkaPocztowaType::setMasa()
     * @uses PaczkaPocztowaType::setWartosc()
     * @uses PaczkaPocztowaType::setZwrotDoslanie()
     * @uses PaczkaPocztowaType::setEgzemplarzBiblioteczny()
     * @uses PaczkaPocztowaType::setDlaOciemnialych()
     *
     * @param string                                                      $kategoria
     * @param string                                                      $gabaryt
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPOType $epo
     * @param string                                                      $zasadySpecjalne
     * @param bool                                                        $posteRestante
     * @param int                                                         $iloscPotwierdzenOdbioru
     * @param int                                                         $masa
     * @param int                                                         $wartosc
     * @param bool                                                        $zwrotDoslanie
     * @param bool                                                        $egzemplarzBiblioteczny
     * @param bool                                                        $dlaOciemnialych
     */
    public function __construct($kategoria = null, $gabaryt = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPOType $epo = null, $zasadySpecjalne = null, $posteRestante = false, $iloscPotwierdzenOdbioru = 0, $masa = null, $wartosc = null, $zwrotDoslanie = null, $egzemplarzBiblioteczny = false, $dlaOciemnialych = false)
    {
        $this
            ->setKategoria($kategoria)
            ->setGabaryt($gabaryt)
            ->setEpo($epo)
            ->setZasadySpecjalne($zasadySpecjalne)
            ->setPosteRestante($posteRestante)
            ->setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
            ->setMasa($masa)
            ->setWartosc($wartosc)
            ->setZwrotDoslanie($zwrotDoslanie)
            ->setEgzemplarzBiblioteczny($egzemplarzBiblioteczny)
            ->setDlaOciemnialych($dlaOciemnialych);
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaPocztowaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaPocztowaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaPocztowaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaPocztowaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaPocztowaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaPocztowaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaPocztowaType
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
     * Get wartosc value.
     *
     * @return int|null
     */
    public function getWartosc()
    {
        return $this->wartosc;
    }

    /**
     * Set wartosc value.
     *
     * @param int $wartosc
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaPocztowaType
     */
    public function setWartosc($wartosc = null)
    {
        // validation for constraint: int
        if (!is_null($wartosc) && !(is_int($wartosc) || ctype_digit($wartosc))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($wartosc, true), gettype($wartosc)), __LINE__);
        }
        // validation for constraint: maxInclusive(9999999)
        if (!is_null($wartosc) && $wartosc > 9999999) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9999999', var_export($wartosc, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($wartosc) && $wartosc < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($wartosc, true)), __LINE__);
        }
        $this->wartosc = $wartosc;

        return $this;
    }

    /**
     * Get zwrotDoslanie value.
     *
     * @return bool|null
     */
    public function getZwrotDoslanie()
    {
        return $this->zwrotDoslanie;
    }

    /**
     * Set zwrotDoslanie value.
     *
     * @param bool $zwrotDoslanie
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaPocztowaType
     */
    public function setZwrotDoslanie($zwrotDoslanie = null)
    {
        // validation for constraint: boolean
        if (!is_null($zwrotDoslanie) && !is_bool($zwrotDoslanie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($zwrotDoslanie, true), gettype($zwrotDoslanie)), __LINE__);
        }
        $this->zwrotDoslanie = $zwrotDoslanie;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaPocztowaType
     */
    public function setEgzemplarzBiblioteczny($egzemplarzBiblioteczny = false)
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaPocztowaType
     */
    public function setDlaOciemnialych($dlaOciemnialych = false)
    {
        // validation for constraint: boolean
        if (!is_null($dlaOciemnialych) && !is_bool($dlaOciemnialych)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dlaOciemnialych, true), gettype($dlaOciemnialych)), __LINE__);
        }
        $this->dlaOciemnialych = $dlaOciemnialych;

        return $this;
    }
}
