<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

/**
 * This class stands for przesylkaBiznesowaType StructType.
 */
class PrzesylkaBiznesowaType extends PrzesylkaRejestrowanaType
{
    /**
     * The subPrzesylka
     * Meta information extracted from the WSDL
     * - choice: urzadWydaniaEPrzesylki | subPrzesylka
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: unbounded
     * - minOccurs: 1.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaType[]
     */
    public $subPrzesylka;
    /**
     * The pobranie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType
     */
    public $pobranie;
    /**
     * The urzadWydaniaEPrzesylki
     * Meta information extracted from the WSDL
     * - choice: urzadWydaniaEPrzesylki | subPrzesylka
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType
     */
    public $urzadWydaniaEPrzesylki;
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
     * The epo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPOType
     */
    public $epo;
    /**
     * The zasadySpecjalne
     * Meta information extracted from the WSDL
     * - use: optional.
     *
     * @var string
     */
    public $zasadySpecjalne;
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
     * The gabaryt.
     *
     * @var string
     */
    public $gabaryt;
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
     * The numerTransakcjiOdbioru
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50.
     *
     * @var string
     */
    public $numerTransakcjiOdbioru;

    /**
     * Constructor method for przesylkaBiznesowaType.
     *
     * @uses PrzesylkaBiznesowaType::setSubPrzesylka()
     * @uses PrzesylkaBiznesowaType::setPobranie()
     * @uses PrzesylkaBiznesowaType::setUrzadWydaniaEPrzesylki()
     * @uses PrzesylkaBiznesowaType::setUbezpieczenie()
     * @uses PrzesylkaBiznesowaType::setEpo()
     * @uses PrzesylkaBiznesowaType::setZasadySpecjalne()
     * @uses PrzesylkaBiznesowaType::setMasa()
     * @uses PrzesylkaBiznesowaType::setGabaryt()
     * @uses PrzesylkaBiznesowaType::setWartosc()
     * @uses PrzesylkaBiznesowaType::setOstroznie()
     * @uses PrzesylkaBiznesowaType::setNumerTransakcjiOdbioru()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaType[] $subPrzesylka
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType                $pobranie
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType  $urzadWydaniaEPrzesylki
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType           $ubezpieczenie
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPOType                     $epo
     * @param string                                                                          $zasadySpecjalne
     * @param int                                                                             $masa
     * @param string                                                                          $gabaryt
     * @param int                                                                             $wartosc
     * @param bool                                                                            $ostroznie
     * @param string                                                                          $numerTransakcjiOdbioru
     */
    public function __construct(array $subPrzesylka = [], \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType $pobranie = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPOType $epo = null, $zasadySpecjalne = null, $masa = null, $gabaryt = null, $wartosc = null, $ostroznie = null, $numerTransakcjiOdbioru = null)
    {
        $this
            ->setSubPrzesylka($subPrzesylka)
            ->setPobranie($pobranie)
            ->setUrzadWydaniaEPrzesylki($urzadWydaniaEPrzesylki)
            ->setUbezpieczenie($ubezpieczenie)
            ->setEpo($epo)
            ->setZasadySpecjalne($zasadySpecjalne)
            ->setMasa($masa)
            ->setGabaryt($gabaryt)
            ->setWartosc($wartosc)
            ->setOstroznie($ostroznie)
            ->setNumerTransakcjiOdbioru($numerTransakcjiOdbioru);
    }

    /**
     * Get subPrzesylka value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaType[]
     */
    public function getSubPrzesylka()
    {
        return isset($this->subPrzesylka) ? $this->subPrzesylka : null;
    }

