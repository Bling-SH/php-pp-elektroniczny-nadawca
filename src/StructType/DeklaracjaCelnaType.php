<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deklaracjaCelnaType StructType.
 */
class DeklaracjaCelnaType extends AbstractStructBase
{
    /**
     * The szczegoly
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 1.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SzczegolyDeklaracjiCelnejType[]
     */
    public $szczegoly;
    /**
     * The podarunek.
     *
     * @var bool
     */
    public $podarunek;
    /**
     * The dokument.
     *
     * @var bool
     */
    public $dokument;
    /**
     * The probkaHandlowa.
     *
     * @var bool
     */
    public $probkaHandlowa;
    /**
     * The zwrotTowaru.
     *
     * @var bool
     */
    public $zwrotTowaru;
    /**
     * The towary.
     *
     * @var bool
     */
    public $towary;
    /**
     * The inny.
     *
     * @var bool
     */
    public $inny;
    /**
     * The wyjasnienie.
     *
     * @var string
     */
    public $wyjasnienie;
    /**
     * The oplatyPocztowe.
     *
     * @var string
     */
    public $oplatyPocztowe;
    /**
     * The uwagi.
     *
     * @var string
     */
    public $uwagi;
    /**
     * The licencja.
     *
     * @var string
     */
    public $licencja;
    /**
     * The swiadectwo.
     *
     * @var string
     */
    public $swiadectwo;
    /**
     * The faktura.
     *
     * @var string
     */
    public $faktura;
    /**
     * The numerReferencyjnyImportera.
     *
     * @var string
     */
    public $numerReferencyjnyImportera;
    /**
     * The numerTelefonuImportera.
     *
     * @var string
     */
    public $numerTelefonuImportera;
    /**
     * The waluta.
     *
     * @var string
     */
    public $waluta;

    /**
     * Constructor method for deklaracjaCelnaType.
     *
     * @uses DeklaracjaCelnaType::setSzczegoly()
     * @uses DeklaracjaCelnaType::setPodarunek()
     * @uses DeklaracjaCelnaType::setDokument()
     * @uses DeklaracjaCelnaType::setProbkaHandlowa()
     * @uses DeklaracjaCelnaType::setZwrotTowaru()
     * @uses DeklaracjaCelnaType::setTowary()
     * @uses DeklaracjaCelnaType::setInny()
     * @uses DeklaracjaCelnaType::setWyjasnienie()
     * @uses DeklaracjaCelnaType::setOplatyPocztowe()
     * @uses DeklaracjaCelnaType::setUwagi()
     * @uses DeklaracjaCelnaType::setLicencja()
     * @uses DeklaracjaCelnaType::setSwiadectwo()
     * @uses DeklaracjaCelnaType::setFaktura()
     * @uses DeklaracjaCelnaType::setNumerReferencyjnyImportera()
     * @uses DeklaracjaCelnaType::setNumerTelefonuImportera()
     * @uses DeklaracjaCelnaType::setWaluta()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SzczegolyDeklaracjiCelnejType[] $szczegoly
     * @param bool                                                                                $podarunek
     * @param bool                                                                                $dokument
     * @param bool                                                                                $probkaHandlowa
     * @param bool                                                                                $zwrotTowaru
     * @param bool                                                                                $towary
     * @param bool                                                                                $inny
     * @param string                                                                              $wyjasnienie
     * @param string                                                                              $oplatyPocztowe
     * @param string                                                                              $uwagi
     * @param string                                                                              $licencja
     * @param string                                                                              $swiadectwo
     * @param string                                                                              $faktura
     * @param string                                                                              $numerReferencyjnyImportera
     * @param string                                                                              $numerTelefonuImportera
     * @param string                                                                              $waluta
     */
    public function __construct(array $szczegoly = [], $podarunek = null, $dokument = null, $probkaHandlowa = null, $zwrotTowaru = null, $towary = null, $inny = null, $wyjasnienie = null, $oplatyPocztowe = null, $uwagi = null, $licencja = null, $swiadectwo = null, $faktura = null, $numerReferencyjnyImportera = null, $numerTelefonuImportera = null, $waluta = null)
    {
        $this
            ->setSzczegoly($szczegoly)
            ->setPodarunek($podarunek)
            ->setDokument($dokument)
            ->setProbkaHandlowa($probkaHandlowa)
            ->setZwrotTowaru($zwrotTowaru)
            ->setTowary($towary)
            ->setInny($inny)
            ->setWyjasnienie($wyjasnienie)
            ->setOplatyPocztowe($oplatyPocztowe)
            ->setUwagi($uwagi)
            ->setLicencja($licencja)
            ->setSwiadectwo($swiadectwo)
            ->setFaktura($faktura)
            ->setNumerReferencyjnyImportera($numerReferencyjnyImportera)
            ->setNumerTelefonuImportera($numerTelefonuImportera)
            ->setWaluta($waluta);
    }

