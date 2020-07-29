<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for paletaType StructType.
 */
class PaletaType extends AbstractStructBase
{
    /**
     * The rodzajPalety.
     *
     * @var string
     */
    public $rodzajPalety;
    /**
     * The szerokosc.
     *
     * @var int
     */
    public $szerokosc;
    /**
     * The dlugosc.
     *
     * @var string
     */
    public $dlugosc;
    /**
     * The wysokosc.
     *
     * @var string
     */
    public $wysokosc;

    /**
     * Constructor method for paletaType.
     *
     * @uses PaletaType::setRodzajPalety()
     * @uses PaletaType::setSzerokosc()
     * @uses PaletaType::setDlugosc()
     * @uses PaletaType::setWysokosc()
     *
     * @param string $rodzajPalety
     * @param int    $szerokosc
     * @param string $dlugosc
     * @param string $wysokosc
     */
    public function __construct($rodzajPalety = null, $szerokosc = null, $dlugosc = null, $wysokosc = null)
    {
        $this
            ->setRodzajPalety($rodzajPalety)
            ->setSzerokosc($szerokosc)
            ->setDlugosc($dlugosc)
            ->setWysokosc($wysokosc);
    }

    /**
     * Get rodzajPalety value.
     *
     * @return string|null
     */
    public function getRodzajPalety()
    {
        return $this->rodzajPalety;
    }

    /**
     * Set rodzajPalety value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\RodzajPaletyType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\RodzajPaletyType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $rodzajPalety
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaletaType
     */
    public function setRodzajPalety($rodzajPalety = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\RodzajPaletyType::valueIsValid($rodzajPalety)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\RodzajPaletyType', is_array($rodzajPalety) ? implode(', ', $rodzajPalety) : var_export($rodzajPalety, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\RodzajPaletyType::getValidValues())), __LINE__);
        }
        $this->rodzajPalety = $rodzajPalety;

        return $this;
    }

    /**
     * Get szerokosc value.
     *
     * @return int|null
     */
    public function getSzerokosc()
    {
        return $this->szerokosc;
    }

    /**
     * Set szerokosc value.
     *
     * @param int $szerokosc
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaletaType
     */
    public function setSzerokosc($szerokosc = null)
    {
        // validation for constraint: int
        if (!is_null($szerokosc) && !(is_int($szerokosc) || ctype_digit($szerokosc))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($szerokosc, true), gettype($szerokosc)), __LINE__);
        }
        $this->szerokosc = $szerokosc;

        return $this;
    }

    /**
     * Get dlugosc value.
     *
     * @return string|null
     */
    public function getDlugosc()
    {
        return $this->dlugosc;
    }

    /**
     * Set dlugosc value.
     *
     * @param string $dlugosc
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaletaType
     */
    public function setDlugosc($dlugosc = null)
    {
        // validation for constraint: string
        if (!is_null($dlugosc) && !is_string($dlugosc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dlugosc, true), gettype($dlugosc)), __LINE__);
        }
        $this->dlugosc = $dlugosc;

        return $this;
    }

    /**
     * Get wysokosc value.
     *
     * @return string|null
     */
    public function getWysokosc()
    {
        return $this->wysokosc;
    }

    /**
     * Set wysokosc value.
     *
     * @param string $wysokosc
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaletaType
     */
    public function setWysokosc($wysokosc = null)
    {
        // validation for constraint: string
        if (!is_null($wysokosc) && !is_string($wysokosc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wysokosc, true), gettype($wysokosc)), __LINE__);
        }
        $this->wysokosc = $wysokosc;

        return $this;
    }
}