    /**
     * This method is responsible for validating the values passed to the setSubPrzesylka method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubPrzesylka method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSubPrzesylkaForArrayConstraintsFromSetSubPrzesylka(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $przesylkaBiznesowaTypeSubPrzesylkaItem) {
            // validation for constraint: itemType
            if (!$przesylkaBiznesowaTypeSubPrzesylkaItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaType) {
                $invalidValues[] = is_object($przesylkaBiznesowaTypeSubPrzesylkaItem) ? get_class($przesylkaBiznesowaTypeSubPrzesylkaItem) : sprintf('%s(%s)', gettype($przesylkaBiznesowaTypeSubPrzesylkaItem), var_export($przesylkaBiznesowaTypeSubPrzesylkaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The subPrzesylka property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * This method is responsible for validating the value passed to the setSubPrzesylka method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubPrzesylka method
     * This has to validate that the property which is being set is the only one among the given choices.
     *
     * @param mixed $value
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSubPrzesylkaForChoiceConstraintsFromSetSubPrzesylka($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'urzadWydaniaEPrzesylki',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property subPrzesylka can\'t be set as the property %s is already set. Only one property must be set among these properties: subPrzesylka, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }

        return $message;
    }

    /**
     * Set subPrzesylka value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object.
     *
     * @throws \InvalidArgumentException
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaType[] $subPrzesylka
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaType
     */
    public function setSubPrzesylka(array $subPrzesylka = [])
    {
        // validation for constraint: array
        if ('' !== ($subPrzesylkaArrayErrorMessage = self::validateSubPrzesylkaForArrayConstraintsFromSetSubPrzesylka($subPrzesylka))) {
            throw new \InvalidArgumentException($subPrzesylkaArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(urzadWydaniaEPrzesylki, subPrzesylka)
        if ('' !== ($subPrzesylkaChoiceErrorMessage = self::validateSubPrzesylkaForChoiceConstraintsFromSetSubPrzesylka($subPrzesylka))) {
            throw new \InvalidArgumentException($subPrzesylkaChoiceErrorMessage, __LINE__);
        }
        if (is_null($subPrzesylka) || (is_array($subPrzesylka) && empty($subPrzesylka))) {
            unset($this->subPrzesylka);
        } else {
            $this->subPrzesylka = $subPrzesylka;
        }

        return $this;
    }

    /**
     * This method is responsible for validating the value passed to the addToSubPrzesylka method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToSubPrzesylka method
     * This has to validate that the property which is being set is the only one among the given choices.
     *
     * @param mixed $value
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToSubPrzesylka($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'urzadWydaniaEPrzesylki',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property subPrzesylka can\'t be set as the property %s is already set. Only one property must be set among these properties: subPrzesylka, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }

        return $message;
    }

    /**
     * Add item to subPrzesylka value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaType
     */
    public function addToSubPrzesylka(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaType) {
            throw new \InvalidArgumentException(sprintf('The subPrzesylka property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(urzadWydaniaEPrzesylki, subPrzesylka)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToSubPrzesylka($item))) {
            throw new \InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        $this->subPrzesylka[] = $item;

        return $this;
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaType
     */
    public function setPobranie(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType $pobranie = null)
    {
        $this->pobranie = $pobranie;

        return $this;
    }

    /**
     * Get urzadWydaniaEPrzesylki value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType|null
     */
    public function getUrzadWydaniaEPrzesylki()
    {
        return isset($this->urzadWydaniaEPrzesylki) ? $this->urzadWydaniaEPrzesylki : null;
    }

    /**
     * This method is responsible for validating the value passed to the setUrzadWydaniaEPrzesylki method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUrzadWydaniaEPrzesylki method
     * This has to validate that the property which is being set is the only one among the given choices.
     *
     * @param mixed $value
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUrzadWydaniaEPrzesylkiForChoiceConstraintsFromSetUrzadWydaniaEPrzesylki($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'subPrzesylka',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property urzadWydaniaEPrzesylki can\'t be set as the property %s is already set. Only one property must be set among these properties: urzadWydaniaEPrzesylki, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }

        return $message;
    }

    /**
     * Set urzadWydaniaEPrzesylki value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaType
     */
    public function setUrzadWydaniaEPrzesylki(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki = null)
    {
        // validation for constraint: choice(urzadWydaniaEPrzesylki, subPrzesylka)
        if ('' !== ($urzadWydaniaEPrzesylkiChoiceErrorMessage = self::validateUrzadWydaniaEPrzesylkiForChoiceConstraintsFromSetUrzadWydaniaEPrzesylki($urzadWydaniaEPrzesylki))) {
            throw new \InvalidArgumentException($urzadWydaniaEPrzesylkiChoiceErrorMessage, __LINE__);
        }
        if (is_null($urzadWydaniaEPrzesylki) || (is_array($urzadWydaniaEPrzesylki) && empty($urzadWydaniaEPrzesylki))) {
            unset($this->urzadWydaniaEPrzesylki);
        } else {
            $this->urzadWydaniaEPrzesylki = $urzadWydaniaEPrzesylki;
        }

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaType
     */
    public function setUbezpieczenie(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null)
    {
        $this->ubezpieczenie = $ubezpieczenie;

        return $this;
    }

    /**
     * Get epo value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPOType|null
     */
    public function getEpo()
    {
        return $this->epo;
    }

    /**
     * Set epo value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPOType $epo
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaType
     */
    public function setEpo(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPOType $epo = null)
    {
        $this->epo = $epo;

        return $this;
    }

    /**
     * Get zasadySpecjalne value.
     *
     * @return string|null
     */
    public function getZasadySpecjalne()
    {
        return $this->zasadySpecjalne;
    }

    /**
     * Set zasadySpecjalne value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ZasadySpecjalneEnum::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ZasadySpecjalneEnum::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $zasadySpecjalne
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaType
     */
    public function setZasadySpecjalne($zasadySpecjalne = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ZasadySpecjalneEnum::valueIsValid($zasadySpecjalne)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ZasadySpecjalneEnum', is_array($zasadySpecjalne) ? implode(', ', $zasadySpecjalne) : var_export($zasadySpecjalne, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ZasadySpecjalneEnum::getValidValues())), __LINE__);
        }
        $this->zasadySpecjalne = $zasadySpecjalne;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaType
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
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\GabarytBiznesowaType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\GabarytBiznesowaType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $gabaryt
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaType
     */
    public function setGabaryt($gabaryt = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\GabarytBiznesowaType::valueIsValid($gabaryt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\GabarytBiznesowaType', is_array($gabaryt) ? implode(', ', $gabaryt) : var_export($gabaryt, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\GabarytBiznesowaType::getValidValues())), __LINE__);
        }
        $this->gabaryt = $gabaryt;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaType
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
     * Get numerTransakcjiOdbioru value.
     *
     * @return string|null
     */
    public function getNumerTransakcjiOdbioru()
    {
        return $this->numerTransakcjiOdbioru;
    }

    /**
     * Set numerTransakcjiOdbioru value.
     *
     * @param string $numerTransakcjiOdbioru
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaType
     */
    public function setNumerTransakcjiOdbioru($numerTransakcjiOdbioru = null)
    {
        // validation for constraint: string
        if (!is_null($numerTransakcjiOdbioru) && !is_string($numerTransakcjiOdbioru)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerTransakcjiOdbioru, true), gettype($numerTransakcjiOdbioru)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($numerTransakcjiOdbioru) && mb_strlen($numerTransakcjiOdbioru) > 50) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen($numerTransakcjiOdbioru)), __LINE__);
        }
        $this->numerTransakcjiOdbioru = $numerTransakcjiOdbioru;

        return $this;
    }
}
