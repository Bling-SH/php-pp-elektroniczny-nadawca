<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shopEZwrotyType StructType.
 */
class ShopEZwrotyType extends AbstractStructBase
{
    /**
     * The eZwrotPrzesylki
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 1.
     *
     * @var string[]
     */
    public $eZwrotPrzesylki;
    /**
     * The nazwa
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 60
     * - minLength: 1
     * - use: required
     * - whiteSpace: collapse.
     *
     * @var string
     */
    public $nazwa;
    /**
     * The przyjaznaNazwa
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 60
     * - minLength: 1
     * - use: required
     * - whiteSpace: collapse.
     *
     * @var string
     */
    public $przyjaznaNazwa;
    /**
     * The ulica
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 255
     * - minLength: 1
     * - use: required
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
     * - use: required
     * - whiteSpace: collapse.
     *
     * @var string
     */
    public $numerDomu;
    /**
     * The miejscowosc
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 63
     * - minLength: 1
     * - use: required
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
     * - use: required
     * - whiteSpace: collapse.
     *
     * @var string
     */
    public $kodPocztowy;
    /**
     * The mobile
     * Meta information extracted from the WSDL
     * - documentation: źródło danych: http://www.uke.gov.pl/tablice/NumerPlmn-list.do?execution=e5s1 -- wygenerowano 2017-10-13 14:29:07
     * - base: xsd:string
     * - length: 9
     * - pattern: (45|50|51|53|57|60|66|69|72|73|78|79|88)[0-9]{7}
     * - use: required.
     *
     * @var string
     */
    public $mobile;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - minLength: 6
     * - use: required.
     *
     * @var string
     */
    public $email;
    /**
     * The idShop.
     *
     * @var int
     */
    public $idShop;
    /**
     * The nazwa2
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 60
     * - minLength: 1
     * - use: optional
     * - whiteSpace: collapse.
     *
     * @var string
     */
    public $nazwa2;
    /**
     * The numerLokalu
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 11
     * - minLength: 0
     * - use: optional
     * - whiteSpace: collapse.
     *
     * @var string
     */
    public $numerLokalu;
    /**
     * The nip
     * Meta information extracted from the WSDL
     * - use: optional.
     *
     * @var string
     */
    public $nip;
    /**
     * The regon.
     *
     * @var string
     */
    public $regon;
    /**
     * The krs.
     *
     * @var string
     */
    public $krs;
    /**
     * The eZwrotTyp.
     *
     * @var string
     */
    public $eZwrotTyp;
    /**
     * The wymagalnoscNumeruIdentyfikujacegoPrzesylke.
     *
     * @var bool
     */
    public $wymagalnoscNumeruIdentyfikujacegoPrzesylke;

    /**
     * Constructor method for shopEZwrotyType.
     *
     * @uses ShopEZwrotyType::setEZwrotPrzesylki()
     * @uses ShopEZwrotyType::setNazwa()
     * @uses ShopEZwrotyType::setPrzyjaznaNazwa()
     * @uses ShopEZwrotyType::setUlica()
     * @uses ShopEZwrotyType::setNumerDomu()
     * @uses ShopEZwrotyType::setMiejscowosc()
     * @uses ShopEZwrotyType::setKodPocztowy()
     * @uses ShopEZwrotyType::setMobile()
     * @uses ShopEZwrotyType::setEmail()
     * @uses ShopEZwrotyType::setIdShop()
     * @uses ShopEZwrotyType::setNazwa2()
     * @uses ShopEZwrotyType::setNumerLokalu()
     * @uses ShopEZwrotyType::setNip()
     * @uses ShopEZwrotyType::setRegon()
     * @uses ShopEZwrotyType::setKrs()
     * @uses ShopEZwrotyType::setEZwrotTyp()
     * @uses ShopEZwrotyType::setWymagalnoscNumeruIdentyfikujacegoPrzesylke()
     *
     * @param string[] $eZwrotPrzesylki
     * @param string   $nazwa
     * @param string   $przyjaznaNazwa
     * @param string   $ulica
     * @param string   $numerDomu
     * @param string   $miejscowosc
     * @param string   $kodPocztowy
     * @param string   $mobile
     * @param string   $email
     * @param int      $idShop
     * @param string   $nazwa2
     * @param string   $numerLokalu
     * @param string   $nip
     * @param string   $regon
     * @param string   $krs
     * @param string   $eZwrotTyp
     * @param bool     $wymagalnoscNumeruIdentyfikujacegoPrzesylke
     */
    public function __construct(array $eZwrotPrzesylki = [], $nazwa = null, $przyjaznaNazwa = null, $ulica = null, $numerDomu = null, $miejscowosc = null, $kodPocztowy = null, $mobile = null, $email = null, $idShop = null, $nazwa2 = null, $numerLokalu = null, $nip = null, $regon = null, $krs = null, $eZwrotTyp = null, $wymagalnoscNumeruIdentyfikujacegoPrzesylke = null)
    {
        $this
            ->setEZwrotPrzesylki($eZwrotPrzesylki)
            ->setNazwa($nazwa)
            ->setPrzyjaznaNazwa($przyjaznaNazwa)
            ->setUlica($ulica)
            ->setNumerDomu($numerDomu)
            ->setMiejscowosc($miejscowosc)
            ->setKodPocztowy($kodPocztowy)
            ->setMobile($mobile)
            ->setEmail($email)
            ->setIdShop($idShop)
            ->setNazwa2($nazwa2)
            ->setNumerLokalu($numerLokalu)
            ->setNip($nip)
            ->setRegon($regon)
            ->setKrs($krs)
            ->setEZwrotTyp($eZwrotTyp)
            ->setWymagalnoscNumeruIdentyfikujacegoPrzesylke($wymagalnoscNumeruIdentyfikujacegoPrzesylke);
    }

