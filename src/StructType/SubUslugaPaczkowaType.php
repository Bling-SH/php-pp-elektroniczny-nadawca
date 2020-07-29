<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

/**
 * This class stands for subUslugaPaczkowaType StructType.
 */
class SubUslugaPaczkowaType extends PrzesylkaType
{
    /**
     * The pobranie.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType
     */
    public $pobranie;
    /**
     * The ubezpieczenie.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType
     */
    public $ubezpieczenie;
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
     * The wartosc
     * Meta information extracted from the WSDL
     * - documentation: zadeklarowana wartość przesyłki w groszach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 0.
     *
     * @var int
     */
    public $wartosc;
    /**
     * The ostroznie.
     *
     * @var bool
     */
    public $ostroznie;
    /**
     * The opakowanie.
     *
     * @var string
     */
    public $opakowanie;
    /**
     * The ponadgabaryt.
     *
     * @var bool
     */
    public $ponadgabaryt;
    /**
     * The numerPrzesylkiKlienta.
     *
     * @var string
     */
    public $numerPrzesylkiKlienta;
    /**
     * The gabaryt.
     *
     * @var string
     */
    public $gabaryt;

    /**
     * Constructor method for subUslugaPaczkowaType.
     *
     * @uses SubUslugaPaczkowaType::setPobranie()
     * @uses SubUslugaPaczkowaType::setUbezpieczenie()
     * @uses SubUslugaPaczkowaType::setNumerNadania()
     * @uses SubUslugaPaczkowaType::setMasa()
     * @uses SubUslugaPaczkowaType::setWartosc()
     * @uses SubUslugaPaczkowaType::setOstroznie()
     * @uses SubUslugaPaczkowaType::setOpakowanie()
     * @uses SubUslugaPaczkowaType::setPonadgabaryt()
     * @uses SubUslugaPaczkowaType::setNumerPrzesylkiKlienta()
     * @uses SubUslugaPaczkowaType::setGabaryt()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType      $pobranie
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie
     * @param string                                                                $numerNadania
     * @param int                                                                   $masa
     * @param int                                                                   $wartosc
     * @param bool                                                                  $ostroznie
     * @param string                                                                $opakowanie
     * @param bool                                                                  $ponadgabaryt
     * @param string                                                                $numerPrzesylkiKlienta
     * @param string                                                                $gabaryt
     */
    public function __construct(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType $pobranie = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null, $numerNadania = null, $masa = null, $wartosc = null, $ostroznie = null, $opakowanie = null, $ponadgabaryt = null, $numerPrzesylkiKlienta = null, $gabaryt = null)
    {
        $this
            ->setPobranie($pobranie)
            ->setUbezpieczenie($ubezpieczenie)
            ->setNumerNadania($numerNadania)
            ->setMasa($masa)
            ->setWartosc($wartosc)
            ->setOstroznie($ostroznie)
            ->setOpakowanie($opakowanie)
            ->setPonadgabaryt($ponadgabaryt)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
            ->setGabaryt($gabaryt);
    }

    /**
     * Get pobranie value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType|null
     */
    public function getPobranie()
    {
        return $this->pobranie;
    }

    /**
     * Set pobranie value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType $pobranie
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType
     */
    public function setPobranie(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType $pobranie = null)
    {
        $this->pobranie = $pobranie;

        return $this;
    }

    /**
     * Get ubezpieczenie value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType|null
     */
    public function getUbezpieczenie()
    {
        return $this->ubezpieczenie;
    }

    /**
     * Set ubezpieczenie value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType
     */
    public function setUbezpieczenie(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null)
    {
        $this->ubezpieczenie = $ubezpieczenie;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType
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

    /**
     * Get wartosc value.
     *
     * @return int|null
     */
    public function getWartosc()
    {
        return $this->wartosc;
    }

    /**
     * Set wartosc value.
     *
     * @param int $wartosc
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType
     */
    public function setWartosc($wartosc = null)
    {
        // validation for constraint: int
        if (!is_null($wartosc) && !(is_int($wartosc) || ctype_digit($wartosc))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($wartosc, true), gettype($wartosc)), __LINE__);
        }
        // validation for constraint: maxInclusive(9999999)
        if (!is_null($wartosc) && $wartosc > 9999999) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9999999', var_export($wartosc, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($wartosc) && $wartosc < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($wartosc, true)), __LINE__);
        }
        $this->wartosc = $wartosc;

        return $this;
    }

    /**
     * Get ostroznie value.
     *
     * @return bool|null
     */
    public function getOstroznie()
    {
        return $this->ostroznie;
    }

    /**
     * Set ostroznie value.
     *
     * @param bool $ostroznie
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType
     */
    public function setOstroznie($ostroznie = null)
    {
        // validation for constraint: boolean
        if (!is_null($ostroznie) && !is_bool($ostroznie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ostroznie, true), gettype($ostroznie)), __LINE__);
        }
        $this->ostroznie = $ostroznie;

        return $this;
    }

    /**
     * Get opakowanie value.
     *
     * @return string|null
     */
    public function getOpakowanie()
    {
        return $this->opakowanie;
    }

    /**
     * Set opakowanie value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\OpakowaniePocztowaType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\OpakowaniePocztowaType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $opakowanie
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType
     */
    public function setOpakowanie($opakowanie = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\OpakowaniePocztowaType::valueIsValid($opakowanie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\OpakowaniePocztowaType', is_array($opakowanie) ? implode(', ', $opakowanie) : var_export($opakowanie, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\OpakowaniePocztowaType::getValidValues())), __LINE__);
        }
        $this->opakowanie = $opakowanie;

        return $this;
    }

    /**
     * Get ponadgabaryt value.
     *
     * @return bool|null
     */
    public function getPonadgabaryt()
    {
        return $this->ponadgabaryt;
    }

    /**
     * Set ponadgabaryt value.
     *
     * @param bool $ponadgabaryt
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType
     */
    public function setPonadgabaryt($ponadgabaryt = null)
    {
        // validation for constraint: boolean
        if (!is_null($ponadgabaryt) && !is_bool($ponadgabaryt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ponadgabaryt, true), gettype($ponadgabaryt)), __LINE__);
        }
        $this->ponadgabaryt = $ponadgabaryt;

        return $this;
    }

    /**
     * Get numerPrzesylkiKlienta value.
     *
     * @return string|null
     */
    public function getNumerPrzesylkiKlienta()
    {
        return $this->numerPrzesylkiKlienta;
    }

    /**
     * Set numerPrzesylkiKlienta value.
     *
     * @param string $numerPrzesylkiKlienta
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType
     */
    public function setNumerPrzesylkiKlienta($numerPrzesylkiKlienta = null)
    {
        // validation for constraint: string
        if (!is_null($numerPrzesylkiKlienta) && !is_string($numerPrzesylkiKlienta)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerPrzesylkiKlienta, true), gettype($numerPrzesylkiKlienta)), __LINE__);
        }
        $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;

        return $this;
    }

    /**
     * Get gabaryt value.
     *
     * @return string|null
     */
    public function getGabaryt()
    {
        return $this->gabaryt;
    }

    /**
     * Set gabaryt value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\GabarytType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\GabarytType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $gabaryt
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType
     */
    public function setGabaryt($gabaryt = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\GabarytType::valueIsValid($gabaryt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\GabarytType', is_array($gabaryt) ? implode(', ', $gabaryt) : var_export($gabaryt, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\GabarytType::getValidValues())), __LINE__);
        }
        $this->gabaryt = $gabaryt;

        return $this;
    }
}
