<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for jednostkaOrganizacyjnaType StructType.
 */
class JednostkaOrganizacyjnaType extends AbstractStructBase
{
    /**
     * The account
     * Meta information extracted from the WSDL
     * - documentation: Wystarczy przesłać obiekt z ustawionym id reszta pól może zostać pominięta (aby zmniejszyć ilośc danych do transmisji)
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType[]
     */
    public $account;
    /**
     * The jednostkaNadrzedna
     * Meta information extracted from the WSDL
     * - documentation: Wystarczy przesłać obiekt z ustawionym id reszta pól może zostać pominięta (aby zmniejszyć ilośc danych do transmisji)
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
     */
    public $jednostkaNadrzedna;
    /**
     * The id.
     *
     * @var int
     */
    public $id;
    /**
     * The nazwa
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 255
     * - minLength: 1.
     *
     * @var string
     */
    public $nazwa;
    /**
     * The opis
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 4000
     * - minLength: 0.
     *
     * @var string
     */
    public $opis;
    /**
     * The mpk.
     *
     * @var string
     */
    public $mpk;

    /**
     * Constructor method for jednostkaOrganizacyjnaType.
     *
     * @uses JednostkaOrganizacyjnaType::setAccount()
     * @uses JednostkaOrganizacyjnaType::setJednostkaNadrzedna()
     * @uses JednostkaOrganizacyjnaType::setId()
     * @uses JednostkaOrganizacyjnaType::setNazwa()
     * @uses JednostkaOrganizacyjnaType::setOpis()
     * @uses JednostkaOrganizacyjnaType::setMpk()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType[]              $account
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $jednostkaNadrzedna
     * @param int                                                                            $id
     * @param string                                                                         $nazwa
     * @param string                                                                         $opis
     * @param string                                                                         $mpk
     */
    public function __construct(array $account = [], \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $jednostkaNadrzedna = null, $id = null, $nazwa = null, $opis = null, $mpk = null)
    {
        $this
            ->setAccount($account)
            ->setJednostkaNadrzedna($jednostkaNadrzedna)
            ->setId($id)
            ->setNazwa($nazwa)
            ->setOpis($opis)
            ->setMpk($mpk);
    }

    /**
     * Get account value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType[]|null
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * This method is responsible for validating the values passed to the setAccount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccount method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccountForArrayConstraintsFromSetAccount(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $jednostkaOrganizacyjnaTypeAccountItem) {
            // validation for constraint: itemType
            if (!$jednostkaOrganizacyjnaTypeAccountItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType) {
                $invalidValues[] = is_object($jednostkaOrganizacyjnaTypeAccountItem) ? get_class($jednostkaOrganizacyjnaTypeAccountItem) : sprintf('%s(%s)', gettype($jednostkaOrganizacyjnaTypeAccountItem), var_export($jednostkaOrganizacyjnaTypeAccountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The account property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set account value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType[] $account
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
     */
    public function setAccount(array $account = [])
    {
        // validation for constraint: array
        if ('' !== ($accountArrayErrorMessage = self::validateAccountForArrayConstraintsFromSetAccount($account))) {
            throw new \InvalidArgumentException($accountArrayErrorMessage, __LINE__);
        }
        $this->account = $account;

        return $this;
    }

    /**
     * Add item to account value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
     */
    public function addToAccount(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType) {
            throw new \InvalidArgumentException(sprintf('The account property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->account[] = $item;

        return $this;
    }

    /**
     * Get jednostkaNadrzedna value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType|null
     */
    public function getJednostkaNadrzedna()
    {
        return $this->jednostkaNadrzedna;
    }

    /**
     * Set jednostkaNadrzedna value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $jednostkaNadrzedna
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
     */
    public function setJednostkaNadrzedna(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType $jednostkaNadrzedna = null)
    {
        $this->jednostkaNadrzedna = $jednostkaNadrzedna;

        return $this;
    }

    /**
     * Get id value.
     *
     * @return int|null
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
     */
    public function setNazwa($nazwa = null)
    {
        // validation for constraint: string
        if (!is_null($nazwa) && !is_string($nazwa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nazwa, true), gettype($nazwa)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($nazwa) && mb_strlen($nazwa) > 255) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen($nazwa)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($nazwa) && mb_strlen($nazwa) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($nazwa)), __LINE__);
        }
        $this->nazwa = $nazwa;

        return $this;
    }

    /**
     * Get opis value.
     *
     * @return string|null
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * Set opis value.
     *
     * @param string $opis
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
     */
    public function setOpis($opis = null)
    {
        // validation for constraint: string
        if (!is_null($opis) && !is_string($opis)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($opis, true), gettype($opis)), __LINE__);
        }
        // validation for constraint: maxLength(4000)
        if (!is_null($opis) && mb_strlen($opis) > 4000) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4000', mb_strlen($opis)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($opis) && mb_strlen($opis) < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen($opis)), __LINE__);
        }
        $this->opis = $opis;

        return $this;
    }

    /**
     * Get mpk value.
     *
     * @return string|null
     */
    public function getMpk()
    {
        return $this->mpk;
    }

    /**
     * Set mpk value.
     *
     * @param string $mpk
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\JednostkaOrganizacyjnaType
     */
    public function setMpk($mpk = null)
    {
        // validation for constraint: string
        if (!is_null($mpk) && !is_string($mpk)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mpk, true), gettype($mpk)), __LINE__);
        }
        $this->mpk = $mpk;

        return $this;
    }
}
