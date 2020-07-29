<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for accountType StructType.
 */
class AccountType extends AbstractStructBase
{
    /**
     * The profil
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType[]
     */
    public $profil;
    /**
     * The karta
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KartaType[]
     */
    public $karta;
    /**
     * The permision
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var string[]
     */
    public $permision;
    /**
     * The jednostka
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[]
     */
    public $jednostka;
    /**
     * The domyslnaJednostka
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
     */
    public $domyslnaJednostka;
    /**
     * The domyslnyProfil
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType
     */
    public $domyslnyProfil;
    /**
     * The dostepPoAdresieIP
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var string[]
     */
    public $dostepPoAdresieIP;
    /**
     * The userName.
     *
     * @var string
     */
    public $userName;
    /**
     * The firstName.
     *
     * @var string
     */
    public $firstName;
    /**
     * The lastName.
     *
     * @var string
     */
    public $lastName;
    /**
     * The email.
     *
     * @var string
     */
    public $email;
    /**
     * The status.
     *
     * @var string
     */
    public $status;

    /**
     * Constructor method for accountType.
     *
     * @uses AccountType::setProfil()
     * @uses AccountType::setKarta()
     * @uses AccountType::setPermision()
     * @uses AccountType::setJednostka()
     * @uses AccountType::setDomyslnaJednostka()
     * @uses AccountType::setDomyslnyProfil()
     * @uses AccountType::setDostepPoAdresieIP()
     * @uses AccountType::setUserName()
     * @uses AccountType::setFirstName()
     * @uses AccountType::setLastName()
     * @uses AccountType::setEmail()
     * @uses AccountType::setStatus()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType[]                 $profil
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KartaType[]                  $karta
     * @param string[]                                                                         $permision
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[] $jednostka
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType   $domyslnaJednostka
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType                   $domyslnyProfil
     * @param string[]                                                                         $dostepPoAdresieIP
     * @param string                                                                           $userName
     * @param string                                                                           $firstName
     * @param string                                                                           $lastName
     * @param string                                                                           $email
     * @param string                                                                           $status
     */
    public function __construct(array $profil = [], array $karta = [], array $permision = [], array $jednostka = [], \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $domyslnaJednostka = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType $domyslnyProfil = null, array $dostepPoAdresieIP = [], $userName = null, $firstName = null, $lastName = null, $email = null, $status = null)
    {
        $this
            ->setProfil($profil)
            ->setKarta($karta)
            ->setPermision($permision)
            ->setJednostka($jednostka)
            ->setDomyslnaJednostka($domyslnaJednostka)
            ->setDomyslnyProfil($domyslnyProfil)
            ->setDostepPoAdresieIP($dostepPoAdresieIP)
            ->setUserName($userName)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setEmail($email)
            ->setStatus($status);
    }

    /**
     * Get profil value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType[]
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * This method is responsible for validating the values passed to the setProfil method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProfil method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProfilForArrayConstraintsFromSetProfil(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $accountTypeProfilItem) {
            // validation for constraint: itemType
            if (!$accountTypeProfilItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType) {
                $invalidValues[] = is_object($accountTypeProfilItem) ? get_class($accountTypeProfilItem) : sprintf('%s(%s)', gettype($accountTypeProfilItem), var_export($accountTypeProfilItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The profil property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set profil value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType[] $profil
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType
     */
    public function setProfil(array $profil = [])
    {
        // validation for constraint: array
        if ('' !== ($profilArrayErrorMessage = self::validateProfilForArrayConstraintsFromSetProfil($profil))) {
            throw new \InvalidArgumentException($profilArrayErrorMessage, __LINE__);
        }
        $this->profil = $profil;

        return $this;
    }

    /**
     * Add item to profil value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType
     */
    public function addToProfil(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType) {
            throw new \InvalidArgumentException(sprintf('The profil property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->profil[] = $item;

        return $this;
    }

    /**
     * Get karta value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KartaType[]|null
     */
    public function getKarta()
    {
        return $this->karta;
    }

    /**
     * This method is responsible for validating the values passed to the setKarta method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKarta method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKartaForArrayConstraintsFromSetKarta(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $accountTypeKartaItem) {
            // validation for constraint: itemType
            if (!$accountTypeKartaItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KartaType) {
                $invalidValues[] = is_object($accountTypeKartaItem) ? get_class($accountTypeKartaItem) : sprintf('%s(%s)', gettype($accountTypeKartaItem), var_export($accountTypeKartaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The karta property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KartaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set karta value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KartaType[] $karta
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType
     */
    public function setKarta(array $karta = [])
    {
        // validation for constraint: array
        if ('' !== ($kartaArrayErrorMessage = self::validateKartaForArrayConstraintsFromSetKarta($karta))) {
            throw new \InvalidArgumentException($kartaArrayErrorMessage, __LINE__);
        }
        $this->karta = $karta;

        return $this;
    }

    /**
     * Add item to karta value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType
     */
    public function addToKarta(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\KartaType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KartaType) {
            throw new \InvalidArgumentException(sprintf('The karta property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KartaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->karta[] = $item;

        return $this;
    }

    /**
     * Get permision value.
     *
     * @return string[]|null
     */
    public function getPermision()
    {
        return $this->permision;
    }

    /**
     * This method is responsible for validating the values passed to the setPermision method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPermision method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePermisionForArrayConstraintsFromSetPermision(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $accountTypePermisionItem) {
            // validation for constraint: enumeration
            if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\PermisionType::valueIsValid($accountTypePermisionItem)) {
                $invalidValues[] = is_object($accountTypePermisionItem) ? get_class($accountTypePermisionItem) : sprintf('%s(%s)', gettype($accountTypePermisionItem), var_export($accountTypePermisionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\PermisionType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\PermisionType::getValidValues()));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set permision value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\PermisionType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\PermisionType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string[] $permision
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType
     */
    public function setPermision(array $permision = [])
    {
        // validation for constraint: array
        if ('' !== ($permisionArrayErrorMessage = self::validatePermisionForArrayConstraintsFromSetPermision($permision))) {
            throw new \InvalidArgumentException($permisionArrayErrorMessage, __LINE__);
        }
        $this->permision = $permision;

        return $this;
    }

    /**
     * Add item to permision value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\PermisionType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\PermisionType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $item
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType
     */
    public function addToPermision($item)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\PermisionType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\PermisionType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\PermisionType::getValidValues())), __LINE__);
        }
        $this->permision[] = $item;

