<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for oczekujeNaZgodeEZwrotType StructType.
 */
class OczekujeNaZgodeEZwrotType extends AbstractStructBase
{
    /**
     * The sklepEZwrot
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ShopEZwrotyType
     */
    public $sklepEZwrot;
    /**
     * The idZgody.
     *
     * @var int
     */
    public $idZgody;
    /**
     * The nazwaProduktu
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 60.
     *
     * @var string
     */
    public $nazwaProduktu;
    /**
     * The numerZamowienia
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 150.
     *
     * @var string
     */
    public $numerZamowienia;
    /**
     * The numerNadania
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minLength: 13.
     *
     * @var string
     */
    public $numerNadania;
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
     * The dataNadania.
     *
     * @var string
     */
    public $dataNadania;
    /**
     * The guidZgodaEZwrot
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - whiteSpace: collapse.
     *
     * @var string
     */
    public $guidZgodaEZwrot;

    /**
     * Constructor method for oczekujeNaZgodeEZwrotType.
     *
     * @uses OczekujeNaZgodeEZwrotType::setSklepEZwrot()
     * @uses OczekujeNaZgodeEZwrotType::setIdZgody()
     * @uses OczekujeNaZgodeEZwrotType::setNazwaProduktu()
     * @uses OczekujeNaZgodeEZwrotType::setNumerZamowienia()
     * @uses OczekujeNaZgodeEZwrotType::setNumerNadania()
     * @uses OczekujeNaZgodeEZwrotType::setEmail()
     * @uses OczekujeNaZgodeEZwrotType::setDataNadania()
     * @uses OczekujeNaZgodeEZwrotType::setGuidZgodaEZwrot()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ShopEZwrotyType $sklepEZwrot
     * @param int                                                                 $idZgody
     * @param string                                                              $nazwaProduktu
     * @param string                                                              $numerZamowienia
     * @param string                                                              $numerNadania
     * @param string                                                              $email
     * @param string                                                              $dataNadania
     * @param string                                                              $guidZgodaEZwrot
     */
    public function __construct(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\ShopEZwrotyType $sklepEZwrot = null, $idZgody = null, $nazwaProduktu = null, $numerZamowienia = null, $numerNadania = null, $email = null, $dataNadania = null, $guidZgodaEZwrot = null)
    {
        $this
            ->setSklepEZwrot($sklepEZwrot)
            ->setIdZgody($idZgody)
            ->setNazwaProduktu($nazwaProduktu)
            ->setNumerZamowienia($numerZamowienia)
            ->setNumerNadania($numerNadania)
            ->setEmail($email)
            ->setDataNadania($dataNadania)
            ->setGuidZgodaEZwrot($guidZgodaEZwrot);
    }

    /**
     * Get sklepEZwrot value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ShopEZwrotyType|null
     */
    public function getSklepEZwrot()
    {
        return $this->sklepEZwrot;
    }

    /**
     * Set sklepEZwrot value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ShopEZwrotyType $sklepEZwrot
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType
     */
    public function setSklepEZwrot(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\ShopEZwrotyType $sklepEZwrot = null)
    {
        $this->sklepEZwrot = $sklepEZwrot;

        return $this;
    }

    /**
     * Get idZgody value.
     *
     * @return int|null
     */
    public function getIdZgody()
    {
        return $this->idZgody;
    }

    /**
     * Set idZgody value.
     *
     * @param int $idZgody
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType
     */
    public function setIdZgody($idZgody = null)
    {
        // validation for constraint: int
        if (!is_null($idZgody) && !(is_int($idZgody) || ctype_digit($idZgody))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idZgody, true), gettype($idZgody)), __LINE__);
        }
        $this->idZgody = $idZgody;

        return $this;
    }

    /**
     * Get nazwaProduktu value.
     *
     * @return string|null
     */
    public function getNazwaProduktu()
    {
        return $this->nazwaProduktu;
    }

    /**
     * Set nazwaProduktu value.
     *
     * @param string $nazwaProduktu
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType
     */
    public function setNazwaProduktu($nazwaProduktu = null)
    {
        // validation for constraint: string
        if (!is_null($nazwaProduktu) && !is_string($nazwaProduktu)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nazwaProduktu, true), gettype($nazwaProduktu)), __LINE__);
        }
        // validation for constraint: length(60)
        if (!is_null($nazwaProduktu) && 60 !== mb_strlen($nazwaProduktu)) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 60', mb_strlen($nazwaProduktu)), __LINE__);
        }
        $this->nazwaProduktu = $nazwaProduktu;

        return $this;
    }

    /**
     * Get numerZamowienia value.
     *
     * @return string|null
     */
    public function getNumerZamowienia()
    {
        return $this->numerZamowienia;
    }

    /**
     * Set numerZamowienia value.
     *
     * @param string $numerZamowienia
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType
     */
    public function setNumerZamowienia($numerZamowienia = null)
    {
        // validation for constraint: string
        if (!is_null($numerZamowienia) && !is_string($numerZamowienia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerZamowienia, true), gettype($numerZamowienia)), __LINE__);
        }
        // validation for constraint: length(150)
        if (!is_null($numerZamowienia) && 150 !== mb_strlen($numerZamowienia)) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 150', mb_strlen($numerZamowienia)), __LINE__);
        }
        $this->numerZamowienia = $numerZamowienia;

        return $this;
    }

    /**
     * Get numerNadania value.
     *
     * @return string|null
     */
    public function getNumerNadania()
    {
        return $this->numerNadania;
    }

    /**
     * Set numerNadania value.
     *
     * @param string $numerNadania
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType
     */
    public function setNumerNadania($numerNadania = null)
    {
        // validation for constraint: string
        if (!is_null($numerNadania) && !is_string($numerNadania)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerNadania, true), gettype($numerNadania)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($numerNadania) && mb_strlen($numerNadania) > 20) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen($numerNadania)), __LINE__);
        }
        // validation for constraint: minLength(13)
        if (!is_null($numerNadania) && mb_strlen($numerNadania) < 13) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 13', mb_strlen($numerNadania)), __LINE__);
        }
        $this->numerNadania = $numerNadania;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType
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
     * Get dataNadania value.
     *
     * @return string|null
     */
    public function getDataNadania()
    {
        return $this->dataNadania;
    }

    /**
     * Set dataNadania value.
     *
     * @param string $dataNadania
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType
     */
    public function setDataNadania($dataNadania = null)
    {
        // validation for constraint: string
        if (!is_null($dataNadania) && !is_string($dataNadania)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataNadania, true), gettype($dataNadania)), __LINE__);
        }
        $this->dataNadania = $dataNadania;

        return $this;
    }

    /**
     * Get guidZgodaEZwrot value.
     *
     * @return string|null
     */
    public function getGuidZgodaEZwrot()
    {
        return $this->guidZgodaEZwrot;
    }

    /**
     * Set guidZgodaEZwrot value.
     *
     * @param string $guidZgodaEZwrot
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OczekujeNaZgodeEZwrotType
     */
    public function setGuidZgodaEZwrot($guidZgodaEZwrot = null)
    {
        // validation for constraint: string
        if (!is_null($guidZgodaEZwrot) && !is_string($guidZgodaEZwrot)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guidZgodaEZwrot, true), gettype($guidZgodaEZwrot)), __LINE__);
        }
        // validation for constraint: length(32)
        if (!is_null($guidZgodaEZwrot) && 32 !== mb_strlen($guidZgodaEZwrot)) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 32', mb_strlen($guidZgodaEZwrot)), __LINE__);
        }
        $this->guidZgodaEZwrot = $guidZgodaEZwrot;

        return $this;
    }
}