    /**
     * Get eZwrotPrzesylki value.
     *
     * @return string[]
     */
    public function getEZwrotPrzesylki()
    {
        return $this->eZwrotPrzesylki;
    }

    /**
     * This method is responsible for validating the values passed to the setEZwrotPrzesylki method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEZwrotPrzesylki method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEZwrotPrzesylkiForArrayConstraintsFromSetEZwrotPrzesylki(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $shopEZwrotyTypeEZwrotPrzesylkiItem) {
            // validation for constraint: enumeration
            if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\EZwrotPrzesylkiType::valueIsValid($shopEZwrotyTypeEZwrotPrzesylkiItem)) {
                $invalidValues[] = is_object($shopEZwrotyTypeEZwrotPrzesylkiItem) ? get_class($shopEZwrotyTypeEZwrotPrzesylkiItem) : sprintf('%s(%s)', gettype($shopEZwrotyTypeEZwrotPrzesylkiItem), var_export($shopEZwrotyTypeEZwrotPrzesylkiItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\EZwrotPrzesylkiType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\EZwrotPrzesylkiType::getValidValues()));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set eZwrotPrzesylki value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\EZwrotPrzesylkiType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\EZwrotPrzesylkiType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string[] $eZwrotPrzesylki
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setEZwrotPrzesylki(array $eZwrotPrzesylki = [])
    {
        // validation for constraint: array
        if ('' !== ($eZwrotPrzesylkiArrayErrorMessage = self::validateEZwrotPrzesylkiForArrayConstraintsFromSetEZwrotPrzesylki($eZwrotPrzesylki))) {
            throw new \InvalidArgumentException($eZwrotPrzesylkiArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($eZwrotPrzesylki) && count($eZwrotPrzesylki) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 2', count($eZwrotPrzesylki)), __LINE__);
        }
        $this->eZwrotPrzesylki = $eZwrotPrzesylki;

        return $this;
    }

    /**
     * Add item to eZwrotPrzesylki value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\EZwrotPrzesylkiType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\EZwrotPrzesylkiType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $item
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function addToEZwrotPrzesylki($item)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\EZwrotPrzesylkiType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\EZwrotPrzesylkiType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\EZwrotPrzesylkiType::getValidValues())), __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($this->eZwrotPrzesylki) && count($this->eZwrotPrzesylki) >= 2) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 2', count($this->eZwrotPrzesylki)), __LINE__);
        }
        $this->eZwrotPrzesylki[] = $item;

        return $this;
    }

    /**
     * Get nazwa value.
     *
     * @return string
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ShopEZwrotyType
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
     * Get przyjaznaNazwa value.
     *
     * @return string
     */
    public function getPrzyjaznaNazwa()
    {
        return $this->przyjaznaNazwa;
    }

