<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

/**
 * This class stands for EMSType StructType.
 */
class EMSType extends PrzesylkaRejestrowanaType
{
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
     * The deklaracjaCelna
     * Meta information extracted from the WSDL
     * - documentation: Deklaracja celna - "deprecated" - zalecane jest ustawianie elementu deklaracjaCelna2
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
     */
    public $deklaracjaCelna;
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
     * The typOpakowania.
     *
     * @var string
     */
    public $typOpakowania;
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
     * The zalaczoneDokumenty.
     *
     * @var bool
     */
    public $zalaczoneDokumenty;

    /**
     * Constructor method for EMSType.
     *
     * @uses EMSType::setUbezpieczenie()
     * @uses EMSType::setDeklaracjaCelna()
     * @uses EMSType::setPotwierdzenieDoreczenia()
     * @uses EMSType::setDeklaracjaCelna2()
     * @uses EMSType::setSposobNadaniaInterconnect()
     * @uses EMSType::setTypOpakowania()
     * @uses EMSType::setMasa()
     * @uses EMSType::setZalaczoneDokumenty()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType           $ubezpieczenie
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelnaType         $deklaracjaCelna
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type        $deklaracjaCelna2
     * @param string                                                                          $sposobNadaniaInterconnect
     * @param string                                                                          $typOpakowania
     * @param int                                                                             $masa
     * @param bool                                                                            $zalaczoneDokumenty
     */
    public function __construct(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelnaType $deklaracjaCelna = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null, $sposobNadaniaInterconnect = null, $typOpakowania = null, $masa = null, $zalaczoneDokumenty = null)
    {
        $this
            ->setUbezpieczenie($ubezpieczenie)
            ->setDeklaracjaCelna($deklaracjaCelna)
            ->setPotwierdzenieDoreczenia($potwierdzenieDoreczenia)
            ->setDeklaracjaCelna2($deklaracjaCelna2)
            ->setSposobNadaniaInterconnect($sposobNadaniaInterconnect)
            ->setTypOpakowania($typOpakowania)
            ->setMasa($masa)
            ->setZalaczoneDokumenty($zalaczoneDokumenty);
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EMSType
     */
    public function setUbezpieczenie(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null)
    {
        $this->ubezpieczenie = $ubezpieczenie;

        return $this;
    }

    /**
     * Get deklaracjaCelna value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelnaType|null
     */
    public function getDeklaracjaCelna()
    {
        return $this->deklaracjaCelna;
    }

    /**
     * Set deklaracjaCelna value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelnaType $deklaracjaCelna
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EMSType
     */
    public function setDeklaracjaCelna(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelnaType $deklaracjaCelna = null)
    {
        $this->deklaracjaCelna = $deklaracjaCelna;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EMSType
     */
    public function setPotwierdzenieDoreczenia(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null)
    {
        $this->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EMSType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EMSType
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
     * Get typOpakowania value.
     *
     * @return string|null
     */
    public function getTypOpakowania()
    {
        return $this->typOpakowania;
    }

    /**
     * Set typOpakowania value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\EMSTypOpakowaniaType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\EMSTypOpakowaniaType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $typOpakowania
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EMSType
     */
    public function setTypOpakowania($typOpakowania = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\EMSTypOpakowaniaType::valueIsValid($typOpakowania)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\EMSTypOpakowaniaType', is_array($typOpakowania) ? implode(', ', $typOpakowania) : var_export($typOpakowania, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\EMSTypOpakowaniaType::getValidValues())), __LINE__);
        }
        $this->typOpakowania = $typOpakowania;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EMSType
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
     * Get zalaczoneDokumenty value.
     *
     * @return bool|null
     */
    public function getZalaczoneDokumenty()
    {
        return $this->zalaczoneDokumenty;
    }

    /**
     * Set zalaczoneDokumenty value.
     *
     * @param bool $zalaczoneDokumenty
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EMSType
     */
    public function setZalaczoneDokumenty($zalaczoneDokumenty = null)
    {
        // validation for constraint: boolean
        if (!is_null($zalaczoneDokumenty) && !is_bool($zalaczoneDokumenty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($zalaczoneDokumenty, true), gettype($zalaczoneDokumenty)), __LINE__);
        }
        $this->zalaczoneDokumenty = $zalaczoneDokumenty;

        return $this;
    }
}
