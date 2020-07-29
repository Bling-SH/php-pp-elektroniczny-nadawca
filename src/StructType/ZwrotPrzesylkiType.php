<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zwrotPrzesylkiType StructType.
 */
class ZwrotPrzesylkiType extends AbstractStructBase
{
    /**
     * The przyczyna.
     *
     * @var string
     */
    public $przyczyna;
    /**
     * The data.
     *
     * @var string
     */
    public $data;
    /**
     * The przyczynaZwrotuDodatkowa
     * Meta information extracted from the WSDL
     * - documentation: Dodatkowy opisowy powód zwrotu przesyłki
     * - base: xsd:string
     * - maxLength: 255
     * - use: optional.
     *
     * @var string
     */
    public $przyczynaZwrotuDodatkowa;

    /**
     * Constructor method for zwrotPrzesylkiType.
     *
     * @uses ZwrotPrzesylkiType::setPrzyczyna()
     * @uses ZwrotPrzesylkiType::setData()
     * @uses ZwrotPrzesylkiType::setPrzyczynaZwrotuDodatkowa()
     *
     * @param string $przyczyna
     * @param string $data
     * @param string $przyczynaZwrotuDodatkowa
     */
    public function __construct($przyczyna = null, $data = null, $przyczynaZwrotuDodatkowa = null)
    {
        $this
            ->setPrzyczyna($przyczyna)
            ->setData($data)
            ->setPrzyczynaZwrotuDodatkowa($przyczynaZwrotuDodatkowa);
    }

    /**
     * Get przyczyna value.
     *
     * @return string|null
     */
    public function getPrzyczyna()
    {
        return $this->przyczyna;
    }

    /**
     * Set przyczyna value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\PrzyczynaZwrotuEnum::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\PrzyczynaZwrotuEnum::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $przyczyna
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotPrzesylkiType
     */
    public function setPrzyczyna($przyczyna = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\PrzyczynaZwrotuEnum::valueIsValid($przyczyna)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\PrzyczynaZwrotuEnum', is_array($przyczyna) ? implode(', ', $przyczyna) : var_export($przyczyna, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\PrzyczynaZwrotuEnum::getValidValues())), __LINE__);
        }
        $this->przyczyna = $przyczyna;

        return $this;
    }

    /**
     * Get data value.
     *
     * @return string|null
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set data value.
     *
     * @param string $data
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotPrzesylkiType
     */
    public function setData($data = null)
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        $this->data = $data;

        return $this;
    }

    /**
     * Get przyczynaZwrotuDodatkowa value.
     *
     * @return string|null
     */
    public function getPrzyczynaZwrotuDodatkowa()
    {
        return $this->przyczynaZwrotuDodatkowa;
    }

    /**
     * Set przyczynaZwrotuDodatkowa value.
     *
     * @param string $przyczynaZwrotuDodatkowa
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotPrzesylkiType
     */
    public function setPrzyczynaZwrotuDodatkowa($przyczynaZwrotuDodatkowa = null)
    {
        // validation for constraint: string
        if (!is_null($przyczynaZwrotuDodatkowa) && !is_string($przyczynaZwrotuDodatkowa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($przyczynaZwrotuDodatkowa, true), gettype($przyczynaZwrotuDodatkowa)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($przyczynaZwrotuDodatkowa) && mb_strlen($przyczynaZwrotuDodatkowa) > 255) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen($przyczynaZwrotuDodatkowa)), __LINE__);
        }
        $this->przyczynaZwrotuDodatkowa = $przyczynaZwrotuDodatkowa;

        return $this;
    }
}
