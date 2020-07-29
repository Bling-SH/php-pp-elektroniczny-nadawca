<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaShortType StructType.
 */
class PrzesylkaShortType extends AbstractStructBase
{
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - use: required
     * - whiteSpace: collapse.
     *
     * @var string
     */
    public $guid;
    /**
     * The czynnosciUpustowe
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var string[]
     */
    public $czynnosciUpustowe;
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
     * The dataNadania.
     *
     * @var string
     */
    public $dataNadania;
    /**
     * The razem.
     *
     * @var int
     */
    public $razem;
    /**
     * The pobranie
     * Meta information extracted from the WSDL
     * - use: optional.
     *
     * @var int
     */
    public $pobranie;
    /**
     * The status.
     *
     * @var string
     */
    public $status;

    /**
     * Constructor method for przesylkaShortType.
     *
     * @uses PrzesylkaShortType::setGuid()
     * @uses PrzesylkaShortType::setCzynnosciUpustowe()
     * @uses PrzesylkaShortType::setNumerNadania()
     * @uses PrzesylkaShortType::setDataNadania()
     * @uses PrzesylkaShortType::setRazem()
     * @uses PrzesylkaShortType::setPobranie()
     * @uses PrzesylkaShortType::setStatus()
     *
     * @param string   $guid
     * @param string[] $czynnosciUpustowe
     * @param string   $numerNadania
     * @param string   $dataNadania
     * @param int      $razem
     * @param int      $pobranie
     * @param string   $status
     */
    public function __construct($guid = null, array $czynnosciUpustowe = [], $numerNadania = null, $dataNadania = null, $razem = null, $pobranie = null, $status = null)
    {
        $this
            ->setGuid($guid)
            ->setCzynnosciUpustowe($czynnosciUpustowe)
            ->setNumerNadania($numerNadania)
            ->setDataNadania($dataNadania)
            ->setRazem($razem)
            ->setPobranie($pobranie)
            ->setStatus($status);
    }

    /**
     * Get guid value.
     *
     * @return string
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Set guid value.
     *
     * @param string $guid
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaShortType
     */
    public function setGuid($guid = null)
    {
        // validation for constraint: string
        if (!is_null($guid) && !is_string($guid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guid, true), gettype($guid)), __LINE__);
        }
        // validation for constraint: length(32)
        if (!is_null($guid) && 32 !== mb_strlen($guid)) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 32', mb_strlen($guid)), __LINE__);
        }
        $this->guid = $guid;

        return $this;
    }

    /**
     * Get czynnosciUpustowe value.
     *
     * @return string[]|null
     */
    public function getCzynnosciUpustowe()
    {
        return $this->czynnosciUpustowe;
    }

    /**
     * This method is responsible for validating the values passed to the setCzynnosciUpustowe method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCzynnosciUpustowe method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCzynnosciUpustoweForArrayConstraintsFromSetCzynnosciUpustowe(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $przesylkaShortTypeCzynnosciUpustoweItem) {
            // validation for constraint: enumeration
            if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\CzynnoscUpustowaType::valueIsValid($przesylkaShortTypeCzynnosciUpustoweItem)) {
                $invalidValues[] = is_object($przesylkaShortTypeCzynnosciUpustoweItem) ? get_class($przesylkaShortTypeCzynnosciUpustoweItem) : sprintf('%s(%s)', gettype($przesylkaShortTypeCzynnosciUpustoweItem), var_export($przesylkaShortTypeCzynnosciUpustoweItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\CzynnoscUpustowaType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\CzynnoscUpustowaType::getValidValues()));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set czynnosciUpustowe value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\CzynnoscUpustowaType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\CzynnoscUpustowaType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string[] $czynnosciUpustowe
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaShortType
     */
    public function setCzynnosciUpustowe(array $czynnosciUpustowe = [])
    {
        // validation for constraint: array
        if ('' !== ($czynnosciUpustoweArrayErrorMessage = self::validateCzynnosciUpustoweForArrayConstraintsFromSetCzynnosciUpustowe($czynnosciUpustowe))) {
            throw new \InvalidArgumentException($czynnosciUpustoweArrayErrorMessage, __LINE__);
        }
        $this->czynnosciUpustowe = $czynnosciUpustowe;

        return $this;
    }

    /**
     * Add item to czynnosciUpustowe value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\CzynnoscUpustowaType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\CzynnoscUpustowaType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $item
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaShortType
     */
    public function addToCzynnosciUpustowe($item)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\CzynnoscUpustowaType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\CzynnoscUpustowaType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\CzynnoscUpustowaType::getValidValues())), __LINE__);
        }
        $this->czynnosciUpustowe[] = $item;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaShortType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaShortType
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
     * Get razem value.
     *
     * @return int|null
     */
    public function getRazem()
    {
        return $this->razem;
    }

    /**
     * Set razem value.
     *
     * @param int $razem
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaShortType
     */
    public function setRazem($razem = null)
    {
        // validation for constraint: int
        if (!is_null($razem) && !(is_int($razem) || ctype_digit($razem))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($razem, true), gettype($razem)), __LINE__);
        }
        $this->razem = $razem;

        return $this;
    }

    /**
     * Get pobranie value.
     *
     * @return int|null
     */
    public function getPobranie()
    {
        return $this->pobranie;
    }

    /**
     * Set pobranie value.
     *
     * @param int $pobranie
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaShortType
     */
    public function setPobranie($pobranie = null)
    {
        // validation for constraint: int
        if (!is_null($pobranie) && !(is_int($pobranie) || ctype_digit($pobranie))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pobranie, true), gettype($pobranie)), __LINE__);
        }
        $this->pobranie = $pobranie;

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
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\StatusType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\StatusType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $status
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaShortType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\StatusType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\StatusType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\StatusType::getValidValues())), __LINE__);
        }
        $this->status = $status;

        return $this;
    }
}
