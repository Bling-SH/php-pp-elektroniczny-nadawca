<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

/**
 * This class stands for paczkaZagranicznaPremiumType StructType.
 */
class PaczkaZagranicznaPremiumType extends PrzesylkaRejestrowanaType
{
    /**
     * The zwrot
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotType
     */
    public $zwrot;
    /**
     * The posteRestante
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var bool
     */
    public $posteRestante;
    /**
     * The masa
     * Meta information extracted from the WSDL
     * - documentation: masa przesyłki podana w gramach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - maxOccurs: 1
     * - minInclusive: 1
     * - minOccurs: 0.
     *
     * @var int
     */
    public $masa;
    /**
     * The deklaracjaCelna2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
     */
    public $deklaracjaCelna2;
    /**
     * The sposobNadaniaInterconnect
     * Meta information extracted from the WSDL
     * - documentation: Umożliwia określenie sposobu nadania przesyłki w ramach systemu Interconnect.Obsługiwane wartości:- ODBIOR_Z_ADRESU_PRYWATNEGO- ODBIOR_Z_ADRESU_FIRMOWEGO- NADANIE_W_PLACOWCE_POCZTOWEJ
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var string
     */
    public $sposobNadaniaInterconnect;
    /**
     * The potwierdzenieDoreczenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType
     */
    public $potwierdzenieDoreczenia;
    /**
     * The ubezpieczenie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType
     */
    public $ubezpieczenie;
    /**
     * The numerPrzesylkiKlienta
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 25
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var string
     */
    public $numerPrzesylkiKlienta;

    /**
     * Constructor method for paczkaZagranicznaPremiumType.
     *
     * @uses PaczkaZagranicznaPremiumType::setZwrot()
     * @uses PaczkaZagranicznaPremiumType::setPosteRestante()
     * @uses PaczkaZagranicznaPremiumType::setMasa()
     * @uses PaczkaZagranicznaPremiumType::setDeklaracjaCelna2()
     * @uses PaczkaZagranicznaPremiumType::setSposobNadaniaInterconnect()
     * @uses PaczkaZagranicznaPremiumType::setPotwierdzenieDoreczenia()
     * @uses PaczkaZagranicznaPremiumType::setUbezpieczenie()
     * @uses PaczkaZagranicznaPremiumType::setNumerPrzesylkiKlienta()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotType                   $zwrot
     * @param bool                                                                            $posteRestante
     * @param int                                                                             $masa
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type        $deklaracjaCelna2
     * @param string                                                                          $sposobNadaniaInterconnect
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType           $ubezpieczenie
     * @param string                                                                          $numerPrzesylkiKlienta
     */
    public function __construct(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotType $zwrot = null, $posteRestante = null, $masa = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null, $sposobNadaniaInterconnect = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null, $numerPrzesylkiKlienta = null)
    {
        $this
            ->setZwrot($zwrot)
            ->setPosteRestante($posteRestante)
            ->setMasa($masa)
            ->setDeklaracjaCelna2($deklaracjaCelna2)
            ->setSposobNadaniaInterconnect($sposobNadaniaInterconnect)
            ->setPotwierdzenieDoreczenia($potwierdzenieDoreczenia)
            ->setUbezpieczenie($ubezpieczenie)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta);
    }

    /**
     * Get zwrot value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotType|null
     */
    public function getZwrot()
    {
        return $this->zwrot;
    }

    /**
     * Set zwrot value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotType $zwrot
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaZagranicznaPremiumType
     */
    public function setZwrot(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZwrotType $zwrot = null)
    {
        $this->zwrot = $zwrot;

        return $this;
    }

    /**
     * Get posteRestante value.
     *
     * @return bool|null
     */
    public function getPosteRestante()
    {
        return $this->posteRestante;
    }

    /**
     * Set posteRestante value.
     *
     * @param bool $posteRestante
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaZagranicznaPremiumType
     */
    public function setPosteRestante($posteRestante = null)
    {
        // validation for constraint: boolean
        if (!is_null($posteRestante) && !is_bool($posteRestante)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($posteRestante, true), gettype($posteRestante)), __LINE__);
        }
        $this->posteRestante = $posteRestante;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaZagranicznaPremiumType
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
     * Get deklaracjaCelna2 value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type|null
     */
    public function getDeklaracjaCelna2()
    {
        return $this->deklaracjaCelna2;
    }

    /**
     * Set deklaracjaCelna2 value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaZagranicznaPremiumType
     */
    public function setDeklaracjaCelna2(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null)
    {
        $this->deklaracjaCelna2 = $deklaracjaCelna2;

        return $this;
    }

    /**
     * Get sposobNadaniaInterconnect value.
     *
     * @return string|null
     */
    public function getSposobNadaniaInterconnect()
    {
        return $this->sposobNadaniaInterconnect;
    }

    /**
     * Set sposobNadaniaInterconnect value.
     *
     * @param string $sposobNadaniaInterconnect
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaZagranicznaPremiumType
     */
    public function setSposobNadaniaInterconnect($sposobNadaniaInterconnect = null)
    {
        // validation for constraint: string
        if (!is_null($sposobNadaniaInterconnect) && !is_string($sposobNadaniaInterconnect)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sposobNadaniaInterconnect, true), gettype($sposobNadaniaInterconnect)), __LINE__);
        }
        $this->sposobNadaniaInterconnect = $sposobNadaniaInterconnect;

        return $this;
    }

    /**
     * Get potwierdzenieDoreczenia value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType|null
     */
    public function getPotwierdzenieDoreczenia()
    {
        return $this->potwierdzenieDoreczenia;
    }

    /**
     * Set potwierdzenieDoreczenia value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaZagranicznaPremiumType
     */
    public function setPotwierdzenieDoreczenia(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null)
    {
        $this->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaZagranicznaPremiumType
     */
    public function setUbezpieczenie(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null)
    {
        $this->ubezpieczenie = $ubezpieczenie;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaczkaZagranicznaPremiumType
     */
    public function setNumerPrzesylkiKlienta($numerPrzesylkiKlienta = null)
    {
        // validation for constraint: string
        if (!is_null($numerPrzesylkiKlienta) && !is_string($numerPrzesylkiKlienta)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerPrzesylkiKlienta, true), gettype($numerPrzesylkiKlienta)), __LINE__);
        }
        // validation for constraint: maxLength(25)
        if (!is_null($numerPrzesylkiKlienta) && mb_strlen($numerPrzesylkiKlienta) > 25) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 25', mb_strlen($numerPrzesylkiKlienta)), __LINE__);
        }
        $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;

        return $this;
    }
}
