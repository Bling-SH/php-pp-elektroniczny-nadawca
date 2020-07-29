<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

/**
 * This class stands for listWartosciowyKrajowyType StructType.
 */
class ListWartosciowyKrajowyType extends PrzesylkaRejestrowanaType
{
    /**
     * The posteRestante.
     *
     * @var bool
     */
    public $posteRestante;
    /**
     * The wartosc
     * Meta information extracted from the WSDL
     * - documentation: zadeklarowana wartość przesyłki w groszach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 0.
     *
     * @var int
     */
    public $wartosc;
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
     * The kategoria.
     *
     * @var string
     */
    public $kategoria;
    /**
     * The format
     * Meta information extracted from the WSDL
     * - documentation: Format przesyłki.
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
     * - minInclusive: 1.
     *
     * @var int
     */
    public $masa;
    /**
     * The numerWewnetrznyPrzesylki.
     *
     * @var string
     */
    public $numerWewnetrznyPrzesylki;
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
     * Constructor method for listWartosciowyKrajowyType.
     *
     * @uses ListWartosciowyKrajowyType::setPosteRestante()
     * @uses ListWartosciowyKrajowyType::setWartosc()
     * @uses ListWartosciowyKrajowyType::setIloscPotwierdzenOdbioru()
     * @uses ListWartosciowyKrajowyType::setKategoria()
     * @uses ListWartosciowyKrajowyType::setFormat()
     * @uses ListWartosciowyKrajowyType::setMasa()
     * @uses ListWartosciowyKrajowyType::setNumerWewnetrznyPrzesylki()
     * @uses ListWartosciowyKrajowyType::setEgzemplarzBiblioteczny()
     * @uses ListWartosciowyKrajowyType::setDlaOciemnialych()
     *
     * @param bool   $posteRestante
     * @param int    $wartosc
     * @param int    $iloscPotwierdzenOdbioru
     * @param string $kategoria
     * @param string $format
     * @param int    $masa
     * @param string $numerWewnetrznyPrzesylki
     * @param bool   $egzemplarzBiblioteczny
     * @param bool   $dlaOciemnialych
     */
    public function __construct($posteRestante = null, $wartosc = null, $iloscPotwierdzenOdbioru = null, $kategoria = null, $format = null, $masa = null, $numerWewnetrznyPrzesylki = null, $egzemplarzBiblioteczny = null, $dlaOciemnialych = null)
    {
        $this
            ->setPosteRestante($posteRestante)
            ->setWartosc($wartosc)
            ->setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
            ->setKategoria($kategoria)
            ->setFormat($format)
            ->setMasa($masa)
            ->setNumerWewnetrznyPrzesylki($numerWewnetrznyPrzesylki)
            ->setEgzemplarzBiblioteczny($egzemplarzBiblioteczny)
            ->setDlaOciemnialych($dlaOciemnialych);
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ListWartosciowyKrajowyType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ListWartosciowyKrajowyType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ListWartosciowyKrajowyType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ListWartosciowyKrajowyType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ListWartosciowyKrajowyType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ListWartosciowyKrajowyType
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
     * Get numerWewnetrznyPrzesylki value.
     *
     * @return string|null
     */
    public function getNumerWewnetrznyPrzesylki()
    {
        return $this->numerWewnetrznyPrzesylki;
    }

    /**
     * Set numerWewnetrznyPrzesylki value.
     *
     * @param string $numerWewnetrznyPrzesylki
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ListWartosciowyKrajowyType
     */
    public function setNumerWewnetrznyPrzesylki($numerWewnetrznyPrzesylki = null)
    {
        // validation for constraint: string
        if (!is_null($numerWewnetrznyPrzesylki) && !is_string($numerWewnetrznyPrzesylki)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerWewnetrznyPrzesylki, true), gettype($numerWewnetrznyPrzesylki)), __LINE__);
        }
        $this->numerWewnetrznyPrzesylki = $numerWewnetrznyPrzesylki;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ListWartosciowyKrajowyType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ListWartosciowyKrajowyType
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
}
