<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deklaracjaCelna2Type StructType.
 */
class DeklaracjaCelna2Type extends AbstractStructBase
{
    /**
     * The rodzaj
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var string
     */
    public $rodzaj;
    /**
     * The zawartoscPrzesylki
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var string
     */
    public $zawartoscPrzesylki;
    /**
     * The walutaKodISO
     * Meta information extracted from the WSDL
     * - documentation: Kod ISO waluty w której wyrażone są wartości pozycji podanych w elemencie szczegolyZawartosciPrzesylki
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var string
     */
    public $walutaKodISO;
    /**
     * The szczegolyZawartosciPrzesylki
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 1.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType[]
     */
    public $szczegolyZawartosciPrzesylki;
    /**
     * The dokumentyTowarzyszace
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DokumentyTowarzyszaceType[]
     */
    public $dokumentyTowarzyszace;
    /**
     * The wyjasnienie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var string
     */
    public $wyjasnienie;
    /**
     * The oplatyPocztowe
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var string
     */
    public $oplatyPocztowe;
    /**
     * The uwagi
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var string
     */
    public $uwagi;
    /**
     * The numerReferencyjnyImportera
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var string
     */
    public $numerReferencyjnyImportera;
    /**
     * The numerTelefonuImportera
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var string
     */
    public $numerTelefonuImportera;
    /**
     * The numerReferencyjnyCelny
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var string
     */
    public $numerReferencyjnyCelny;

    /**
     * Constructor method for deklaracjaCelna2Type.
     *
     * @uses DeklaracjaCelna2Type::setRodzaj()
     * @uses DeklaracjaCelna2Type::setZawartoscPrzesylki()
     * @uses DeklaracjaCelna2Type::setWalutaKodISO()
     * @uses DeklaracjaCelna2Type::setSzczegolyZawartosciPrzesylki()
     * @uses DeklaracjaCelna2Type::setDokumentyTowarzyszace()
     * @uses DeklaracjaCelna2Type::setWyjasnienie()
     * @uses DeklaracjaCelna2Type::setOplatyPocztowe()
     * @uses DeklaracjaCelna2Type::setUwagi()
     * @uses DeklaracjaCelna2Type::setNumerReferencyjnyImportera()
     * @uses DeklaracjaCelna2Type::setNumerTelefonuImportera()
     * @uses DeklaracjaCelna2Type::setNumerReferencyjnyCelny()
     *
     * @param string                                                                                             $rodzaj
     * @param string                                                                                             $zawartoscPrzesylki
     * @param string                                                                                             $walutaKodISO
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType[] $szczegolyZawartosciPrzesylki
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DokumentyTowarzyszaceType[]                    $dokumentyTowarzyszace
     * @param string                                                                                             $wyjasnienie
     * @param string                                                                                             $oplatyPocztowe
     * @param string                                                                                             $uwagi
     * @param string                                                                                             $numerReferencyjnyImportera
     * @param string                                                                                             $numerTelefonuImportera
     * @param string                                                                                             $numerReferencyjnyCelny
     */
    public function __construct($rodzaj = null, $zawartoscPrzesylki = null, $walutaKodISO = null, array $szczegolyZawartosciPrzesylki = [], array $dokumentyTowarzyszace = [], $wyjasnienie = null, $oplatyPocztowe = null, $uwagi = null, $numerReferencyjnyImportera = null, $numerTelefonuImportera = null, $numerReferencyjnyCelny = null)
    {
        $this
            ->setRodzaj($rodzaj)
            ->setZawartoscPrzesylki($zawartoscPrzesylki)
            ->setWalutaKodISO($walutaKodISO)
            ->setSzczegolyZawartosciPrzesylki($szczegolyZawartosciPrzesylki)
            ->setDokumentyTowarzyszace($dokumentyTowarzyszace)
            ->setWyjasnienie($wyjasnienie)
            ->setOplatyPocztowe($oplatyPocztowe)
            ->setUwagi($uwagi)
            ->setNumerReferencyjnyImportera($numerReferencyjnyImportera)
            ->setNumerTelefonuImportera($numerTelefonuImportera)
            ->setNumerReferencyjnyCelny($numerReferencyjnyCelny);
    }

