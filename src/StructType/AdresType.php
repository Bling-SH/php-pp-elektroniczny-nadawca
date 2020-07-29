<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for adresType StructType.
 */
class AdresType extends AbstractStructBase
{
    /**
     * The nazwa
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 60
     * - minLength: 1
     * - whiteSpace: collapse.
     *
     * @var string
     */
    public $nazwa;
    /**
     * The nazwa2
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 60
     * - minLength: 0
     * - whiteSpace: collapse.
     *
     * @var string
     */
    public $nazwa2;
    /**
     * The ulica
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 255
     * - minLength: 1
     * - whiteSpace: collapse.
     *
     * @var string
     */
    public $ulica;
    /**
     * The numerDomu
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 11
     * - minLength: 0
     * - whiteSpace: collapse.
     *
     * @var string
     */
    public $numerDomu;
    /**
     * The numerLokalu
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 11
     * - minLength: 0
     * - whiteSpace: collapse.
     *
     * @var string
     */
    public $numerLokalu;
    /**
     * The miejscowosc
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 63
     * - minLength: 1
     * - whiteSpace: collapse.
     *
     * @var string
     */
    public $miejscowosc;
    /**
     * The kodPocztowy
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 10
     * - minLength: 0
     * - whiteSpace: collapse.
     *
     * @var string
     */
    public $kodPocztowy;
    /**
     * The kraj
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - default: Polska
     * - maxLength: 40
     * - minLength: 0
     * - use: optional.
     *
     * @var string
     */
    public $kraj;
    /**
     * The telefon
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minLength: 0.
     *
     * @var string
     */
    public $telefon;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - minLength: 6.
     *
     * @var string
     */
    public $email;
    /**
     * The mobile
     * Meta information extracted from the WSDL
     * - documentation: źródło danych: http://www.uke.gov.pl/tablice/NumerPlmn-list.do?execution=e5s1 -- wygenerowano 2017-10-13 14:29:07
     * - base: xsd:string
     * - length: 9
     * - pattern: (45|50|51|53|57|60|66|69|72|73|78|79|88)[0-9]{7}.
     *
     * @var string
     */
    public $mobile;
    /**
     * The osobaKontaktowa.
     *
     * @var string
     */
    public $osobaKontaktowa;
    /**
     * The nip.
     *
     * @var string
     */
    public $nip;

