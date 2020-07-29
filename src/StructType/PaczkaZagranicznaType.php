<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

/**
 * This class stands for paczkaZagranicznaType StructType.
 */
class PaczkaZagranicznaType extends PrzesylkaRejestrowanaType
{
    /**
     * The zwrot
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotType
     */
    public $zwrot;
    /**
     * The deklaracjaCelna
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
     */
    public $deklaracjaCelna;
    /**
     * The deklaracjaCelna2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
     */
    public $deklaracjaCelna2;
    /**
     * The sposobNadaniaInterconnect
     * Meta information extracted from the WSDL
     * - documentation: Umożliwia określenie sposobu nadania przesyłki w ramach systemu Interconnect.Obsługiwane wartości:- ODBIOR_Z_ADRESU_PRYWATNEGO- ODBIOR_Z_ADRESU_FIRMOWEGO- NADANIE_W_PLACOWCE_POCZTOWEJ
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var string
     */
    public $sposobNadaniaInterconnect;
    /**
     * The posteRestante.
     *
     * @var bool
     */
    public $posteRestante;
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
     * - minInclusive: 0.
     *
     * @var int
     */
    public $wartosc;
    /**
     * The kategoria.
     *
     * @var string
     */
    public $kategoria;
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
     * The utrudnionaManipulacja.
     *
     * @var bool
     */
    public $utrudnionaManipulacja;
    /**
     * The ekspres.
     *
     * @var bool
     */
    public $ekspres;
    /**
     * The numerReferencyjnyCelny
     * Meta information extracted from the WSDL
     * - documentation: atrybut przestarzały (deprecated), należy używać typudeklaracjaCelna2Type i elementu numerReferencyjnyCelny.
     *
     * @var string
     */
    public $numerReferencyjnyCelny;

    /**
     * Constructor method for paczkaZagranicznaType.
     *
     * @uses PaczkaZagranicznaType::setZwrot()
     * @uses PaczkaZagranicznaType::setDeklaracjaCelna()
     * @uses PaczkaZagranicznaType::setDeklaracjaCelna2()
     * @uses PaczkaZagranicznaType::setSposobNadaniaInterconnect()
     * @uses PaczkaZagranicznaType::setPosteRestante()
     * @uses PaczkaZagranicznaType::setMasa()
     * @uses PaczkaZagranicznaType::setWartosc()
     * @uses PaczkaZagranicznaType::setKategoria()
     * @uses PaczkaZagranicznaType::setIloscPotwierdzenOdbioru()
     * @uses PaczkaZagranicznaType::setUtrudnionaManipulacja()
     * @uses PaczkaZagranicznaType::setEkspres()
     * @uses PaczkaZagranicznaType::setNumerReferencyjnyCelny()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotType            $zwrot
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelnaType  $deklaracjaCelna
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2
     * @param string                                                                   $sposobNadaniaInterconnect
     * @param bool                                                                     $posteRestante
     * @param int                                                                      $masa
     * @param int                                                                      $wartosc
     * @param string                                                                   $kategoria
     * @param int                                                                      $iloscPotwierdzenOdbioru
     * @param bool                                                                     $utrudnionaManipulacja
     * @param bool                                                                     $ekspres
     * @param string                                                                   $numerReferencyjnyCelny
     */
    public function __construct(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotType $zwrot = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelnaType $deklaracjaCelna = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null, $sposobNadaniaInterconnect = null, $posteRestante = null, $masa = null, $wartosc = null, $kategoria = null, $iloscPotwierdzenOdbioru = null, $utrudnionaManipulacja = null, $ekspres = null, $numerReferencyjnyCelny = null)
    {
        $this
            ->setZwrot($zwrot)
            ->setDeklaracjaCelna($deklaracjaCelna)
            ->setDeklaracjaCelna2($deklaracjaCelna2)
            ->setSposobNadaniaInterconnect($sposobNadaniaInterconnect)
            ->setPosteRestante($posteRestante)
            ->setMasa($masa)
            ->setWartosc($wartosc)
            ->setKategoria($kategoria)
            ->setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
            ->setUtrudnionaManipulacja($utrudnionaManipulacja)
            ->setEkspres($ekspres)
            ->setNumerReferencyjnyCelny($numerReferencyjnyCelny);
    }