    /**
     * Get rodzaj value.
     *
     * @return string
     */
    public function getRodzaj()
    {
        return $this->rodzaj;
    }

    /**
     * Set rodzaj value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\DeklaracaCelnaRodzajEnum::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\DeklaracaCelnaRodzajEnum::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $rodzaj
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
     */
    public function setRodzaj($rodzaj = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\DeklaracaCelnaRodzajEnum::valueIsValid($rodzaj)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\DeklaracaCelnaRodzajEnum', is_array($rodzaj) ? implode(', ', $rodzaj) : var_export($rodzaj, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\DeklaracaCelnaRodzajEnum::getValidValues())), __LINE__);
        }
        $this->rodzaj = $rodzaj;

        return $this;
    }

    /**
     * Get zawartoscPrzesylki value.
     *
     * @return string
     */
    public function getZawartoscPrzesylki()
    {
        return $this->zawartoscPrzesylki;
    }

    /**
     * Set zawartoscPrzesylki value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ZawartoscPrzesylkiZagranicznejEnum::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ZawartoscPrzesylkiZagranicznejEnum::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $zawartoscPrzesylki
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
     */
    public function setZawartoscPrzesylki($zawartoscPrzesylki = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ZawartoscPrzesylkiZagranicznejEnum::valueIsValid($zawartoscPrzesylki)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ZawartoscPrzesylkiZagranicznejEnum', is_array($zawartoscPrzesylki) ? implode(', ', $zawartoscPrzesylki) : var_export($zawartoscPrzesylki, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ZawartoscPrzesylkiZagranicznejEnum::getValidValues())), __LINE__);
        }
        $this->zawartoscPrzesylki = $zawartoscPrzesylki;

        return $this;
    }

    /**
     * Get walutaKodISO value.
     *
     * @return string
     */
    public function getWalutaKodISO()
    {
        return $this->walutaKodISO;
    }

    /**
     * Set walutaKodISO value.
     *
     * @param string $walutaKodISO
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
     */
    public function setWalutaKodISO($walutaKodISO = null)
    {
        // validation for constraint: string
        if (!is_null($walutaKodISO) && !is_string($walutaKodISO)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($walutaKodISO, true), gettype($walutaKodISO)), __LINE__);
        }
        $this->walutaKodISO = $walutaKodISO;

        return $this;
    }

    /**
     * Get szczegolyZawartosciPrzesylki value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType[]
     */
    public function getSzczegolyZawartosciPrzesylki()
    {
        return $this->szczegolyZawartosciPrzesylki;
    }

    /**
     * This method is responsible for validating the values passed to the setSzczegolyZawartosciPrzesylki method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSzczegolyZawartosciPrzesylki method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSzczegolyZawartosciPrzesylkiForArrayConstraintsFromSetSzczegolyZawartosciPrzesylki(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $deklaracjaCelna2TypeSzczegolyZawartosciPrzesylkiItem) {
            // validation for constraint: itemType
            if (!$deklaracjaCelna2TypeSzczegolyZawartosciPrzesylkiItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType) {
                $invalidValues[] = is_object($deklaracjaCelna2TypeSzczegolyZawartosciPrzesylkiItem) ? get_class($deklaracjaCelna2TypeSzczegolyZawartosciPrzesylkiItem) : sprintf('%s(%s)', gettype($deklaracjaCelna2TypeSzczegolyZawartosciPrzesylkiItem), var_export($deklaracjaCelna2TypeSzczegolyZawartosciPrzesylkiItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The szczegolyZawartosciPrzesylki property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set szczegolyZawartosciPrzesylki value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType[] $szczegolyZawartosciPrzesylki
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
     */
    public function setSzczegolyZawartosciPrzesylki(array $szczegolyZawartosciPrzesylki = [])
    {
        // validation for constraint: array
        if ('' !== ($szczegolyZawartosciPrzesylkiArrayErrorMessage = self::validateSzczegolyZawartosciPrzesylkiForArrayConstraintsFromSetSzczegolyZawartosciPrzesylki($szczegolyZawartosciPrzesylki))) {
            throw new \InvalidArgumentException($szczegolyZawartosciPrzesylkiArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($szczegolyZawartosciPrzesylki) && count($szczegolyZawartosciPrzesylki) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5', count($szczegolyZawartosciPrzesylki)), __LINE__);
        }
        $this->szczegolyZawartosciPrzesylki = $szczegolyZawartosciPrzesylki;

        return $this;
    }

    /**
     * Add item to szczegolyZawartosciPrzesylki value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
     */
    public function addToSzczegolyZawartosciPrzesylki(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType) {
            throw new \InvalidArgumentException(sprintf('The szczegolyZawartosciPrzesylki property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($this->szczegolyZawartosciPrzesylki) && count($this->szczegolyZawartosciPrzesylki) >= 5) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5', count($this->szczegolyZawartosciPrzesylki)), __LINE__);
        }
        $this->szczegolyZawartosciPrzesylki[] = $item;

        return $this;
    }

    /**
     * Get dokumentyTowarzyszace value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DokumentyTowarzyszaceType[]|null
     */
    public function getDokumentyTowarzyszace()
    {
        return $this->dokumentyTowarzyszace;
    }

    /**
     * This method is responsible for validating the values passed to the setDokumentyTowarzyszace method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDokumentyTowarzyszace method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDokumentyTowarzyszaceForArrayConstraintsFromSetDokumentyTowarzyszace(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $deklaracjaCelna2TypeDokumentyTowarzyszaceItem) {
            // validation for constraint: itemType
            if (!$deklaracjaCelna2TypeDokumentyTowarzyszaceItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DokumentyTowarzyszaceType) {
                $invalidValues[] = is_object($deklaracjaCelna2TypeDokumentyTowarzyszaceItem) ? get_class($deklaracjaCelna2TypeDokumentyTowarzyszaceItem) : sprintf('%s(%s)', gettype($deklaracjaCelna2TypeDokumentyTowarzyszaceItem), var_export($deklaracjaCelna2TypeDokumentyTowarzyszaceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The dokumentyTowarzyszace property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DokumentyTowarzyszaceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set dokumentyTowarzyszace value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DokumentyTowarzyszaceType[] $dokumentyTowarzyszace
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
     */
    public function setDokumentyTowarzyszace(array $dokumentyTowarzyszace = [])
    {
        // validation for constraint: array
        if ('' !== ($dokumentyTowarzyszaceArrayErrorMessage = self::validateDokumentyTowarzyszaceForArrayConstraintsFromSetDokumentyTowarzyszace($dokumentyTowarzyszace))) {
            throw new \InvalidArgumentException($dokumentyTowarzyszaceArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($dokumentyTowarzyszace) && count($dokumentyTowarzyszace) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5', count($dokumentyTowarzyszace)), __LINE__);
        }
        $this->dokumentyTowarzyszace = $dokumentyTowarzyszace;

        return $this;
    }

    /**
     * Add item to dokumentyTowarzyszace value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
     */
    public function addToDokumentyTowarzyszace(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\DokumentyTowarzyszaceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DokumentyTowarzyszaceType) {
            throw new \InvalidArgumentException(sprintf('The dokumentyTowarzyszace property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DokumentyTowarzyszaceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($this->dokumentyTowarzyszace) && count($this->dokumentyTowarzyszace) >= 5) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5', count($this->dokumentyTowarzyszace)), __LINE__);
        }
        $this->dokumentyTowarzyszace[] = $item;

        return $this;
    }

    /**
     * Get wyjasnienie value.
     *
     * @return string|null
     */
    public function getWyjasnienie()
    {
        return $this->wyjasnienie;
    }

    /**
     * Set wyjasnienie value.
     *
     * @param string $wyjasnienie
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
     */
    public function setWyjasnienie($wyjasnienie = null)
    {
        // validation for constraint: string
        if (!is_null($wyjasnienie) && !is_string($wyjasnienie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wyjasnienie, true), gettype($wyjasnienie)), __LINE__);
        }
        $this->wyjasnienie = $wyjasnienie;

        return $this;
    }

    /**
     * Get oplatyPocztowe value.
     *
     * @return string|null
     */
    public function getOplatyPocztowe()
    {
        return $this->oplatyPocztowe;
    }

    /**
     * Set oplatyPocztowe value.
     *
     * @param string $oplatyPocztowe
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
     */
    public function setOplatyPocztowe($oplatyPocztowe = null)
    {
        // validation for constraint: string
        if (!is_null($oplatyPocztowe) && !is_string($oplatyPocztowe)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oplatyPocztowe, true), gettype($oplatyPocztowe)), __LINE__);
        }
        $this->oplatyPocztowe = $oplatyPocztowe;

        return $this;
    }

    /**
     * Get uwagi value.
     *
     * @return string|null
     */
    public function getUwagi()
    {
        return $this->uwagi;
    }

    /**
     * Set uwagi value.
     *
     * @param string $uwagi
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
     */
    public function setUwagi($uwagi = null)
    {
        // validation for constraint: string
        if (!is_null($uwagi) && !is_string($uwagi)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uwagi, true), gettype($uwagi)), __LINE__);
        }
        $this->uwagi = $uwagi;

        return $this;
    }

    /**
     * Get numerReferencyjnyImportera value.
     *
     * @return string|null
     */
    public function getNumerReferencyjnyImportera()
    {
        return $this->numerReferencyjnyImportera;
    }

    /**
     * Set numerReferencyjnyImportera value.
     *
     * @param string $numerReferencyjnyImportera
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
     */
    public function setNumerReferencyjnyImportera($numerReferencyjnyImportera = null)
    {
        // validation for constraint: string
        if (!is_null($numerReferencyjnyImportera) && !is_string($numerReferencyjnyImportera)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerReferencyjnyImportera, true), gettype($numerReferencyjnyImportera)), __LINE__);
        }
        $this->numerReferencyjnyImportera = $numerReferencyjnyImportera;

        return $this;
    }

    /**
     * Get numerTelefonuImportera value.
     *
     * @return string|null
     */
    public function getNumerTelefonuImportera()
    {
        return $this->numerTelefonuImportera;
    }

    /**
     * Set numerTelefonuImportera value.
     *
     * @param string $numerTelefonuImportera
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
     */
    public function setNumerTelefonuImportera($numerTelefonuImportera = null)
    {
        // validation for constraint: string
        if (!is_null($numerTelefonuImportera) && !is_string($numerTelefonuImportera)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerTelefonuImportera, true), gettype($numerTelefonuImportera)), __LINE__);
        }
        $this->numerTelefonuImportera = $numerTelefonuImportera;

        return $this;
    }

    /**
     * Get numerReferencyjnyCelny value.
     *
     * @return string|null
     */
    public function getNumerReferencyjnyCelny()
    {
        return $this->numerReferencyjnyCelny;
    }

    /**
     * Set numerReferencyjnyCelny value.
     *
     * @param string $numerReferencyjnyCelny
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelna2Type
     */
    public function setNumerReferencyjnyCelny($numerReferencyjnyCelny = null)
    {
        // validation for constraint: string
        if (!is_null($numerReferencyjnyCelny) && !is_string($numerReferencyjnyCelny)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerReferencyjnyCelny, true), gettype($numerReferencyjnyCelny)), __LINE__);
        }
        $this->numerReferencyjnyCelny = $numerReferencyjnyCelny;

        return $this;
    }
}
