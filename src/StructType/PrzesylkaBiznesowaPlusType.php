<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

/**
 * This class stands for przesylkaBiznesowaPlusType StructType.
 */
class PrzesylkaBiznesowaPlusType extends PrzesylkaRejestrowanaType
{
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
     * The urzadWydaniaPrzesylki
     * Meta information extracted from the WSDL
     * - documentation: Wystarczy przesłac obiekt z ustawionym id reszta pól moż ezostać pominięta (aby zmniejszyć ilośc danych do tansmisji)
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType
     */
    public $urzadWydaniaPrzesylki;
    /**
     * The subPrzesylka
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaPlusType[]
     */
    public $subPrzesylka;
    /**
     * The dataDrugiejProbyDoreczenia
     * Meta information extracted from the WSDL
     * - choice: dataDrugiejProbyDoreczenia | drugaProbaDoreczeniaPoLiczbieDni
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1.
     *
     * @var string
     */
    public $dataDrugiejProbyDoreczenia;
    /**
     * The drugaProbaDoreczeniaPoLiczbieDni
     * Meta information extracted from the WSDL
     * - choice: dataDrugiejProbyDoreczenia | drugaProbaDoreczeniaPoLiczbieDni
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1.
     *
     * @var int
     */
    public $drugaProbaDoreczeniaPoLiczbieDni;
    /**
     * The posteRestante.
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
     * The kwotaTranzakcji
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 0.
     *
     * @var int
     */
    public $kwotaTranzakcji;
    /**
     * The ostroznie.
     *
     * @var bool
     */
    public $ostroznie;
    /**
     * The kategoria.
     *
     * @var string
     */
    public $kategoria;
    /**
     * The iloscPotwierdzenOdbioru
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - maxInclusive: 9
     * - minInclusive: 0.
     *
     * @var int
     */
    public $iloscPotwierdzenOdbioru;
    /**
     * The zwrotDoslanie.
     *
     * @var bool
     */
    public $zwrotDoslanie;
    /**
     * The eKontaktAdresata
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - minLength: 0.
     *
     * @var string
     */
    public $eKontaktAdresata;
    /**
     * The eSposobPowiadomieniaAdresata.
     *
     * @var string
     */
    public $eSposobPowiadomieniaAdresata;
    /**
     * The numerPrzesylkiKlienta
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 25.
     *
     * @var string
     */
    public $numerPrzesylkiKlienta;
    /**
     * The iloscDniOczekiwaniaNaWydanie.
     *
     * @var int
     */
    public $iloscDniOczekiwaniaNaWydanie;
    /**
     * The oczekiwanyTerminDoreczenia.
     *
     * @var string
     */
    public $oczekiwanyTerminDoreczenia;
    /**
     * The terminRodzajPlus.
     *
     * @var string
     */
    public $terminRodzajPlus;
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
     * Constructor method for przesylkaBiznesowaPlusType.
     *
     * @uses PrzesylkaBiznesowaPlusType::setPobranie()
     * @uses PrzesylkaBiznesowaPlusType::setUrzadWydaniaPrzesylki()
     * @uses PrzesylkaBiznesowaPlusType::setSubPrzesylka()
     * @uses PrzesylkaBiznesowaPlusType::setDataDrugiejProbyDoreczenia()
     * @uses PrzesylkaBiznesowaPlusType::setDrugaProbaDoreczeniaPoLiczbieDni()
     * @uses PrzesylkaBiznesowaPlusType::setPosteRestante()
     * @uses PrzesylkaBiznesowaPlusType::setMasa()
     * @uses PrzesylkaBiznesowaPlusType::setGabaryt()
     * @uses PrzesylkaBiznesowaPlusType::setWartosc()
     * @uses PrzesylkaBiznesowaPlusType::setKwotaTranzakcji()
     * @uses PrzesylkaBiznesowaPlusType::setOstroznie()
     * @uses PrzesylkaBiznesowaPlusType::setKategoria()
     * @uses PrzesylkaBiznesowaPlusType::setIloscPotwierdzenOdbioru()
     * @uses PrzesylkaBiznesowaPlusType::setZwrotDoslanie()
     * @uses PrzesylkaBiznesowaPlusType::setEKontaktAdresata()
     * @uses PrzesylkaBiznesowaPlusType::setESposobPowiadomieniaAdresata()
     * @uses PrzesylkaBiznesowaPlusType::setNumerPrzesylkiKlienta()
     * @uses PrzesylkaBiznesowaPlusType::setIloscDniOczekiwaniaNaWydanie()
     * @uses PrzesylkaBiznesowaPlusType::setOczekiwanyTerminDoreczenia()
     * @uses PrzesylkaBiznesowaPlusType::setTerminRodzajPlus()
     * @uses PrzesylkaBiznesowaPlusType::setNumerTransakcjiOdbioru()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType                    $pobranie
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType            $urzadWydaniaPrzesylki
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaPlusType[] $subPrzesylka
     * @param string                                                                              $dataDrugiejProbyDoreczenia
     * @param int                                                                                 $drugaProbaDoreczeniaPoLiczbieDni
     * @param bool                                                                                $posteRestante
     * @param int                                                                                 $masa
     * @param string                                                                              $gabaryt
     * @param int                                                                                 $wartosc
     * @param int                                                                                 $kwotaTranzakcji
     * @param bool                                                                                $ostroznie
     * @param string                                                                              $kategoria
     * @param int                                                                                 $iloscPotwierdzenOdbioru
     * @param bool                                                                                $zwrotDoslanie
     * @param string                                                                              $eKontaktAdresata
     * @param string                                                                              $eSposobPowiadomieniaAdresata
     * @param string                                                                              $numerPrzesylkiKlienta
     * @param int                                                                                 $iloscDniOczekiwaniaNaWydanie
     * @param string                                                                              $oczekiwanyTerminDoreczenia
     * @param string                                                                              $terminRodzajPlus
     * @param string                                                                              $numerTransakcjiOdbioru
     */
    public function __construct(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType $pobranie = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType $urzadWydaniaPrzesylki = null, array $subPrzesylka = [], $dataDrugiejProbyDoreczenia = null, $drugaProbaDoreczeniaPoLiczbieDni = null, $posteRestante = null, $masa = null, $gabaryt = null, $wartosc = null, $kwotaTranzakcji = null, $ostroznie = null, $kategoria = null, $iloscPotwierdzenOdbioru = null, $zwrotDoslanie = null, $eKontaktAdresata = null, $eSposobPowiadomieniaAdresata = null, $numerPrzesylkiKlienta = null, $iloscDniOczekiwaniaNaWydanie = null, $oczekiwanyTerminDoreczenia = null, $terminRodzajPlus = null, $numerTransakcjiOdbioru = null)
    {
        $this
            ->setPobranie($pobranie)
            ->setUrzadWydaniaPrzesylki($urzadWydaniaPrzesylki)
            ->setSubPrzesylka($subPrzesylka)
            ->setDataDrugiejProbyDoreczenia($dataDrugiejProbyDoreczenia)
            ->setDrugaProbaDoreczeniaPoLiczbieDni($drugaProbaDoreczeniaPoLiczbieDni)
            ->setPosteRestante($posteRestante)
            ->setMasa($masa)
            ->setGabaryt($gabaryt)
            ->setWartosc($wartosc)
            ->setKwotaTranzakcji($kwotaTranzakcji)
            ->setOstroznie($ostroznie)
            ->setKategoria($kategoria)
            ->setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
            ->setZwrotDoslanie($zwrotDoslanie)
            ->setEKontaktAdresata($eKontaktAdresata)
            ->setESposobPowiadomieniaAdresata($eSposobPowiadomieniaAdresata)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
            ->setIloscDniOczekiwaniaNaWydanie($iloscDniOczekiwaniaNaWydanie)
            ->setOczekiwanyTerminDoreczenia($oczekiwanyTerminDoreczenia)
            ->setTerminRodzajPlus($terminRodzajPlus)
            ->setNumerTransakcjiOdbioru($numerTransakcjiOdbioru);
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setPobranie(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType $pobranie = null)
    {
        $this->pobranie = $pobranie;

        return $this;
    }

    /**
     * Get urzadWydaniaPrzesylki value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType|null
     */
    public function getUrzadWydaniaPrzesylki()
    {
        return $this->urzadWydaniaPrzesylki;
    }

    /**
     * Set urzadWydaniaPrzesylki value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType $urzadWydaniaPrzesylki
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setUrzadWydaniaPrzesylki(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlacowkaPocztowaType $urzadWydaniaPrzesylki = null)
    {
        $this->urzadWydaniaPrzesylki = $urzadWydaniaPrzesylki;

        return $this;
    }

    /**
     * Get subPrzesylka value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaPlusType[]|null
     */
    public function getSubPrzesylka()
    {
        return $this->subPrzesylka;
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
        foreach ($values as $przesylkaBiznesowaPlusTypeSubPrzesylkaItem) {
            // validation for constraint: itemType
            if (!$przesylkaBiznesowaPlusTypeSubPrzesylkaItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaPlusType) {
                $invalidValues[] = is_object($przesylkaBiznesowaPlusTypeSubPrzesylkaItem) ? get_class($przesylkaBiznesowaPlusTypeSubPrzesylkaItem) : sprintf('%s(%s)', gettype($przesylkaBiznesowaPlusTypeSubPrzesylkaItem), var_export($przesylkaBiznesowaPlusTypeSubPrzesylkaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The subPrzesylka property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaPlusType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set subPrzesylka value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaPlusType[] $subPrzesylka
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setSubPrzesylka(array $subPrzesylka = [])
    {
        // validation for constraint: array
        if ('' !== ($subPrzesylkaArrayErrorMessage = self::validateSubPrzesylkaForArrayConstraintsFromSetSubPrzesylka($subPrzesylka))) {
            throw new \InvalidArgumentException($subPrzesylkaArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($subPrzesylka) && count($subPrzesylka) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($subPrzesylka)), __LINE__);
        }
        $this->subPrzesylka = $subPrzesylka;

        return $this;
    }

    /**
     * Add item to subPrzesylka value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function addToSubPrzesylka(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaPlusType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaPlusType) {
            throw new \InvalidArgumentException(sprintf('The subPrzesylka property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubPrzesylkaBiznesowaPlusType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($this->subPrzesylka) && count($this->subPrzesylka) >= 100) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 100', count($this->subPrzesylka)), __LINE__);
        }
        $this->subPrzesylka[] = $item;

        return $this;
    }

    /**
     * Get dataDrugiejProbyDoreczenia value.
     *
     * @return string|null
     */
    public function getDataDrugiejProbyDoreczenia()
    {
        return isset($this->dataDrugiejProbyDoreczenia) ? $this->dataDrugiejProbyDoreczenia : null;
    }

    /**
     * This method is responsible for validating the value passed to the setDataDrugiejProbyDoreczenia method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDataDrugiejProbyDoreczenia method
     * This has to validate that the property which is being set is the only one among the given choices.
     *
     * @param mixed $value
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDataDrugiejProbyDoreczeniaForChoiceConstraintsFromSetDataDrugiejProbyDoreczenia($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'drugaProbaDoreczeniaPoLiczbieDni',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property dataDrugiejProbyDoreczenia can\'t be set as the property %s is already set. Only one property must be set among these properties: dataDrugiejProbyDoreczenia, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }

        return $message;
    }

    /**
     * Set dataDrugiejProbyDoreczenia value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object.
     *
     * @throws \InvalidArgumentException
     *
     * @param string $dataDrugiejProbyDoreczenia
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setDataDrugiejProbyDoreczenia($dataDrugiejProbyDoreczenia = null)
    {
        // validation for constraint: string
        if (!is_null($dataDrugiejProbyDoreczenia) && !is_string($dataDrugiejProbyDoreczenia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataDrugiejProbyDoreczenia, true), gettype($dataDrugiejProbyDoreczenia)), __LINE__);
        }
        // validation for constraint: choice(dataDrugiejProbyDoreczenia, drugaProbaDoreczeniaPoLiczbieDni)
        if ('' !== ($dataDrugiejProbyDoreczeniaChoiceErrorMessage = self::validateDataDrugiejProbyDoreczeniaForChoiceConstraintsFromSetDataDrugiejProbyDoreczenia($dataDrugiejProbyDoreczenia))) {
            throw new \InvalidArgumentException($dataDrugiejProbyDoreczeniaChoiceErrorMessage, __LINE__);
        }
        if (is_null($dataDrugiejProbyDoreczenia) || (is_array($dataDrugiejProbyDoreczenia) && empty($dataDrugiejProbyDoreczenia))) {
            unset($this->dataDrugiejProbyDoreczenia);
        } else {
            $this->dataDrugiejProbyDoreczenia = $dataDrugiejProbyDoreczenia;
        }

        return $this;
    }

    /**
     * Get drugaProbaDoreczeniaPoLiczbieDni value.
     *
     * @return int|null
     */
    public function getDrugaProbaDoreczeniaPoLiczbieDni()
    {
        return isset($this->drugaProbaDoreczeniaPoLiczbieDni) ? $this->drugaProbaDoreczeniaPoLiczbieDni : null;
    }

    /**
     * This method is responsible for validating the value passed to the setDrugaProbaDoreczeniaPoLiczbieDni method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDrugaProbaDoreczeniaPoLiczbieDni method
     * This has to validate that the property which is being set is the only one among the given choices.
     *
     * @param mixed $value
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDrugaProbaDoreczeniaPoLiczbieDniForChoiceConstraintsFromSetDrugaProbaDoreczeniaPoLiczbieDni($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'dataDrugiejProbyDoreczenia',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property drugaProbaDoreczeniaPoLiczbieDni can\'t be set as the property %s is already set. Only one property must be set among these properties: drugaProbaDoreczeniaPoLiczbieDni, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }

        return $message;
    }

    /**
     * Set drugaProbaDoreczeniaPoLiczbieDni value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object.
     *
     * @throws \InvalidArgumentException
     *
     * @param int $drugaProbaDoreczeniaPoLiczbieDni
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setDrugaProbaDoreczeniaPoLiczbieDni($drugaProbaDoreczeniaPoLiczbieDni = null)
    {
        // validation for constraint: int
        if (!is_null($drugaProbaDoreczeniaPoLiczbieDni) && !(is_int($drugaProbaDoreczeniaPoLiczbieDni) || ctype_digit($drugaProbaDoreczeniaPoLiczbieDni))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($drugaProbaDoreczeniaPoLiczbieDni, true), gettype($drugaProbaDoreczeniaPoLiczbieDni)), __LINE__);
        }
        // validation for constraint: choice(dataDrugiejProbyDoreczenia, drugaProbaDoreczeniaPoLiczbieDni)
        if ('' !== ($drugaProbaDoreczeniaPoLiczbieDniChoiceErrorMessage = self::validateDrugaProbaDoreczeniaPoLiczbieDniForChoiceConstraintsFromSetDrugaProbaDoreczeniaPoLiczbieDni($drugaProbaDoreczeniaPoLiczbieDni))) {
            throw new \InvalidArgumentException($drugaProbaDoreczeniaPoLiczbieDniChoiceErrorMessage, __LINE__);
        }
        if (is_null($drugaProbaDoreczeniaPoLiczbieDni) || (is_array($drugaProbaDoreczeniaPoLiczbieDni) && empty($drugaProbaDoreczeniaPoLiczbieDni))) {
            unset($this->drugaProbaDoreczeniaPoLiczbieDni);
        } else {
            $this->drugaProbaDoreczeniaPoLiczbieDni = $drugaProbaDoreczeniaPoLiczbieDni;
        }

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
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
     * Get kwotaTranzakcji value.
     *
     * @return int|null
     */
    public function getKwotaTranzakcji()
    {
        return $this->kwotaTranzakcji;
    }

    /**
     * Set kwotaTranzakcji value.
     *
     * @param int $kwotaTranzakcji
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setKwotaTranzakcji($kwotaTranzakcji = null)
    {
        // validation for constraint: int
        if (!is_null($kwotaTranzakcji) && !(is_int($kwotaTranzakcji) || ctype_digit($kwotaTranzakcji))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($kwotaTranzakcji, true), gettype($kwotaTranzakcji)), __LINE__);
        }
        // validation for constraint: maxInclusive(9999999)
        if (!is_null($kwotaTranzakcji) && $kwotaTranzakcji > 9999999) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9999999', var_export($kwotaTranzakcji, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($kwotaTranzakcji) && $kwotaTranzakcji < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($kwotaTranzakcji, true)), __LINE__);
        }
        $this->kwotaTranzakcji = $kwotaTranzakcji;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
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
     * Get iloscPotwierdzenOdbioru value.
     *
     * @return int|null
     */
    public function getIloscPotwierdzenOdbioru()
    {
        return $this->iloscPotwierdzenOdbioru;
    }

    /**
     * Set iloscPotwierdzenOdbioru value.
     *
     * @param int $iloscPotwierdzenOdbioru
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru = null)
    {
        // validation for constraint: int
        if (!is_null($iloscPotwierdzenOdbioru) && !(is_int($iloscPotwierdzenOdbioru) || ctype_digit($iloscPotwierdzenOdbioru))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iloscPotwierdzenOdbioru, true), gettype($iloscPotwierdzenOdbioru)), __LINE__);
        }
        // validation for constraint: maxInclusive(9)
        if (!is_null($iloscPotwierdzenOdbioru) && $iloscPotwierdzenOdbioru > 9) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9', var_export($iloscPotwierdzenOdbioru, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($iloscPotwierdzenOdbioru) && $iloscPotwierdzenOdbioru < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($iloscPotwierdzenOdbioru, true)), __LINE__);
        }
        $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;

        return $this;
    }

    /**
     * Get zwrotDoslanie value.
     *
     * @return bool|null
     */
    public function getZwrotDoslanie()
    {
        return $this->zwrotDoslanie;
    }

    /**
     * Set zwrotDoslanie value.
     *
     * @param bool $zwrotDoslanie
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setZwrotDoslanie($zwrotDoslanie = null)
    {
        // validation for constraint: boolean
        if (!is_null($zwrotDoslanie) && !is_bool($zwrotDoslanie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($zwrotDoslanie, true), gettype($zwrotDoslanie)), __LINE__);
        }
        $this->zwrotDoslanie = $zwrotDoslanie;

        return $this;
    }

    /**
     * Get eKontaktAdresata value.
     *
     * @return string|null
     */
    public function getEKontaktAdresata()
    {
        return $this->eKontaktAdresata;
    }

    /**
     * Set eKontaktAdresata value.
     *
     * @param string $eKontaktAdresata
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setEKontaktAdresata($eKontaktAdresata = null)
    {
        // validation for constraint: string
        if (!is_null($eKontaktAdresata) && !is_string($eKontaktAdresata)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eKontaktAdresata, true), gettype($eKontaktAdresata)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($eKontaktAdresata) && mb_strlen($eKontaktAdresata) > 50) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen($eKontaktAdresata)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($eKontaktAdresata) && mb_strlen($eKontaktAdresata) < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen($eKontaktAdresata)), __LINE__);
        }
        $this->eKontaktAdresata = $eKontaktAdresata;

        return $this;
    }

    /**
     * Get eSposobPowiadomieniaAdresata value.
     *
     * @return string|null
     */
    public function getESposobPowiadomieniaAdresata()
    {
        return $this->eSposobPowiadomieniaAdresata;
    }

    /**
     * Set eSposobPowiadomieniaAdresata value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ESposobPowiadomieniaType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ESposobPowiadomieniaType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $eSposobPowiadomieniaAdresata
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setESposobPowiadomieniaAdresata($eSposobPowiadomieniaAdresata = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ESposobPowiadomieniaType::valueIsValid($eSposobPowiadomieniaAdresata)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ESposobPowiadomieniaType', is_array($eSposobPowiadomieniaAdresata) ? implode(', ', $eSposobPowiadomieniaAdresata) : var_export($eSposobPowiadomieniaAdresata, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ESposobPowiadomieniaType::getValidValues())), __LINE__);
        }
        $this->eSposobPowiadomieniaAdresata = $eSposobPowiadomieniaAdresata;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
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

    /**
     * Get iloscDniOczekiwaniaNaWydanie value.
     *
     * @return int|null
     */
    public function getIloscDniOczekiwaniaNaWydanie()
    {
        return $this->iloscDniOczekiwaniaNaWydanie;
    }

    /**
     * Set iloscDniOczekiwaniaNaWydanie value.
     *
     * @param int $iloscDniOczekiwaniaNaWydanie
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setIloscDniOczekiwaniaNaWydanie($iloscDniOczekiwaniaNaWydanie = null)
    {
        // validation for constraint: int
        if (!is_null($iloscDniOczekiwaniaNaWydanie) && !(is_int($iloscDniOczekiwaniaNaWydanie) || ctype_digit($iloscDniOczekiwaniaNaWydanie))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iloscDniOczekiwaniaNaWydanie, true), gettype($iloscDniOczekiwaniaNaWydanie)), __LINE__);
        }
        $this->iloscDniOczekiwaniaNaWydanie = $iloscDniOczekiwaniaNaWydanie;

        return $this;
    }

    /**
     * Get oczekiwanyTerminDoreczenia value.
     *
     * @return string|null
     */
    public function getOczekiwanyTerminDoreczenia()
    {
        return $this->oczekiwanyTerminDoreczenia;
    }

    /**
     * Set oczekiwanyTerminDoreczenia value.
     *
     * @param string $oczekiwanyTerminDoreczenia
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setOczekiwanyTerminDoreczenia($oczekiwanyTerminDoreczenia = null)
    {
        // validation for constraint: string
        if (!is_null($oczekiwanyTerminDoreczenia) && !is_string($oczekiwanyTerminDoreczenia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oczekiwanyTerminDoreczenia, true), gettype($oczekiwanyTerminDoreczenia)), __LINE__);
        }
        $this->oczekiwanyTerminDoreczenia = $oczekiwanyTerminDoreczenia;

        return $this;
    }

    /**
     * Get terminRodzajPlus value.
     *
     * @return string|null
     */
    public function getTerminRodzajPlus()
    {
        return $this->terminRodzajPlus;
    }

    /**
     * Set terminRodzajPlus value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\TerminRodzajPlusType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\TerminRodzajPlusType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $terminRodzajPlus
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setTerminRodzajPlus($terminRodzajPlus = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\TerminRodzajPlusType::valueIsValid($terminRodzajPlus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\TerminRodzajPlusType', is_array($terminRodzajPlus) ? implode(', ', $terminRodzajPlus) : var_export($terminRodzajPlus, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\TerminRodzajPlusType::getValidValues())), __LINE__);
        }
        $this->terminRodzajPlus = $terminRodzajPlus;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaBiznesowaPlusType
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
