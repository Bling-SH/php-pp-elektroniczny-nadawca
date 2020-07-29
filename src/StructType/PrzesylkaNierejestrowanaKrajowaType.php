<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

/**
 * This class stands for przesylkaNierejestrowanaKrajowaType StructType.
 */
class PrzesylkaNierejestrowanaKrajowaType extends PrzesylkaNieRejestrowanaType
{
    /**
     * The kategoria.
     *
     * @var string
     */
    public $kategoria;
    /**
     * The format
     * Meta information extracted from the WSDL
     * - documentation: Format przesyłki.
     *
     * @var string
     */
    public $format;
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
     * Constructor method for przesylkaNierejestrowanaKrajowaType.
     *
     * @uses PrzesylkaNierejestrowanaKrajowaType::setKategoria()
     * @uses PrzesylkaNierejestrowanaKrajowaType::setFormat()
     * @uses PrzesylkaNierejestrowanaKrajowaType::setMasa()
     *
     * @param string $kategoria
     * @param string $format
     * @param int    $masa
     */
    public function __construct($kategoria = null, $format = null, $masa = null)
    {
        $this
            ->setKategoria($kategoria)
            ->setFormat($format)
            ->setMasa($masa);
    }

    /**
     * Get kategoria value.
     *
     * @return string|null
     */
    public function getKategoria()
    {
        return $this->kategoria;
    }

    /**
     * Set kategoria value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\KategoriaType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\KategoriaType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $kategoria
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaNierejestrowanaKrajowaType
     */
    public function setKategoria($kategoria = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\KategoriaType::valueIsValid($kategoria)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\KategoriaType', is_array($kategoria) ? implode(', ', $kategoria) : var_export($kategoria, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\KategoriaType::getValidValues())), __LINE__);
        }
        $this->kategoria = $kategoria;

        return $this;
    }

    /**
     * Get format value.
     *
     * @return string|null
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set format value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\FormatType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\FormatType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $format
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaNierejestrowanaKrajowaType
     */
    public function setFormat($format = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\FormatType::valueIsValid($format)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\FormatType', is_array($format) ? implode(', ', $format) : var_export($format, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\FormatType::getValidValues())), __LINE__);
        }
        $this->format = $format;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaNierejestrowanaKrajowaType
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
}