    /**
     * Get szczegoly value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SzczegolyDeklaracjiCelnejType[]
     */
    public function getSzczegoly()
    {
        return $this->szczegoly;
    }

    /**
     * This method is responsible for validating the values passed to the setSzczegoly method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSzczegoly method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSzczegolyForArrayConstraintsFromSetSzczegoly(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $deklaracjaCelnaTypeSzczegolyItem) {
            // validation for constraint: itemType
            if (!$deklaracjaCelnaTypeSzczegolyItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SzczegolyDeklaracjiCelnejType) {
                $invalidValues[] = is_object($deklaracjaCelnaTypeSzczegolyItem) ? get_class($deklaracjaCelnaTypeSzczegolyItem) : sprintf('%s(%s)', gettype($deklaracjaCelnaTypeSzczegolyItem), var_export($deklaracjaCelnaTypeSzczegolyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The szczegoly property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SzczegolyDeklaracjiCelnejType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set szczegoly value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SzczegolyDeklaracjiCelnejType[] $szczegoly
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
     */
    public function setSzczegoly(array $szczegoly = [])
    {
        // validation for constraint: array
        if ('' !== ($szczegolyArrayErrorMessage = self::validateSzczegolyForArrayConstraintsFromSetSzczegoly($szczegoly))) {
            throw new \InvalidArgumentException($szczegolyArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($szczegoly) && count($szczegoly) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5', count($szczegoly)), __LINE__);
        }
        $this->szczegoly = $szczegoly;

        return $this;
    }

    /**
     * Add item to szczegoly value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
     */
    public function addToSzczegoly(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\SzczegolyDeklaracjiCelnejType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SzczegolyDeklaracjiCelnejType) {
            throw new \InvalidArgumentException(sprintf('The szczegoly property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SzczegolyDeklaracjiCelnejType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($this->szczegoly) && count($this->szczegoly) >= 5) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5', count($this->szczegoly)), __LINE__);
        }
        $this->szczegoly[] = $item;

        return $this;
    }

    /**
     * Get podarunek value.
     *
     * @return bool|null
     */
    public function getPodarunek()
    {
        return $this->podarunek;
    }

