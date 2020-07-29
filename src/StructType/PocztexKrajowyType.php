<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

/**
 * This class stands for pocztexKrajowyType StructType.
 */
class PocztexKrajowyType extends PrzesylkaRejestrowanaType
{
    /**
     * The terminRodzaj
     * Meta information extracted from the WSDL
     * - use: required.
     *
     * @var string
     */
    public $terminRodzaj;
    /**
     * The masa
     * Meta information extracted from the WSDL
     * - documentation: masa przesyłki podana w gramach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 1
     * - use: required.
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
     * - use: required.
     *
     * @var int
     */
    public $wartosc;
    /**
     * The uiszczaOplate
     * Meta information extracted from the WSDL
     * - use: required.
     *
     * @var string
     */
    public $uiszczaOplate;
    /**
     * The pobranie
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType
     */
    public $pobranie;
    /**
     * The odbiorPrzesylkiOdNadawcy
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OdbiorPrzesylkiOdNadawcyType
     */
    public $odbiorPrzesylkiOdNadawcy;
    /**
     * The doreczenie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczenieType
     */
    public $doreczenie;
    /**
     * The zwrotDokumentow
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotDokumentowType
     */
    public $zwrotDokumentow;
    /**
     * The potwierdzenieOdbioru
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruType
     */
    public $potwierdzenieOdbioru;
    /**
     * The potwierdzenieDoreczenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType
     */
    public $potwierdzenieDoreczenia;
    /**
     * The ubezpieczenie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType
     */
    public $ubezpieczenie;
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
     * The kopertaFirmowa.
     *
     * @var bool
     */
    public $kopertaFirmowa;
    /**
     * The ostroznie
     * Meta information extracted from the WSDL
     * - use: optional.
     *
     * @var bool
     */
    public $ostroznie;
    /**
     * The ponadgabaryt.
     *
     * @var bool
     */
    public $ponadgabaryt;
    /**
     * The odleglosc.
     *
     * @var int
     */
    public $odleglosc;
    /**
     * The zawartosc.
     *
     * @var string
     */
    public $zawartosc;
    /**
     * The sprawdzenieZawartosciPrzesylkiPrzezOdbiorce.
     *
     * @var bool
     */
    public $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;