    /**
     * Get zwrot value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotType|null
     */
    public function getZwrot()
    {
        return $this->zwrot;
    }

    /**
     * Set zwrot value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotType $zwrot
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaZagranicznaType
     */
    public function setZwrot(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotType $zwrot = null)
    {
        $this->zwrot = $zwrot;

        return $this;
    }

    /**
     * Get deklaracjaCelna value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelnaType|null
     */
    public function getDeklaracjaCelna()
    {
        return $this->deklaracjaCelna;
    }

    /**
     * Set deklaracjaCelna value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelnaType $deklaracjaCelna
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaZagranicznaType
     */
    public function setDeklaracjaCelna(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelnaType $deklaracjaCelna = null)
    {
        $this->deklaracjaCelna = $deklaracjaCelna;

        return $this;
    }

    /**
     * Get deklaracjaCelna2 value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type|null
     */
    public function getDeklaracjaCelna2()
    {
        return $this->deklaracjaCelna2;
    }

    /**
     * Set deklaracjaCelna2 value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaZagranicznaType
     */
    public function setDeklaracjaCelna2(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null)
    {
        $this->deklaracjaCelna2 = $deklaracjaCelna2;

        return $this;
    }

    /**
     * Get sposobNadaniaInterconnect value.
     *
     * @return string|null
     */
    public function getSposobNadaniaInterconnect()
    {
        return $this->sposobNadaniaInterconnect;
    }

    /**
     * Set sposobNadaniaInterconnect value.
     *
     * @param string $sposobNadaniaInterconnect
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaZagranicznaType
     */
    public function setSposobNadaniaInterconnect($sposobNadaniaInterconnect = null)
    {
        // validation for constraint: string
        if (!is_null($sposobNadaniaInterconnect) && !is_string($sposobNadaniaInterconnect)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sposobNadaniaInterconnect, true), gettype($sposobNadaniaInterconnect)), __LINE__);
        }
        $this->sposobNadaniaInterconnect = $sposobNadaniaInterconnect;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaZagranicznaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaZagranicznaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaZagranicznaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaZagranicznaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaZagranicznaType
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
     * Get utrudnionaManipulacja value.
     *
     * @return bool|null
     */
    public function getUtrudnionaManipulacja()
    {
        return $this->utrudnionaManipulacja;
    }

    /**
     * Set utrudnionaManipulacja value.
     *
     * @param bool $utrudnionaManipulacja
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaZagranicznaType
     */
    public function setUtrudnionaManipulacja($utrudnionaManipulacja = null)
    {
        // validation for constraint: boolean
        if (!is_null($utrudnionaManipulacja) && !is_bool($utrudnionaManipulacja)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($utrudnionaManipulacja, true), gettype($utrudnionaManipulacja)), __LINE__);
        }
        $this->utrudnionaManipulacja = $utrudnionaManipulacja;

        return $this;
    }

    /**
     * Get ekspres value.
     *
     * @return bool|null
     */
    public function getEkspres()
    {
        return $this->ekspres;
    }

    /**
     * Set ekspres value.
     *
     * @param bool $ekspres
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaZagranicznaType
     */
    public function setEkspres($ekspres = null)
    {
        // validation for constraint: boolean
        if (!is_null($ekspres) && !is_bool($ekspres)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ekspres, true), gettype($ekspres)), __LINE__);
        }
        $this->ekspres = $ekspres;

        return $this;
    }

    /**
     * Get numerReferencyjnyCelny value.
     *
     * @return string|null
     */
    public function getNumerReferencyjnyCelny()
    {
        return $this->numerReferencyjnyCelny;
    }

    /**
     * Set numerReferencyjnyCelny value.
     *
     * @param string $numerReferencyjnyCelny
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaZagranicznaType
     */
    public function setNumerReferencyjnyCelny($numerReferencyjnyCelny = null)
    {
        // validation for constraint: string
        if (!is_null($numerReferencyjnyCelny) && !is_string($numerReferencyjnyCelny)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerReferencyjnyCelny, true), gettype($numerReferencyjnyCelny)), __LINE__);
        }
        $this->numerReferencyjnyCelny = $numerReferencyjnyCelny;

        return $this;
    }
}