    /**
     * Constructor method for adresType.
     *
     * @uses AdresType::setNazwa()
     * @uses AdresType::setNazwa2()
     * @uses AdresType::setUlica()
     * @uses AdresType::setNumerDomu()
     * @uses AdresType::setNumerLokalu()
     * @uses AdresType::setMiejscowosc()
     * @uses AdresType::setKodPocztowy()
     * @uses AdresType::setKraj()
     * @uses AdresType::setTelefon()
     * @uses AdresType::setEmail()
     * @uses AdresType::setMobile()
     * @uses AdresType::setOsobaKontaktowa()
     * @uses AdresType::setNip()
     *
     * @param string $nazwa
     * @param string $nazwa2
     * @param string $ulica
     * @param string $numerDomu
     * @param string $numerLokalu
     * @param string $miejscowosc
     * @param string $kodPocztowy
     * @param string $kraj
     * @param string $telefon
     * @param string $email
     * @param string $mobile
     * @param string $osobaKontaktowa
     * @param string $nip
     */
    public function __construct($nazwa = null, $nazwa2 = null, $ulica = null, $numerDomu = null, $numerLokalu = null, $miejscowosc = null, $kodPocztowy = null, $kraj = 'Polska', $telefon = null, $email = null, $mobile = null, $osobaKontaktowa = null, $nip = null)
    {
        $this
            ->setNazwa($nazwa)
            ->setNazwa2($nazwa2)
            ->setUlica($ulica)
            ->setNumerDomu($numerDomu)
            ->setNumerLokalu($numerLokalu)
            ->setMiejscowosc($miejscowosc)
            ->setKodPocztowy($kodPocztowy)
            ->setKraj($kraj)
            ->setTelefon($telefon)
            ->setEmail($email)
            ->setMobile($mobile)
            ->setOsobaKontaktowa($osobaKontaktowa)
            ->setNip($nip);
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType
     */
    public function setNazwa($nazwa = null)
    {
        // validation for constraint: string
        if (!is_null($nazwa) && !is_string($nazwa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nazwa, true), gettype($nazwa)), __LINE__);
        }
        // validation for constraint: maxLength(60)
        if (!is_null($nazwa) && mb_strlen($nazwa) > 60) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 60', mb_strlen($nazwa)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($nazwa) && mb_strlen($nazwa) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($nazwa)), __LINE__);
        }
        $this->nazwa = $nazwa;

        return $this;
    }

    /**
     * Get nazwa2 value.
     *
     * @return string|null
     */
    public function getNazwa2()
    {
        return $this->nazwa2;
    }

    /**
     * Set nazwa2 value.
     *
     * @param string $nazwa2
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType
     */
    public function setNazwa2($nazwa2 = null)
    {
        // validation for constraint: string
        if (!is_null($nazwa2) && !is_string($nazwa2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nazwa2, true), gettype($nazwa2)), __LINE__);
        }
        // validation for constraint: maxLength(60)
        if (!is_null($nazwa2) && mb_strlen($nazwa2) > 60) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 60', mb_strlen($nazwa2)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($nazwa2) && mb_strlen($nazwa2) < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen($nazwa2)), __LINE__);
        }
        $this->nazwa2 = $nazwa2;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType
     */
    public function setUlica($ulica = null)
    {
        // validation for constraint: string
        if (!is_null($ulica) && !is_string($ulica)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ulica, true), gettype($ulica)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($ulica) && mb_strlen($ulica) > 255) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen($ulica)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($ulica) && mb_strlen($ulica) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($ulica)), __LINE__);
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType
     */
    public function setNumerDomu($numerDomu = null)
    {
        // validation for constraint: string
        if (!is_null($numerDomu) && !is_string($numerDomu)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerDomu, true), gettype($numerDomu)), __LINE__);
        }
        // validation for constraint: maxLength(11)
        if (!is_null($numerDomu) && mb_strlen($numerDomu) > 11) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 11', mb_strlen($numerDomu)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($numerDomu) && mb_strlen($numerDomu) < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen($numerDomu)), __LINE__);
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType
     */
    public function setNumerLokalu($numerLokalu = null)
    {
        // validation for constraint: string
        if (!is_null($numerLokalu) && !is_string($numerLokalu)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerLokalu, true), gettype($numerLokalu)), __LINE__);
        }
        // validation for constraint: maxLength(11)
        if (!is_null($numerLokalu) && mb_strlen($numerLokalu) > 11) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 11', mb_strlen($numerLokalu)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($numerLokalu) && mb_strlen($numerLokalu) < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen($numerLokalu)), __LINE__);
        }
        $this->numerLokalu = $numerLokalu;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType
     */
    public function setMiejscowosc($miejscowosc = null)
    {
        // validation for constraint: string
        if (!is_null($miejscowosc) && !is_string($miejscowosc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($miejscowosc, true), gettype($miejscowosc)), __LINE__);
        }
        // validation for constraint: maxLength(63)
        if (!is_null($miejscowosc) && mb_strlen($miejscowosc) > 63) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 63', mb_strlen($miejscowosc)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($miejscowosc) && mb_strlen($miejscowosc) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($miejscowosc)), __LINE__);
        }
        $this->miejscowosc = $miejscowosc;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType
     */
    public function setKodPocztowy($kodPocztowy = null)
    {
        // validation for constraint: string
        if (!is_null($kodPocztowy) && !is_string($kodPocztowy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kodPocztowy, true), gettype($kodPocztowy)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($kodPocztowy) && mb_strlen($kodPocztowy) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen($kodPocztowy)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($kodPocztowy) && mb_strlen($kodPocztowy) < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen($kodPocztowy)), __LINE__);
        }
        $this->kodPocztowy = $kodPocztowy;

        return $this;
    }

    /**
     * Get kraj value.
     *
     * @return string|null
     */
    public function getKraj()
    {
        return $this->kraj;
    }

    /**
     * Set kraj value.
     *
     * @param string $kraj
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType
     */
    public function setKraj($kraj = 'Polska')
    {
        // validation for constraint: string
        if (!is_null($kraj) && !is_string($kraj)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kraj, true), gettype($kraj)), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (!is_null($kraj) && mb_strlen($kraj) > 40) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen($kraj)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($kraj) && mb_strlen($kraj) < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen($kraj)), __LINE__);
        }
        $this->kraj = $kraj;

        return $this;
    }

    /**
     * Get telefon value.
     *
     * @return string|null
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * Set telefon value.
     *
     * @param string $telefon
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType
     */
    public function setTelefon($telefon = null)
    {
        // validation for constraint: string
        if (!is_null($telefon) && !is_string($telefon)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($telefon, true), gettype($telefon)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($telefon) && mb_strlen($telefon) > 20) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen($telefon)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($telefon) && mb_strlen($telefon) < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen($telefon)), __LINE__);
        }
        $this->telefon = $telefon;

        return $this;
    }

    /**
     * Get email value.
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set email value.
     *
     * @param string $email
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($email) && mb_strlen($email) > 50) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen($email)), __LINE__);
        }
        // validation for constraint: minLength(6)
        if (!is_null($email) && mb_strlen($email) < 6) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 6', mb_strlen($email)), __LINE__);
        }
        $this->email = $email;

        return $this;
    }

    /**
     * Get mobile value.
     *
     * @return string|null
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set mobile value.
     *
     * @param string $mobile
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType
     */
    public function setMobile($mobile = null)
    {
        // validation for constraint: string
        if (!is_null($mobile) && !is_string($mobile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobile, true), gettype($mobile)), __LINE__);
        }
        // validation for constraint: length(9)
        if (!is_null($mobile) && 9 !== mb_strlen($mobile)) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 9', mb_strlen($mobile)), __LINE__);
        }
        // validation for constraint: pattern((45|50|51|53|57|60|66|69|72|73|78|79|88)[0-9]{7})
        if (!is_null($mobile) && !preg_match('/(45|50|51|53|57|60|66|69|72|73|78|79|88)[0-9]{7}/', $mobile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (45|50|51|53|57|60|66|69|72|73|78|79|88)[0-9]{7}', var_export($mobile, true)), __LINE__);
        }
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get osobaKontaktowa value.
     *
     * @return string|null
     */
    public function getOsobaKontaktowa()
    {
        return $this->osobaKontaktowa;
    }

    /**
     * Set osobaKontaktowa value.
     *
     * @param string $osobaKontaktowa
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType
     */
    public function setOsobaKontaktowa($osobaKontaktowa = null)
    {
        // validation for constraint: string
        if (!is_null($osobaKontaktowa) && !is_string($osobaKontaktowa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($osobaKontaktowa, true), gettype($osobaKontaktowa)), __LINE__);
        }
        $this->osobaKontaktowa = $osobaKontaktowa;

        return $this;
    }

    /**
     * Get nip value.
     *
     * @return string|null
     */
    public function getNip()
    {
        return $this->nip;
    }

    /**
     * Set nip value.
     *
     * @param string $nip
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType
     */
    public function setNip($nip = null)
    {
        // validation for constraint: string
        if (!is_null($nip) && !is_string($nip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nip, true), gettype($nip)), __LINE__);
        }
        $this->nip = $nip;

        return $this;
    }
}
