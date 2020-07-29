<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

/**
 * This class stands for uslugaPaczkowaType StructType.
 */
class UslugaPaczkowaType extends PrzesylkaRejestrowanaType
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
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType[]
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
     * The potwierdzenieDoreczenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType
     */
    public $potwierdzenieDoreczenia;
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
     * The potwierdzenieOdbioru
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruPaczkowaType
     */
    public $potwierdzenieOdbioru;
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
     * The zwrotDokumentow
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var string
     */
    public $zwrotDokumentow;
    /**
     * The doreczenie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczenieUslugaPocztowaType
     */
    public $doreczenie;
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
     * The ponadgabaryt.
     *
     * @var bool
     */
    public $ponadgabaryt;
    /**
     * The zawartosc.
     *
     * @var string
     */
    public $zawartosc;
    /**
     * The sprawdzenieZawartosciPrzesylkiPrzezOdbiorce.
     *
     * @var bool
     */
    public $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
    /**
     * The ostroznie.
     *
     * @var bool
     */
    public $ostroznie;
    /**
     * The uiszczaOplate.
     *
     * @var string
     */
    public $uiszczaOplate;
    /**
     * The termin.
     *
     * @var string
     */
    public $termin;
    /**
     * The opakowanie.
     *
     * @var string
     */
    public $opakowanie;
    /**
     * The numerPrzesylkiKlienta.
     *
     * @var string
     */
    public $numerPrzesylkiKlienta;
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
     * The gabaryt.
     *
     * @var string
     */
    public $gabaryt;

    /**
     * Constructor method for uslugaPaczkowaType.
     *
     * @uses UslugaPaczkowaType::setSubPrzesylka()
     * @uses UslugaPaczkowaType::setPobranie()
     * @uses UslugaPaczkowaType::setPotwierdzenieDoreczenia()
     * @uses UslugaPaczkowaType::setUrzadWydaniaEPrzesylki()
     * @uses UslugaPaczkowaType::setPotwierdzenieOdbioru()
     * @uses UslugaPaczkowaType::setUbezpieczenie()
     * @uses UslugaPaczkowaType::setZwrotDokumentow()
     * @uses UslugaPaczkowaType::setDoreczenie()
     * @uses UslugaPaczkowaType::setEpo()
     * @uses UslugaPaczkowaType::setZasadySpecjalne()
     * @uses UslugaPaczkowaType::setMasa()
     * @uses UslugaPaczkowaType::setWartosc()
     * @uses UslugaPaczkowaType::setPonadgabaryt()
     * @uses UslugaPaczkowaType::setZawartosc()
     * @uses UslugaPaczkowaType::setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce()
     * @uses UslugaPaczkowaType::setOstroznie()
     * @uses UslugaPaczkowaType::setUiszczaOplate()
     * @uses UslugaPaczkowaType::setTermin()
     * @uses UslugaPaczkowaType::setOpakowanie()
     * @uses UslugaPaczkowaType::setNumerPrzesylkiKlienta()
     * @uses UslugaPaczkowaType::setNumerTransakcjiOdbioru()
     * @uses UslugaPaczkowaType::setGabaryt()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType[]          $subPrzesylka
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType                     $pobranie
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType      $potwierdzenieDoreczenia
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType       $urzadWydaniaEPrzesylki
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruPaczkowaType $potwierdzenieOdbioru
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType                $ubezpieczenie
     * @param string                                                                               $zwrotDokumentow
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczenieUslugaPocztowaType     $doreczenie
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPOType                          $epo
     * @param string                                                                               $zasadySpecjalne
     * @param int                                                                                  $masa
     * @param int                                                                                  $wartosc
     * @param bool                                                                                 $ponadgabaryt
     * @param string                                                                               $zawartosc
     * @param bool                                                                                 $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @param bool                                                                                 $ostroznie
     * @param string                                                                               $uiszczaOplate
     * @param string                                                                               $termin
     * @param string                                                                               $opakowanie
     * @param string                                                                               $numerPrzesylkiKlienta
     * @param string                                                                               $numerTransakcjiOdbioru
     * @param string                                                                               $gabaryt
     */
    public function __construct(array $subPrzesylka = [], \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType $pobranie = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruPaczkowaType $potwierdzenieOdbioru = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null, $zwrotDokumentow = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczenieUslugaPocztowaType $doreczenie = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EPOType $epo = null, $zasadySpecjalne = null, $masa = null, $wartosc = null, $ponadgabaryt = null, $zawartosc = null, $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null, $ostroznie = null, $uiszczaOplate = null, $termin = null, $opakowanie = null, $numerPrzesylkiKlienta = null, $numerTransakcjiOdbioru = null, $gabaryt = null)
    {
        $this
            ->setSubPrzesylka($subPrzesylka)
            ->setPobranie($pobranie)
            ->setPotwierdzenieDoreczenia($potwierdzenieDoreczenia)
            ->setUrzadWydaniaEPrzesylki($urzadWydaniaEPrzesylki)
            ->setPotwierdzenieOdbioru($potwierdzenieOdbioru)
            ->setUbezpieczenie($ubezpieczenie)
            ->setZwrotDokumentow($zwrotDokumentow)
            ->setDoreczenie($doreczenie)
            ->setEpo($epo)
            ->setZasadySpecjalne($zasadySpecjalne)
            ->setMasa($masa)
            ->setWartosc($wartosc)
            ->setPonadgabaryt($ponadgabaryt)
            ->setZawartosc($zawartosc)
            ->setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)
            ->setOstroznie($ostroznie)
            ->setUiszczaOplate($uiszczaOplate)
            ->setTermin($termin)
            ->setOpakowanie($opakowanie)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
            ->setNumerTransakcjiOdbioru($numerTransakcjiOdbioru)
            ->setGabaryt($gabaryt);
    }

    /**
     * Get subPrzesylka value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType[]
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
        foreach ($values as $uslugaPaczkowaTypeSubPrzesylkaItem) {
            // validation for constraint: itemType
            if (!$uslugaPaczkowaTypeSubPrzesylkaItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType) {
                $invalidValues[] = is_object($uslugaPaczkowaTypeSubPrzesylkaItem) ? get_class($uslugaPaczkowaTypeSubPrzesylkaItem) : sprintf('%s(%s)', gettype($uslugaPaczkowaTypeSubPrzesylkaItem), var_export($uslugaPaczkowaTypeSubPrzesylkaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The subPrzesylka property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
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
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType[] $subPrzesylka
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugaPaczkowaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugaPaczkowaType
     */
    public function addToSubPrzesylka(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType) {
            throw new \InvalidArgumentException(sprintf('The subPrzesylka property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubUslugaPaczkowaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugaPaczkowaType
     */
    public function setPobranie(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType $pobranie = null)
    {
        $this->pobranie = $pobranie;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugaPaczkowaType
     */
    public function setPotwierdzenieDoreczenia(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null)
    {
        $this->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugaPaczkowaType
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
     * Get potwierdzenieOdbioru value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruPaczkowaType|null
     */
    public function getPotwierdzenieOdbioru()
    {
        return $this->potwierdzenieOdbioru;
    }

    /**
     * Set potwierdzenieOdbioru value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruPaczkowaType $potwierdzenieOdbioru
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugaPaczkowaType
     */
    public function setPotwierdzenieOdbioru(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PotwierdzenieOdbioruPaczkowaType $potwierdzenieOdbioru = null)
    {
        $this->potwierdzenieOdbioru = $potwierdzenieOdbioru;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugaPaczkowaType
     */
    public function setUbezpieczenie(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\UbezpieczenieType $ubezpieczenie = null)
    {
        $this->ubezpieczenie = $ubezpieczenie;

        return $this;
    }

    /**
     * Get zwrotDokumentow value.
     *
     * @return string|null
     */
    public function getZwrotDokumentow()
    {
        return $this->zwrotDokumentow;
    }

    /**
     * Set zwrotDokumentow value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ZwrotDokumentowPaczkowaType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ZwrotDokumentowPaczkowaType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $zwrotDokumentow
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugaPaczkowaType
     */
    public function setZwrotDokumentow($zwrotDokumentow = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ZwrotDokumentowPaczkowaType::valueIsValid($zwrotDokumentow)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ZwrotDokumentowPaczkowaType', is_array($zwrotDokumentow) ? implode(', ', $zwrotDokumentow) : var_export($zwrotDokumentow, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ZwrotDokumentowPaczkowaType::getValidValues())), __LINE__);
        }
        $this->zwrotDokumentow = $zwrotDokumentow;

        return $this;
    }

    /**
     * Get doreczenie value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczenieUslugaPocztowaType|null
     */
    public function getDoreczenie()
    {
        return $this->doreczenie;
    }

    /**
     * Set doreczenie value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczenieUslugaPocztowaType $doreczenie
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugaPaczkowaType
     */
    public function setDoreczenie(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczenieUslugaPocztowaType $doreczenie = null)
    {
        $this->doreczenie = $doreczenie;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugaPaczkowaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugaPaczkowaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugaPaczkowaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugaPaczkowaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugaPaczkowaType
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
     * Get zawartosc value.
     *
     * @return string|null
     */
    public function getZawartosc()
    {
        return $this->zawartosc;
    }

    /**
     * Set zawartosc value.
     *
     * @param string $zawartosc
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugaPaczkowaType
     */
    public function setZawartosc($zawartosc = null)
    {
        // validation for constraint: string
        if (!is_null($zawartosc) && !is_string($zawartosc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zawartosc, true), gettype($zawartosc)), __LINE__);
        }
        $this->zawartosc = $zawartosc;

        return $this;
    }

    /**
     * Get sprawdzenieZawartosciPrzesylkiPrzezOdbiorce value.
     *
     * @return bool|null
     */
    public function getSprawdzenieZawartosciPrzesylkiPrzezOdbiorce()
    {
        return $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
    }

    /**
     * Set sprawdzenieZawartosciPrzesylkiPrzezOdbiorce value.
     *
     * @param bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugaPaczkowaType
     */
    public function setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null)
    {
        // validation for constraint: boolean
        if (!is_null($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce) && !is_bool($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce, true), gettype($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)), __LINE__);
        }
        $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugaPaczkowaType
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
     * Get uiszczaOplate value.
     *
     * @return string|null
     */
    public function getUiszczaOplate()
    {
        return $this->uiszczaOplate;
    }

    /**
     * Set uiszczaOplate value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\UiszczaOplateType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\UiszczaOplateType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $uiszczaOplate
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugaPaczkowaType
     */
    public function setUiszczaOplate($uiszczaOplate = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\UiszczaOplateType::valueIsValid($uiszczaOplate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\UiszczaOplateType', is_array($uiszczaOplate) ? implode(', ', $uiszczaOplate) : var_export($uiszczaOplate, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\UiszczaOplateType::getValidValues())), __LINE__);
        }
        $this->uiszczaOplate = $uiszczaOplate;

        return $this;
    }

    /**
     * Get termin value.
     *
     * @return string|null
     */
    public function getTermin()
    {
        return $this->termin;
    }

    /**
     * Set termin value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\TerminPaczkowaType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\TerminPaczkowaType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $termin
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugaPaczkowaType
     */
    public function setTermin($termin = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\TerminPaczkowaType::valueIsValid($termin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\TerminPaczkowaType', is_array($termin) ? implode(', ', $termin) : var_export($termin, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\TerminPaczkowaType::getValidValues())), __LINE__);
        }
        $this->termin = $termin;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugaPaczkowaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugaPaczkowaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugaPaczkowaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugaPaczkowaType
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
