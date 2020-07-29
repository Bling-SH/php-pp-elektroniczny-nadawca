<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for statusZgodyEZwrotType StructType.
 */
class StatusZgodyEZwrotType extends AbstractStructBase
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
     * The status.
     *
     * @var string
     */
    public $status;
    /**
     * The platnoscZaPrzesylke
     * Meta information extracted from the WSDL
     * - use: optional.
     *
     * @var bool
     */
    public $platnoscZaPrzesylke;
    /**
     * The kosztKontrahenta
     * Meta information extracted from the WSDL
     * - documentation: Kwota w groszach
     * - use: optional.
     *
     * @var int
     */
    public $kosztKontrahenta;
    /**
     * The dataWygasnieciaZgody
     * Meta information extracted from the WSDL
     * - use: optional.
     *
     * @var string
     */
    public $dataWygasnieciaZgody;

    /**
     * Constructor method for statusZgodyEZwrotType.
     *
     * @uses StatusZgodyEZwrotType::setEZwrotPrzesylki()
     * @uses StatusZgodyEZwrotType::setGuidZgodaEZwrot()
     * @uses StatusZgodyEZwrotType::setStatus()
     * @uses StatusZgodyEZwrotType::setPlatnoscZaPrzesylke()
     * @uses StatusZgodyEZwrotType::setKosztKontrahenta()
     * @uses StatusZgodyEZwrotType::setDataWygasnieciaZgody()
     *
     * @param string[] $eZwrotPrzesylki
     * @param string   $guidZgodaEZwrot
     * @param string   $status
     * @param bool     $platnoscZaPrzesylke
     * @param int      $kosztKontrahenta
     * @param string   $dataWygasnieciaZgody
     */
    public function __construct(array $eZwrotPrzesylki = [], $guidZgodaEZwrot = null, $status = null, $platnoscZaPrzesylke = null, $kosztKontrahenta = null, $dataWygasnieciaZgody = null)
    {
        $this
            ->setEZwrotPrzesylki($eZwrotPrzesylki)
            ->setGuidZgodaEZwrot($guidZgodaEZwrot)
            ->setStatus($status)
            ->setPlatnoscZaPrzesylke($platnoscZaPrzesylke)
            ->setKosztKontrahenta($kosztKontrahenta)
            ->setDataWygasnieciaZgody($dataWygasnieciaZgody);
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
        foreach ($values as $statusZgodyEZwrotTypeEZwrotPrzesylkiItem) {
            // validation for constraint: enumeration
            if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\EZwrotPrzesylkiType::valueIsValid($statusZgodyEZwrotTypeEZwrotPrzesylkiItem)) {
                $invalidValues[] = is_object($statusZgodyEZwrotTypeEZwrotPrzesylkiItem) ? get_class($statusZgodyEZwrotTypeEZwrotPrzesylkiItem) : sprintf('%s(%s)', gettype($statusZgodyEZwrotTypeEZwrotPrzesylkiItem), var_export($statusZgodyEZwrotTypeEZwrotPrzesylkiItem, true));
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\StatusZgodyEZwrotType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\StatusZgodyEZwrotType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\StatusZgodyEZwrotType
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
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\StatusZgodyEZwrotNameType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\StatusZgodyEZwrotNameType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $status
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\StatusZgodyEZwrotType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\StatusZgodyEZwrotNameType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\StatusZgodyEZwrotNameType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\StatusZgodyEZwrotNameType::getValidValues())), __LINE__);
        }
        $this->status = $status;

        return $this;
    }

    /**
     * Get platnoscZaPrzesylke value.
     *
     * @return bool|null
     */
    public function getPlatnoscZaPrzesylke()
    {
        return $this->platnoscZaPrzesylke;
    }

    /**
     * Set platnoscZaPrzesylke value.
     *
     * @param bool $platnoscZaPrzesylke
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\StatusZgodyEZwrotType
     */
    public function setPlatnoscZaPrzesylke($platnoscZaPrzesylke = null)
    {
        // validation for constraint: boolean
        if (!is_null($platnoscZaPrzesylke) && !is_bool($platnoscZaPrzesylke)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($platnoscZaPrzesylke, true), gettype($platnoscZaPrzesylke)), __LINE__);
        }
        $this->platnoscZaPrzesylke = $platnoscZaPrzesylke;

        return $this;
    }

    /**
     * Get kosztKontrahenta value.
     *
     * @return int|null
     */
    public function getKosztKontrahenta()
    {
        return $this->kosztKontrahenta;
    }

    /**
     * Set kosztKontrahenta value.
     *
     * @param int $kosztKontrahenta
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\StatusZgodyEZwrotType
     */
    public function setKosztKontrahenta($kosztKontrahenta = null)
    {
        // validation for constraint: int
        if (!is_null($kosztKontrahenta) && !(is_int($kosztKontrahenta) || ctype_digit($kosztKontrahenta))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($kosztKontrahenta, true), gettype($kosztKontrahenta)), __LINE__);
        }
        $this->kosztKontrahenta = $kosztKontrahenta;

        return $this;
    }

    /**
     * Get dataWygasnieciaZgody value.
     *
     * @return string|null
     */
    public function getDataWygasnieciaZgody()
    {
        return $this->dataWygasnieciaZgody;
    }

    /**
     * Set dataWygasnieciaZgody value.
     *
     * @param string $dataWygasnieciaZgody
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\StatusZgodyEZwrotType
     */
    public function setDataWygasnieciaZgody($dataWygasnieciaZgody = null)
    {
        // validation for constraint: string
        if (!is_null($dataWygasnieciaZgody) && !is_string($dataWygasnieciaZgody)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataWygasnieciaZgody, true), gettype($dataWygasnieciaZgody)), __LINE__);
        }
        $this->dataWygasnieciaZgody = $dataWygasnieciaZgody;

        return $this;
    }
}
