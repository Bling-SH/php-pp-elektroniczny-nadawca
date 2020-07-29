<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

/**
 * This class stands for ePrzesylkaType StructType.
 */
class EPrzesylkaType extends PrzesylkaRejestrowanaType
{
    /**
     * The urzadWydaniaEPrzesylki
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType
     */
    public $urzadWydaniaEPrzesylki;
    /**
     * The pobranie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType
     */
    public $pobranie;
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
     * The eSposobPowiadomieniaAdresata.
     *
     * @var string
     */
    public $eSposobPowiadomieniaAdresata;
    /**
     * The eSposobPowiadomieniaNadawcy.
     *
     * @var string
     */
    public $eSposobPowiadomieniaNadawcy;
    /**
     * The eKontaktAdresata
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - minLength: 0.
     *
     * @var string
     */
    public $eKontaktAdresata;
    /**
     * The eKontaktNadawcy
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - minLength: 0.
     *
     * @var string
     */
    public $eKontaktNadawcy;
    /**
     * The ostroznie.
     *
     * @var bool
     */
    public $ostroznie;
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
     * Constructor method for ePrzesylkaType.
     *
     * @uses EPrzesylkaType::setUrzadWydaniaEPrzesylki()
     * @uses EPrzesylkaType::setPobranie()
     * @uses EPrzesylkaType::setMasa()
     * @uses EPrzesylkaType::setESposobPowiadomieniaAdresata()
     * @uses EPrzesylkaType::setESposobPowiadomieniaNadawcy()
     * @uses EPrzesylkaType::setEKontaktAdresata()
     * @uses EPrzesylkaType::setEKontaktNadawcy()
     * @uses EPrzesylkaType::setOstroznie()
     * @uses EPrzesylkaType::setWartosc()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType               $pobranie
     * @param int                                                                            $masa
     * @param string                                                                         $eSposobPowiadomieniaAdresata
     * @param string                                                                         $eSposobPowiadomieniaNadawcy
     * @param string                                                                         $eKontaktAdresata
     * @param string                                                                         $eKontaktNadawcy
     * @param bool                                                                           $ostroznie
     * @param int                                                                            $wartosc
     */
    public function __construct(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType $pobranie = null, $masa = null, $eSposobPowiadomieniaAdresata = null, $eSposobPowiadomieniaNadawcy = null, $eKontaktAdresata = null, $eKontaktNadawcy = null, $ostroznie = null, $wartosc = null)
    {
        $this
            ->setUrzadWydaniaEPrzesylki($urzadWydaniaEPrzesylki)
            ->setPobranie($pobranie)
            ->setMasa($masa)
            ->setESposobPowiadomieniaAdresata($eSposobPowiadomieniaAdresata)
            ->setESposobPowiadomieniaNadawcy($eSposobPowiadomieniaNadawcy)
            ->setEKontaktAdresata($eKontaktAdresata)
            ->setEKontaktNadawcy($eKontaktNadawcy)
            ->setOstroznie($ostroznie)
            ->setWartosc($wartosc);
    }

    /**
     * Get urzadWydaniaEPrzesylki value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType
     */
    public function getUrzadWydaniaEPrzesylki()
    {
        return $this->urzadWydaniaEPrzesylki;
    }

    /**
     * Set urzadWydaniaEPrzesylki value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPrzesylkaType
     */
    public function setUrzadWydaniaEPrzesylki(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki = null)
    {
        $this->urzadWydaniaEPrzesylki = $urzadWydaniaEPrzesylki;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPrzesylkaType
     */
    public function setPobranie(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType $pobranie = null)
    {
        $this->pobranie = $pobranie;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPrzesylkaType
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
     * Get eSposobPowiadomieniaAdresata value.
     *
     * @return string|null
     */
    public function getESposobPowiadomieniaAdresata()
    {
        return $this->eSposobPowiadomieniaAdresata;
    }

    /**
     * Set eSposobPowiadomieniaAdresata value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ESposobPowiadomieniaType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ESposobPowiadomieniaType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $eSposobPowiadomieniaAdresata
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPrzesylkaType
     */
    public function setESposobPowiadomieniaAdresata($eSposobPowiadomieniaAdresata = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ESposobPowiadomieniaType::valueIsValid($eSposobPowiadomieniaAdresata)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ESposobPowiadomieniaType', is_array($eSposobPowiadomieniaAdresata) ? implode(', ', $eSposobPowiadomieniaAdresata) : var_export($eSposobPowiadomieniaAdresata, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ESposobPowiadomieniaType::getValidValues())), __LINE__);
        }
        $this->eSposobPowiadomieniaAdresata = $eSposobPowiadomieniaAdresata;

        return $this;
    }

    /**
     * Get eSposobPowiadomieniaNadawcy value.
     *
     * @return string|null
     */
    public function getESposobPowiadomieniaNadawcy()
    {
        return $this->eSposobPowiadomieniaNadawcy;
    }

    /**
     * Set eSposobPowiadomieniaNadawcy value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ESposobPowiadomieniaType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ESposobPowiadomieniaType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $eSposobPowiadomieniaNadawcy
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPrzesylkaType
     */
    public function setESposobPowiadomieniaNadawcy($eSposobPowiadomieniaNadawcy = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ESposobPowiadomieniaType::valueIsValid($eSposobPowiadomieniaNadawcy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ESposobPowiadomieniaType', is_array($eSposobPowiadomieniaNadawcy) ? implode(', ', $eSposobPowiadomieniaNadawcy) : var_export($eSposobPowiadomieniaNadawcy, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ESposobPowiadomieniaType::getValidValues())), __LINE__);
        }
        $this->eSposobPowiadomieniaNadawcy = $eSposobPowiadomieniaNadawcy;

        return $this;
    }

    /**
     * Get eKontaktAdresata value.
     *
     * @return string|null
     */
    public function getEKontaktAdresata()
    {
        return $this->eKontaktAdresata;
    }

    /**
     * Set eKontaktAdresata value.
     *
     * @param string $eKontaktAdresata
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPrzesylkaType
     */
    public function setEKontaktAdresata($eKontaktAdresata = null)
    {
        // validation for constraint: string
        if (!is_null($eKontaktAdresata) && !is_string($eKontaktAdresata)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eKontaktAdresata, true), gettype($eKontaktAdresata)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($eKontaktAdresata) && mb_strlen($eKontaktAdresata) > 50) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen($eKontaktAdresata)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($eKontaktAdresata) && mb_strlen($eKontaktAdresata) < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen($eKontaktAdresata)), __LINE__);
        }
        $this->eKontaktAdresata = $eKontaktAdresata;

        return $this;
    }

    /**
     * Get eKontaktNadawcy value.
     *
     * @return string|null
     */
    public function getEKontaktNadawcy()
    {
        return $this->eKontaktNadawcy;
    }

    /**
     * Set eKontaktNadawcy value.
     *
     * @param string $eKontaktNadawcy
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPrzesylkaType
     */
    public function setEKontaktNadawcy($eKontaktNadawcy = null)
    {
        // validation for constraint: string
        if (!is_null($eKontaktNadawcy) && !is_string($eKontaktNadawcy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eKontaktNadawcy, true), gettype($eKontaktNadawcy)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($eKontaktNadawcy) && mb_strlen($eKontaktNadawcy) > 50) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen($eKontaktNadawcy)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($eKontaktNadawcy) && mb_strlen($eKontaktNadawcy) < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen($eKontaktNadawcy)), __LINE__);
        }
        $this->eKontaktNadawcy = $eKontaktNadawcy;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPrzesylkaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPrzesylkaType
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
}
