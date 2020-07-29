<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for placowkaPocztowaType StructType.
 */
class PlacowkaPocztowaType extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - use: required.
     *
     * @var int
     */
    public $id;
    /**
     * The lokalizacjaGeograficzna
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\LokalizacjaGeograficznaType
     */
    public $lokalizacjaGeograficzna;
    /**
     * The prefixNazwy.
     *
     * @var string
     */
    public $prefixNazwy;
    /**
     * The nazwa.
     *
     * @var string
     */
    public $nazwa;
    /**
     * The wojewodztwo
     * Meta information extracted from the WSDL
     * - use: optional.
     *
     * @var string
     */
    public $wojewodztwo;
    /**
     * The powiat
     * Meta information extracted from the WSDL
     * - use: optional.
     *
     * @var string
     */
    public $powiat;
    /**
     * The miejsce.
     *
     * @var string
     */
    public $miejsce;
    /**
     * The kodPocztowy
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 5.
     *
     * @var string
     */
    public $kodPocztowy;
    /**
     * The miejscowosc
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 30
     * - minLength: 0.
     *
     * @var string
     */
    public $miejscowosc;
    /**
     * The ulica.
     *
     * @var string
     */
    public $ulica;
    /**
     * The numerDomu.
     *
     * @var string
     */
    public $numerDomu;
    /**
     * The numerLokalu.
     *
     * @var string
     */
    public $numerLokalu;
    /**
     * The nazwaWydruk
     * Meta information extracted from the WSDL
     * - documentation: Pole dedykowane do wykorzystania na nalepkach adresowych przy określaniu punktu odbioru.
     *
     * @var string
     */
    public $nazwaWydruk;
    /**
     * The punktWydaniaEPrzesylki.
     *
     * @var bool
     */
    public $punktWydaniaEPrzesylki;
    /**
     * The powiadomienieSMS.
     *
     * @var bool
     */
    public $powiadomienieSMS;
    /**
     * The punktWydaniaPrzesylkiBiznesowejPlus.
     *
     * @var bool
     */
    public $punktWydaniaPrzesylkiBiznesowejPlus;
    /**
     * The punktWydaniaPrzesylkiBiznesowej.
     *
     * @var bool
     */
    public $punktWydaniaPrzesylkiBiznesowej;
    /**
     * The siecPlacowek.
     *
     * @var string
     */
    public $siecPlacowek;
    /**
     * The idZPO.
     *
     * @var string
     */
    public $idZPO;

    /**
     * Constructor method for placowkaPocztowaType.
     *
     * @uses PlacowkaPocztowaType::setId()
     * @uses PlacowkaPocztowaType::setLokalizacjaGeograficzna()
     * @uses PlacowkaPocztowaType::setPrefixNazwy()
     * @uses PlacowkaPocztowaType::setNazwa()
     * @uses PlacowkaPocztowaType::setWojewodztwo()
     * @uses PlacowkaPocztowaType::setPowiat()
     * @uses PlacowkaPocztowaType::setMiejsce()
     * @uses PlacowkaPocztowaType::setKodPocztowy()
     * @uses PlacowkaPocztowaType::setMiejscowosc()
     * @uses PlacowkaPocztowaType::setUlica()
     * @uses PlacowkaPocztowaType::setNumerDomu()
     * @uses PlacowkaPocztowaType::setNumerLokalu()
     * @uses PlacowkaPocztowaType::setNazwaWydruk()
     * @uses PlacowkaPocztowaType::setPunktWydaniaEPrzesylki()
     * @uses PlacowkaPocztowaType::setPowiadomienieSMS()
     * @uses PlacowkaPocztowaType::setPunktWydaniaPrzesylkiBiznesowejPlus()
     * @uses PlacowkaPocztowaType::setPunktWydaniaPrzesylkiBiznesowej()
     * @uses PlacowkaPocztowaType::setSiecPlacowek()
     * @uses PlacowkaPocztowaType::setIdZPO()
     *
     * @param int                                                                             $id
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\LokalizacjaGeograficznaType $lokalizacjaGeograficzna
     * @param string                                                                          $prefixNazwy
     * @param string                                                                          $nazwa
     * @param string                                                                          $wojewodztwo
     * @param string                                                                          $powiat
     * @param string                                                                          $miejsce
     * @param string                                                                          $kodPocztowy
     * @param string                                                                          $miejscowosc
     * @param string                                                                          $ulica
     * @param string                                                                          $numerDomu
     * @param string                                                                          $numerLokalu
     * @param string                                                                          $nazwaWydruk
     * @param bool                                                                            $punktWydaniaEPrzesylki
     * @param bool                                                                            $powiadomienieSMS
     * @param bool                                                                            $punktWydaniaPrzesylkiBiznesowejPlus
     * @param bool                                                                            $punktWydaniaPrzesylkiBiznesowej
     * @param string                                                                          $siecPlacowek
     * @param string                                                                          $idZPO
     */
    public function __construct($id = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\LokalizacjaGeograficznaType $lokalizacjaGeograficzna = null, $prefixNazwy = null, $nazwa = null, $wojewodztwo = null, $powiat = null, $miejsce = null, $kodPocztowy = null, $miejscowosc = null, $ulica = null, $numerDomu = null, $numerLokalu = null, $nazwaWydruk = null, $punktWydaniaEPrzesylki = null, $powiadomienieSMS = null, $punktWydaniaPrzesylkiBiznesowejPlus = null, $punktWydaniaPrzesylkiBiznesowej = null, $siecPlacowek = null, $idZPO = null)
    {
        $this
            ->setId($id)
            ->setLokalizacjaGeograficzna($lokalizacjaGeograficzna)
            ->setPrefixNazwy($prefixNazwy)
            ->setNazwa($nazwa)
            ->setWojewodztwo($wojewodztwo)
            ->setPowiat($powiat)
            ->setMiejsce($miejsce)
            ->setKodPocztowy($kodPocztowy)
            ->setMiejscowosc($miejscowosc)
            ->setUlica($ulica)
            ->setNumerDomu($numerDomu)
            ->setNumerLokalu($numerLokalu)
            ->setNazwaWydruk($nazwaWydruk)
            ->setPunktWydaniaEPrzesylki($punktWydaniaEPrzesylki)
            ->setPowiadomienieSMS($powiadomienieSMS)
            ->setPunktWydaniaPrzesylkiBiznesowejPlus($punktWydaniaPrzesylkiBiznesowejPlus)
            ->setPunktWydaniaPrzesylkiBiznesowej($punktWydaniaPrzesylkiBiznesowej)
            ->setSiecPlacowek($siecPlacowek)
            ->setIdZPO($idZPO);
    }

    /**
     * Get id value.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id value.
     *
     * @param int $id
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;

        return $this;
    }

    /**
     * Get lokalizacjaGeograficzna value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\LokalizacjaGeograficznaType|null
     */
    public function getLokalizacjaGeograficzna()
    {
        return $this->lokalizacjaGeograficzna;
    }

    /**
     * Set lokalizacjaGeograficzna value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\LokalizacjaGeograficznaType $lokalizacjaGeograficzna
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setLokalizacjaGeograficzna(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\LokalizacjaGeograficznaType $lokalizacjaGeograficzna = null)
    {
        $this->lokalizacjaGeograficzna = $lokalizacjaGeograficzna;

        return $this;
    }

    /**
     * Get prefixNazwy value.
     *
     * @return string|null
     */
    public function getPrefixNazwy()
    {
        return $this->prefixNazwy;
    }

    /**
     * Set prefixNazwy value.
     *
     * @param string $prefixNazwy
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setPrefixNazwy($prefixNazwy = null)
    {
        // validation for constraint: string
        if (!is_null($prefixNazwy) && !is_string($prefixNazwy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($prefixNazwy, true), gettype($prefixNazwy)), __LINE__);
        }
        $this->prefixNazwy = $prefixNazwy;

        return $this;
    }

    /**
     * Get nazwa value.
     *
     * @return string|null
     */
    public function getNazwa()
    {
        return $this->nazwa;
    }

    /**
     * Set nazwa value.
     *
     * @param string $nazwa
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setNazwa($nazwa = null)
    {
        // validation for constraint: string
        if (!is_null($nazwa) && !is_string($nazwa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nazwa, true), gettype($nazwa)), __LINE__);
        }
        $this->nazwa = $nazwa;

        return $this;
    }

    /**
     * Get wojewodztwo value.
     *
     * @return string|null
     */
    public function getWojewodztwo()
    {
        return $this->wojewodztwo;
    }

    /**
     * Set wojewodztwo value.
     *
     * @param string $wojewodztwo
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setWojewodztwo($wojewodztwo = null)
    {
        // validation for constraint: string
        if (!is_null($wojewodztwo) && !is_string($wojewodztwo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wojewodztwo, true), gettype($wojewodztwo)), __LINE__);
        }
        $this->wojewodztwo = $wojewodztwo;

        return $this;
    }

    /**
     * Get powiat value.
     *
     * @return string|null
     */
    public function getPowiat()
    {
        return $this->powiat;
    }

    /**
     * Set powiat value.
     *
     * @param string $powiat
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setPowiat($powiat = null)
    {
        // validation for constraint: string
        if (!is_null($powiat) && !is_string($powiat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($powiat, true), gettype($powiat)), __LINE__);
        }
        $this->powiat = $powiat;

        return $this;
    }

    /**
     * Get miejsce value.
     *
     * @return string|null
     */
    public function getMiejsce()
    {
        return $this->miejsce;
    }

    /**
     * Set miejsce value.
     *
     * @param string $miejsce
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setMiejsce($miejsce = null)
    {
        // validation for constraint: string
        if (!is_null($miejsce) && !is_string($miejsce)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($miejsce, true), gettype($miejsce)), __LINE__);
        }
        $this->miejsce = $miejsce;

        return $this;
    }

    /**
     * Get kodPocztowy value.
     *
     * @return string|null
     */
    public function getKodPocztowy()
    {
        return $this->kodPocztowy;
    }

    /**
     * Set kodPocztowy value.
     *
     * @param string $kodPocztowy
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setKodPocztowy($kodPocztowy = null)
    {
        // validation for constraint: string
        if (!is_null($kodPocztowy) && !is_string($kodPocztowy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kodPocztowy, true), gettype($kodPocztowy)), __LINE__);
        }
        // validation for constraint: length(5)
        if (!is_null($kodPocztowy) && 5 !== mb_strlen($kodPocztowy)) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 5', mb_strlen($kodPocztowy)), __LINE__);
        }
        $this->kodPocztowy = $kodPocztowy;

        return $this;
    }

    /**
     * Get miejscowosc value.
     *
     * @return string|null
     */
    public function getMiejscowosc()
    {
        return $this->miejscowosc;
    }

    /**
     * Set miejscowosc value.
     *
     * @param string $miejscowosc
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setMiejscowosc($miejscowosc = null)
    {
        // validation for constraint: string
        if (!is_null($miejscowosc) && !is_string($miejscowosc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($miejscowosc, true), gettype($miejscowosc)), __LINE__);
        }
        // validation for constraint: maxLength(30)
        if (!is_null($miejscowosc) && mb_strlen($miejscowosc) > 30) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 30', mb_strlen($miejscowosc)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($miejscowosc) && mb_strlen($miejscowosc) < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen($miejscowosc)), __LINE__);
        }
        $this->miejscowosc = $miejscowosc;

        return $this;
    }

    /**
     * Get ulica value.
     *
     * @return string|null
     */
    public function getUlica()
    {
        return $this->ulica;
    }

    /**
     * Set ulica value.
     *
     * @param string $ulica
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setUlica($ulica = null)
    {
        // validation for constraint: string
        if (!is_null($ulica) && !is_string($ulica)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ulica, true), gettype($ulica)), __LINE__);
        }
        $this->ulica = $ulica;

        return $this;
    }

    /**
     * Get numerDomu value.
     *
     * @return string|null
     */
    public function getNumerDomu()
    {
        return $this->numerDomu;
    }

    /**
     * Set numerDomu value.
     *
     * @param string $numerDomu
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setNumerDomu($numerDomu = null)
    {
        // validation for constraint: string
        if (!is_null($numerDomu) && !is_string($numerDomu)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerDomu, true), gettype($numerDomu)), __LINE__);
        }
        $this->numerDomu = $numerDomu;

        return $this;
    }

    /**
     * Get numerLokalu value.
     *
     * @return string|null
     */
    public function getNumerLokalu()
    {
        return $this->numerLokalu;
    }

    /**
     * Set numerLokalu value.
     *
     * @param string $numerLokalu
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setNumerLokalu($numerLokalu = null)
    {
        // validation for constraint: string
        if (!is_null($numerLokalu) && !is_string($numerLokalu)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerLokalu, true), gettype($numerLokalu)), __LINE__);
        }
        $this->numerLokalu = $numerLokalu;

        return $this;
    }

    /**
     * Get nazwaWydruk value.
     *
     * @return string|null
     */
    public function getNazwaWydruk()
    {
        return $this->nazwaWydruk;
    }

    /**
     * Set nazwaWydruk value.
     *
     * @param string $nazwaWydruk
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setNazwaWydruk($nazwaWydruk = null)
    {
        // validation for constraint: string
        if (!is_null($nazwaWydruk) && !is_string($nazwaWydruk)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nazwaWydruk, true), gettype($nazwaWydruk)), __LINE__);
        }
        $this->nazwaWydruk = $nazwaWydruk;

        return $this;
    }

    /**
     * Get punktWydaniaEPrzesylki value.
     *
     * @return bool|null
     */
    public function getPunktWydaniaEPrzesylki()
    {
        return $this->punktWydaniaEPrzesylki;
    }

    /**
     * Set punktWydaniaEPrzesylki value.
     *
     * @param bool $punktWydaniaEPrzesylki
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setPunktWydaniaEPrzesylki($punktWydaniaEPrzesylki = null)
    {
        // validation for constraint: boolean
        if (!is_null($punktWydaniaEPrzesylki) && !is_bool($punktWydaniaEPrzesylki)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($punktWydaniaEPrzesylki, true), gettype($punktWydaniaEPrzesylki)), __LINE__);
        }
        $this->punktWydaniaEPrzesylki = $punktWydaniaEPrzesylki;

        return $this;
    }

    /**
     * Get powiadomienieSMS value.
     *
     * @return bool|null
     */
    public function getPowiadomienieSMS()
    {
        return $this->powiadomienieSMS;
    }

    /**
     * Set powiadomienieSMS value.
     *
     * @param bool $powiadomienieSMS
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setPowiadomienieSMS($powiadomienieSMS = null)
    {
        // validation for constraint: boolean
        if (!is_null($powiadomienieSMS) && !is_bool($powiadomienieSMS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($powiadomienieSMS, true), gettype($powiadomienieSMS)), __LINE__);
        }
        $this->powiadomienieSMS = $powiadomienieSMS;

        return $this;
    }

    /**
     * Get punktWydaniaPrzesylkiBiznesowejPlus value.
     *
     * @return bool|null
     */
    public function getPunktWydaniaPrzesylkiBiznesowejPlus()
    {
        return $this->punktWydaniaPrzesylkiBiznesowejPlus;
    }

    /**
     * Set punktWydaniaPrzesylkiBiznesowejPlus value.
     *
     * @param bool $punktWydaniaPrzesylkiBiznesowejPlus
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setPunktWydaniaPrzesylkiBiznesowejPlus($punktWydaniaPrzesylkiBiznesowejPlus = null)
    {
        // validation for constraint: boolean
        if (!is_null($punktWydaniaPrzesylkiBiznesowejPlus) && !is_bool($punktWydaniaPrzesylkiBiznesowejPlus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($punktWydaniaPrzesylkiBiznesowejPlus, true), gettype($punktWydaniaPrzesylkiBiznesowejPlus)), __LINE__);
        }
        $this->punktWydaniaPrzesylkiBiznesowejPlus = $punktWydaniaPrzesylkiBiznesowejPlus;

        return $this;
    }

    /**
     * Get punktWydaniaPrzesylkiBiznesowej value.
     *
     * @return bool|null
     */
    public function getPunktWydaniaPrzesylkiBiznesowej()
    {
        return $this->punktWydaniaPrzesylkiBiznesowej;
    }

    /**
     * Set punktWydaniaPrzesylkiBiznesowej value.
     *
     * @param bool $punktWydaniaPrzesylkiBiznesowej
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setPunktWydaniaPrzesylkiBiznesowej($punktWydaniaPrzesylkiBiznesowej = null)
    {
        // validation for constraint: boolean
        if (!is_null($punktWydaniaPrzesylkiBiznesowej) && !is_bool($punktWydaniaPrzesylkiBiznesowej)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($punktWydaniaPrzesylkiBiznesowej, true), gettype($punktWydaniaPrzesylkiBiznesowej)), __LINE__);
        }
        $this->punktWydaniaPrzesylkiBiznesowej = $punktWydaniaPrzesylkiBiznesowej;

        return $this;
    }

    /**
     * Get siecPlacowek value.
     *
     * @return string|null
     */
    public function getSiecPlacowek()
    {
        return $this->siecPlacowek;
    }

    /**
     * Set siecPlacowek value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\SiecPlacowekEnum::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\SiecPlacowekEnum::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $siecPlacowek
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setSiecPlacowek($siecPlacowek = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\SiecPlacowekEnum::valueIsValid($siecPlacowek)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\SiecPlacowekEnum', is_array($siecPlacowek) ? implode(', ', $siecPlacowek) : var_export($siecPlacowek, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\SiecPlacowekEnum::getValidValues())), __LINE__);
        }
        $this->siecPlacowek = $siecPlacowek;

        return $this;
    }

    /**
     * Get idZPO value.
     *
     * @return string|null
     */
    public function getIdZPO()
    {
        return $this->idZPO;
    }

    /**
     * Set idZPO value.
     *
     * @param string $idZPO
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public function setIdZPO($idZPO = null)
    {
        // validation for constraint: string
        if (!is_null($idZPO) && !is_string($idZPO)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idZPO, true), gettype($idZPO)), __LINE__);
        }
        $this->idZPO = $idZPO;

        return $this;
    }
}