        return $this;
    }

    /**
     * Get jednostka value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[]|null
     */
    public function getJednostka()
    {
        return $this->jednostka;
    }

    /**
     * This method is responsible for validating the values passed to the setJednostka method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJednostka method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJednostkaForArrayConstraintsFromSetJednostka(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $accountTypeJednostkaItem) {
            // validation for constraint: itemType
            if (!$accountTypeJednostkaItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType) {
                $invalidValues[] = is_object($accountTypeJednostkaItem) ? get_class($accountTypeJednostkaItem) : sprintf('%s(%s)', gettype($accountTypeJednostkaItem), var_export($accountTypeJednostkaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The jednostka property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set jednostka value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType[] $jednostka
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType
     */
    public function setJednostka(array $jednostka = [])
    {
        // validation for constraint: array
        if ('' !== ($jednostkaArrayErrorMessage = self::validateJednostkaForArrayConstraintsFromSetJednostka($jednostka))) {
            throw new \InvalidArgumentException($jednostkaArrayErrorMessage, __LINE__);
        }
        $this->jednostka = $jednostka;

        return $this;
    }

    /**
     * Add item to jednostka value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType
     */
    public function addToJednostka(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType) {
            throw new \InvalidArgumentException(sprintf('The jednostka property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->jednostka[] = $item;

        return $this;
    }

    /**
     * Get domyslnaJednostka value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType|null
     */
    public function getDomyslnaJednostka()
    {
        return $this->domyslnaJednostka;
    }

    /**
     * Set domyslnaJednostka value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $domyslnaJednostka
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType
     */
    public function setDomyslnaJednostka(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $domyslnaJednostka = null)
    {
        $this->domyslnaJednostka = $domyslnaJednostka;

        return $this;
    }

    /**
     * Get domyslnyProfil value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType|null
     */
    public function getDomyslnyProfil()
    {
        return $this->domyslnyProfil;
    }

    /**
     * Set domyslnyProfil value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType $domyslnyProfil
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType
     */
    public function setDomyslnyProfil(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType $domyslnyProfil = null)
    {
        $this->domyslnyProfil = $domyslnyProfil;

        return $this;
    }

    /**
     * Get dostepPoAdresieIP value.
     *
     * @return string[]|null
     */
    public function getDostepPoAdresieIP()
    {
        return $this->dostepPoAdresieIP;
    }

    /**
     * This method is responsible for validating the values passed to the setDostepPoAdresieIP method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDostepPoAdresieIP method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDostepPoAdresieIPForArrayConstraintsFromSetDostepPoAdresieIP(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $accountTypeDostepPoAdresieIPItem) {
            // validation for constraint: itemType
            if (!is_string($accountTypeDostepPoAdresieIPItem)) {
                $invalidValues[] = is_object($accountTypeDostepPoAdresieIPItem) ? get_class($accountTypeDostepPoAdresieIPItem) : sprintf('%s(%s)', gettype($accountTypeDostepPoAdresieIPItem), var_export($accountTypeDostepPoAdresieIPItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The dostepPoAdresieIP property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set dostepPoAdresieIP value.
     *
     * @throws \InvalidArgumentException
     *
     * @param string[] $dostepPoAdresieIP
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType
     */
    public function setDostepPoAdresieIP(array $dostepPoAdresieIP = [])
    {
        // validation for constraint: array
        if ('' !== ($dostepPoAdresieIPArrayErrorMessage = self::validateDostepPoAdresieIPForArrayConstraintsFromSetDostepPoAdresieIP($dostepPoAdresieIP))) {
            throw new \InvalidArgumentException($dostepPoAdresieIPArrayErrorMessage, __LINE__);
        }
        $this->dostepPoAdresieIP = $dostepPoAdresieIP;

        return $this;
    }

    /**
     * Add item to dostepPoAdresieIP value.
     *
     * @throws \InvalidArgumentException
     *
     * @param string $item
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType
     */
    public function addToDostepPoAdresieIP($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The dostepPoAdresieIP property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->dostepPoAdresieIP[] = $item;

        return $this;
    }

    /**
     * Get userName value.
     *
     * @return string|null
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set userName value.
     *
     * @param string $userName
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType
     */
    public function setUserName($userName = null)
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get firstName value.
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set firstName value.
     *
     * @param string $firstName
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get lastName value.
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set lastName value.
     *
     * @param string $lastName
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        $this->lastName = $lastName;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;

        return $this;
    }

    /**
     * Get status value.
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set status value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\StatusAccountType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\StatusAccountType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $status
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\StatusAccountType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\StatusAccountType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\StatusAccountType::getValidValues())), __LINE__);
        }
        $this->status = $status;

        return $this;
    }
}