    /**
     * Set przyjaznaNazwa value.
     *
     * @param string $przyjaznaNazwa
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setPrzyjaznaNazwa($przyjaznaNazwa = null)
    {
        // validation for constraint: string
        if (!is_null($przyjaznaNazwa) && !is_string($przyjaznaNazwa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($przyjaznaNazwa, true), gettype($przyjaznaNazwa)), __LINE__);
        }
        // validation for constraint: maxLength(60)
        if (!is_null($przyjaznaNazwa) && mb_strlen($przyjaznaNazwa) > 60) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 60', mb_strlen($przyjaznaNazwa)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($przyjaznaNazwa) && mb_strlen($przyjaznaNazwa) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($przyjaznaNazwa)), __LINE__);
        }
        $this->przyjaznaNazwa = $przyjaznaNazwa;

        return $this;
    }

    /**
     * Get ulica value.
     *
     * @return string
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ShopEZwrotyType
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
     * @return string
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ShopEZwrotyType
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
     * Get miejscowosc value.
     *
     * @return string
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ShopEZwrotyType
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
     * @return string
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ShopEZwrotyType
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
     * Get mobile value.
     *
     * @return string
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ShopEZwrotyType
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
     * Get email value.
     *
     * @return string
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ShopEZwrotyType
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
     * Get idShop value.
     *
     * @return int|null
     */
    public function getIdShop()
    {
        return $this->idShop;
    }

    /**
     * Set idShop value.
     *
     * @param int $idShop
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setIdShop($idShop = null)
    {
        // validation for constraint: int
        if (!is_null($idShop) && !(is_int($idShop) || ctype_digit($idShop))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idShop, true), gettype($idShop)), __LINE__);
        }
        $this->idShop = $idShop;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ShopEZwrotyType
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
        // validation for constraint: minLength(1)
        if (!is_null($nazwa2) && mb_strlen($nazwa2) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($nazwa2)), __LINE__);
        }
        $this->nazwa2 = $nazwa2;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ShopEZwrotyType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ShopEZwrotyType
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

    /**
     * Get regon value.
     *
     * @return string|null
     */
    public function getRegon()
    {
        return $this->regon;
    }

    /**
     * Set regon value.
     *
     * @param string $regon
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setRegon($regon = null)
    {
        // validation for constraint: string
        if (!is_null($regon) && !is_string($regon)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($regon, true), gettype($regon)), __LINE__);
        }
        $this->regon = $regon;

        return $this;
    }

    /**
     * Get krs value.
     *
     * @return string|null
     */
    public function getKrs()
    {
        return $this->krs;
    }

    /**
     * Set krs value.
     *
     * @param string $krs
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setKrs($krs = null)
    {
        // validation for constraint: string
        if (!is_null($krs) && !is_string($krs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($krs, true), gettype($krs)), __LINE__);
        }
        $this->krs = $krs;

        return $this;
    }

    /**
     * Get eZwrotTyp value.
     *
     * @return string|null
     */
    public function getEZwrotTyp()
    {
        return $this->eZwrotTyp;
    }

    /**
     * Set eZwrotTyp value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\EZwrotTypZgodyType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\EZwrotTypZgodyType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $eZwrotTyp
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setEZwrotTyp($eZwrotTyp = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\EZwrotTypZgodyType::valueIsValid($eZwrotTyp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\EZwrotTypZgodyType', is_array($eZwrotTyp) ? implode(', ', $eZwrotTyp) : var_export($eZwrotTyp, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\EZwrotTypZgodyType::getValidValues())), __LINE__);
        }
        $this->eZwrotTyp = $eZwrotTyp;

        return $this;
    }

    /**
     * Get wymagalnoscNumeruIdentyfikujacegoPrzesylke value.
     *
     * @return bool|null
     */
    public function getWymagalnoscNumeruIdentyfikujacegoPrzesylke()
    {
        return $this->wymagalnoscNumeruIdentyfikujacegoPrzesylke;
    }

    /**
     * Set wymagalnoscNumeruIdentyfikujacegoPrzesylke value.
     *
     * @param bool $wymagalnoscNumeruIdentyfikujacegoPrzesylke
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public function setWymagalnoscNumeruIdentyfikujacegoPrzesylke($wymagalnoscNumeruIdentyfikujacegoPrzesylke = null)
    {
        // validation for constraint: boolean
        if (!is_null($wymagalnoscNumeruIdentyfikujacegoPrzesylke) && !is_bool($wymagalnoscNumeruIdentyfikujacegoPrzesylke)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($wymagalnoscNumeruIdentyfikujacegoPrzesylke, true), gettype($wymagalnoscNumeruIdentyfikujacegoPrzesylke)), __LINE__);
        }
        $this->wymagalnoscNumeruIdentyfikujacegoPrzesylke = $wymagalnoscNumeruIdentyfikujacegoPrzesylke;

        return $this;
    }
}