    /**
     * Constructor method for pocztexKrajowyType.
     *
     * @uses PocztexKrajowyType::setTerminRodzaj()
     * @uses PocztexKrajowyType::setMasa()
     * @uses PocztexKrajowyType::setWartosc()
     * @uses PocztexKrajowyType::setUiszczaOplate()
     * @uses PocztexKrajowyType::setPobranie()
     * @uses PocztexKrajowyType::setOdbiorPrzesylkiOdNadawcy()
     * @uses PocztexKrajowyType::setDoreczenie()
     * @uses PocztexKrajowyType::setZwrotDokumentow()
     * @uses PocztexKrajowyType::setPotwierdzenieOdbioru()
     * @uses PocztexKrajowyType::setPotwierdzenieDoreczenia()
     * @uses PocztexKrajowyType::setUbezpieczenie()
     * @uses PocztexKrajowyType::setPosteRestante()
     * @uses PocztexKrajowyType::setKopertaFirmowa()
     * @uses PocztexKrajowyType::setOstroznie()
     * @uses PocztexKrajowyType::setPonadgabaryt()
     * @uses PocztexKrajowyType::setOdleglosc()
     * @uses PocztexKrajowyType::setZawartosc()
     * @uses PocztexKrajowyType::setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce()
     *
     * @param string                                                                           $terminRodzaj
     * @param int                                                                              $masa
     * @param int                                                                              $wartosc
     * @param string                                                                           $uiszczaOplate
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType                 $pobranie
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczenieType               $doreczenie
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotDokumentowType          $zwrotDokumentow
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruType     $potwierdzenieOdbioru
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType  $potwierdzenieDoreczenia
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType            $ubezpieczenie
     * @param bool                                                                             $posteRestante
     * @param bool                                                                             $kopertaFirmowa
     * @param bool                                                                             $ostroznie
     * @param bool                                                                             $ponadgabaryt
     * @param int                                                                              $odleglosc
     * @param string                                                                           $zawartosc
     * @param bool                                                                             $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     */
    public function __construct($terminRodzaj = null, $masa = null, $wartosc = null, $uiszczaOplate = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType $pobranie = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczenieType $doreczenie = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotDokumentowType $zwrotDokumentow = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruType $potwierdzenieOdbioru = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null, $posteRestante = false, $kopertaFirmowa = null, $ostroznie = null, $ponadgabaryt = null, $odleglosc = null, $zawartosc = null, $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null)
    {
        $this
            ->setTerminRodzaj($terminRodzaj)
            ->setMasa($masa)
            ->setWartosc($wartosc)
            ->setUiszczaOplate($uiszczaOplate)
            ->setPobranie($pobranie)
            ->setOdbiorPrzesylkiOdNadawcy($odbiorPrzesylkiOdNadawcy)
            ->setDoreczenie($doreczenie)
            ->setZwrotDokumentow($zwrotDokumentow)
            ->setPotwierdzenieOdbioru($potwierdzenieOdbioru)
            ->setPotwierdzenieDoreczenia($potwierdzenieDoreczenia)
            ->setUbezpieczenie($ubezpieczenie)
            ->setPosteRestante($posteRestante)
            ->setKopertaFirmowa($kopertaFirmowa)
            ->setOstroznie($ostroznie)
            ->setPonadgabaryt($ponadgabaryt)
            ->setOdleglosc($odleglosc)
            ->setZawartosc($zawartosc)
            ->setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce);
    }

    /**
     * Get terminRodzaj value.
     *
     * @return string
     */
    public function getTerminRodzaj()
    {
        return $this->terminRodzaj;
    }

    /**
     * Set terminRodzaj value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\TerminRodzajType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\TerminRodzajType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $terminRodzaj
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PocztexKrajowyType
     */
    public function setTerminRodzaj($terminRodzaj = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\TerminRodzajType::valueIsValid($terminRodzaj)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\TerminRodzajType', is_array($terminRodzaj) ? implode(', ', $terminRodzaj) : var_export($terminRodzaj, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\TerminRodzajType::getValidValues())), __LINE__);
        }
        $this->terminRodzaj = $terminRodzaj;

        return $this;
    }

    /**
     * Get masa value.
     *
     * @return int
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PocztexKrajowyType
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
     * @return int
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PocztexKrajowyType
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
     * Get uiszczaOplate value.
     *
     * @return string
     */
    public function getUiszczaOplate()
    {
        return $this->uiszczaOplate;
    }

    /**
     * Set uiszczaOplate value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\UiszczaOplateType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\UiszczaOplateType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $uiszczaOplate
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PocztexKrajowyType
     */
    public function setUiszczaOplate($uiszczaOplate = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\UiszczaOplateType::valueIsValid($uiszczaOplate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\UiszczaOplateType', is_array($uiszczaOplate) ? implode(', ', $uiszczaOplate) : var_export($uiszczaOplate, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\UiszczaOplateType::getValidValues())), __LINE__);
        }
        $this->uiszczaOplate = $uiszczaOplate;

        return $this;
    }

    /**
     * Get pobranie value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType|null
     */
    public function getPobranie()
    {
        return $this->pobranie;
    }

    /**
     * Set pobranie value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType $pobranie
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PocztexKrajowyType
     */
    public function setPobranie(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType $pobranie = null)
    {
        $this->pobranie = $pobranie;

        return $this;
    }

    /**
     * Get odbiorPrzesylkiOdNadawcy value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OdbiorPrzesylkiOdNadawcyType|null
     */
    public function getOdbiorPrzesylkiOdNadawcy()
    {
        return $this->odbiorPrzesylkiOdNadawcy;
    }

    /**
     * Set odbiorPrzesylkiOdNadawcy value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PocztexKrajowyType
     */
    public function setOdbiorPrzesylkiOdNadawcy(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy = null)
    {
        $this->odbiorPrzesylkiOdNadawcy = $odbiorPrzesylkiOdNadawcy;

        return $this;
    }

    /**
     * Get doreczenie value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczenieType|null
     */
    public function getDoreczenie()
    {
        return $this->doreczenie;
    }

    /**
     * Set doreczenie value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczenieType $doreczenie
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PocztexKrajowyType
     */
    public function setDoreczenie(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczenieType $doreczenie = null)
    {
        $this->doreczenie = $doreczenie;

        return $this;
    }

    /**
     * Get zwrotDokumentow value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotDokumentowType|null
     */
    public function getZwrotDokumentow()
    {
        return $this->zwrotDokumentow;
    }

    /**
     * Set zwrotDokumentow value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotDokumentowType $zwrotDokumentow
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PocztexKrajowyType
     */
    public function setZwrotDokumentow(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotDokumentowType $zwrotDokumentow = null)
    {
        $this->zwrotDokumentow = $zwrotDokumentow;

        return $this;
    }

    /**
     * Get potwierdzenieOdbioru value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruType|null
     */
    public function getPotwierdzenieOdbioru()
    {
        return $this->potwierdzenieOdbioru;
    }

    /**
     * Set potwierdzenieOdbioru value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruType $potwierdzenieOdbioru
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PocztexKrajowyType
     */
    public function setPotwierdzenieOdbioru(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruType $potwierdzenieOdbioru = null)
    {
        $this->potwierdzenieOdbioru = $potwierdzenieOdbioru;

        return $this;
    }

    /**
     * Get potwierdzenieDoreczenia value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType|null
     */
    public function getPotwierdzenieDoreczenia()
    {
        return $this->potwierdzenieDoreczenia;
    }

    /**
     * Set potwierdzenieDoreczenia value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PocztexKrajowyType
     */
    public function setPotwierdzenieDoreczenia(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null)
    {
        $this->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;

        return $this;
    }

    /**
     * Get ubezpieczenie value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType|null
     */
    public function getUbezpieczenie()
    {
        return $this->ubezpieczenie;
    }

    /**
     * Set ubezpieczenie value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PocztexKrajowyType
     */
    public function setUbezpieczenie(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null)
    {
        $this->ubezpieczenie = $ubezpieczenie;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PocztexKrajowyType
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
     * Get kopertaFirmowa value.
     *
     * @return bool|null
     */
    public function getKopertaFirmowa()
    {
        return $this->kopertaFirmowa;
    }

    /**
     * Set kopertaFirmowa value.
     *
     * @param bool $kopertaFirmowa
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PocztexKrajowyType
     */
    public function setKopertaFirmowa($kopertaFirmowa = null)
    {
        // validation for constraint: boolean
        if (!is_null($kopertaFirmowa) && !is_bool($kopertaFirmowa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($kopertaFirmowa, true), gettype($kopertaFirmowa)), __LINE__);
        }
        $this->kopertaFirmowa = $kopertaFirmowa;

        return $this;
    }

    /**
     * Get ostroznie value.
     *
     * @return bool|null
     */
    public function getOstroznie()
    {
        return $this->ostroznie;
    }

    /**
     * Set ostroznie value.
     *
     * @param bool $ostroznie
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PocztexKrajowyType
     */
    public function setOstroznie($ostroznie = null)
    {
        // validation for constraint: boolean
        if (!is_null($ostroznie) && !is_bool($ostroznie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ostroznie, true), gettype($ostroznie)), __LINE__);
        }
        $this->ostroznie = $ostroznie;

        return $this;
    }

    /**
     * Get ponadgabaryt value.
     *
     * @return bool|null
     */
    public function getPonadgabaryt()
    {
        return $this->ponadgabaryt;
    }

    /**
     * Set ponadgabaryt value.
     *
     * @param bool $ponadgabaryt
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PocztexKrajowyType
     */
    public function setPonadgabaryt($ponadgabaryt = null)
    {
        // validation for constraint: boolean
        if (!is_null($ponadgabaryt) && !is_bool($ponadgabaryt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ponadgabaryt, true), gettype($ponadgabaryt)), __LINE__);
        }
        $this->ponadgabaryt = $ponadgabaryt;

        return $this;
    }

    /**
     * Get odleglosc value.
     *
     * @return int|null
     */
    public function getOdleglosc()
    {
        return $this->odleglosc;
    }

    /**
     * Set odleglosc value.
     *
     * @param int $odleglosc
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PocztexKrajowyType
     */
    public function setOdleglosc($odleglosc = null)
    {
        // validation for constraint: int
        if (!is_null($odleglosc) && !(is_int($odleglosc) || ctype_digit($odleglosc))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($odleglosc, true), gettype($odleglosc)), __LINE__);
        }
        $this->odleglosc = $odleglosc;

        return $this;
    }

    /**
     * Get zawartosc value.
     *
     * @return string|null
     */
    public function getZawartosc()
    {
        return $this->zawartosc;
    }

    /**
     * Set zawartosc value.
     *
     * @param string $zawartosc
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PocztexKrajowyType
     */
    public function setZawartosc($zawartosc = null)
    {
        // validation for constraint: string
        if (!is_null($zawartosc) && !is_string($zawartosc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zawartosc, true), gettype($zawartosc)), __LINE__);
        }
        $this->zawartosc = $zawartosc;

        return $this;
    }

    /**
     * Get sprawdzenieZawartosciPrzesylkiPrzezOdbiorce value.
     *
     * @return bool|null
     */
    public function getSprawdzenieZawartosciPrzesylkiPrzezOdbiorce()
    {
        return $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
    }

    /**
     * Set sprawdzenieZawartosciPrzesylkiPrzezOdbiorce value.
     *
     * @param bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PocztexKrajowyType
     */
    public function setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null)
    {
        // validation for constraint: boolean
        if (!is_null($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce) && !is_bool($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce, true), gettype($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)), __LINE__);
        }
        $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;

        return $this;
    }
}