    /**
     * Set podarunek value.
     *
     * @param bool $podarunek
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
     */
    public function setPodarunek($podarunek = null)
    {
        // validation for constraint: boolean
        if (!is_null($podarunek) && !is_bool($podarunek)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($podarunek, true), gettype($podarunek)), __LINE__);
        }
        $this->podarunek = $podarunek;

        return $this;
    }

    /**
     * Get dokument value.
     *
     * @return bool|null
     */
    public function getDokument()
    {
        return $this->dokument;
    }

    /**
     * Set dokument value.
     *
     * @param bool $dokument
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
     */
    public function setDokument($dokument = null)
    {
        // validation for constraint: boolean
        if (!is_null($dokument) && !is_bool($dokument)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dokument, true), gettype($dokument)), __LINE__);
        }
        $this->dokument = $dokument;

        return $this;
    }

    /**
     * Get probkaHandlowa value.
     *
     * @return bool|null
     */
    public function getProbkaHandlowa()
    {
        return $this->probkaHandlowa;
    }

    /**
     * Set probkaHandlowa value.
     *
     * @param bool $probkaHandlowa
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
     */
    public function setProbkaHandlowa($probkaHandlowa = null)
    {
        // validation for constraint: boolean
        if (!is_null($probkaHandlowa) && !is_bool($probkaHandlowa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($probkaHandlowa, true), gettype($probkaHandlowa)), __LINE__);
        }
        $this->probkaHandlowa = $probkaHandlowa;

        return $this;
    }

    /**
     * Get zwrotTowaru value.
     *
     * @return bool|null
     */
    public function getZwrotTowaru()
    {
        return $this->zwrotTowaru;
    }

    /**
     * Set zwrotTowaru value.
     *
     * @param bool $zwrotTowaru
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
     */
    public function setZwrotTowaru($zwrotTowaru = null)
    {
        // validation for constraint: boolean
        if (!is_null($zwrotTowaru) && !is_bool($zwrotTowaru)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($zwrotTowaru, true), gettype($zwrotTowaru)), __LINE__);
        }
        $this->zwrotTowaru = $zwrotTowaru;

        return $this;
    }

    /**
     * Get towary value.
     *
     * @return bool|null
     */
    public function getTowary()
    {
        return $this->towary;
    }

    /**
     * Set towary value.
     *
     * @param bool $towary
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
     */
    public function setTowary($towary = null)
    {
        // validation for constraint: boolean
        if (!is_null($towary) && !is_bool($towary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($towary, true), gettype($towary)), __LINE__);
        }
        $this->towary = $towary;

        return $this;
    }

    /**
     * Get inny value.
     *
     * @return bool|null
     */
    public function getInny()
    {
        return $this->inny;
    }

    /**
     * Set inny value.
     *
     * @param bool $inny
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
     */
    public function setInny($inny = null)
    {
        // validation for constraint: boolean
        if (!is_null($inny) && !is_bool($inny)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inny, true), gettype($inny)), __LINE__);
        }
        $this->inny = $inny;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
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
     * Get licencja value.
     *
     * @return string|null
     */
    public function getLicencja()
    {
        return $this->licencja;
    }

    /**
     * Set licencja value.
     *
     * @param string $licencja
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
     */
    public function setLicencja($licencja = null)
    {
        // validation for constraint: string
        if (!is_null($licencja) && !is_string($licencja)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($licencja, true), gettype($licencja)), __LINE__);
        }
        $this->licencja = $licencja;

        return $this;
    }

    /**
     * Get swiadectwo value.
     *
     * @return string|null
     */
    public function getSwiadectwo()
    {
        return $this->swiadectwo;
    }

    /**
     * Set swiadectwo value.
     *
     * @param string $swiadectwo
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
     */
    public function setSwiadectwo($swiadectwo = null)
    {
        // validation for constraint: string
        if (!is_null($swiadectwo) && !is_string($swiadectwo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($swiadectwo, true), gettype($swiadectwo)), __LINE__);
        }
        $this->swiadectwo = $swiadectwo;

        return $this;
    }

    /**
     * Get faktura value.
     *
     * @return string|null
     */
    public function getFaktura()
    {
        return $this->faktura;
    }

    /**
     * Set faktura value.
     *
     * @param string $faktura
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
     */
    public function setFaktura($faktura = null)
    {
        // validation for constraint: string
        if (!is_null($faktura) && !is_string($faktura)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($faktura, true), gettype($faktura)), __LINE__);
        }
        $this->faktura = $faktura;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
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
     * Get waluta value.
     *
     * @return string|null
     */
    public function getWaluta()
    {
        return $this->waluta;
    }

    /**
     * Set waluta value.
     *
     * @param string $waluta
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DeklaracjaCelnaType
     */
    public function setWaluta($waluta = null)
    {
        // validation for constraint: string
        if (!is_null($waluta) && !is_string($waluta)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($waluta, true), gettype($waluta)), __LINE__);
        }
        $this->waluta = $waluta;

        return $this;
    }
}
