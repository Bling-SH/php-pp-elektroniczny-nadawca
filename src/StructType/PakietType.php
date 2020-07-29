<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pakietType StructType.
 */
class PakietType extends AbstractStructBase
{
    /**
     * The kierunek
     * Meta information extracted from the WSDL
     * - documentation: Uwaga w tym miejscu wystarczy jak obiekt kierunke będzie miał ustawioną tylko własność id (nie jest potrzebne przesyłanie pełnego obiektu kierunekType pobranego z metody getKierunki)
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KierunekType
     */
    public $kierunek;
    /**
     * The opakowanie
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OpakowanieType[]
     */
    public $opakowanie;
    /**
     * The czynnoscUpustowa
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var string[]
     */
    public $czynnoscUpustowa;
    /**
     * The pakietGuid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - whiteSpace: collapse.
     *
     * @var string
     */
    public $pakietGuid;
    /**
     * The miejsceOdbioru
     * Meta information extracted from the WSDL
     * - default: URZAD_NADANIA
     * - use: optional.
     *
     * @var string
     */
    public $miejsceOdbioru;
    /**
     * The sposobNadania.
     *
     * @var string
     */
    public $sposobNadania;

    /**
     * Constructor method for pakietType.
     *
     * @uses PakietType::setKierunek()
     * @uses PakietType::setOpakowanie()
     * @uses PakietType::setCzynnoscUpustowa()
     * @uses PakietType::setPakietGuid()
     * @uses PakietType::setMiejsceOdbioru()
     * @uses PakietType::setSposobNadania()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KierunekType     $kierunek
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OpakowanieType[] $opakowanie
     * @param string[]                                                             $czynnoscUpustowa
     * @param string                                                               $pakietGuid
     * @param string                                                               $miejsceOdbioru
     * @param string                                                               $sposobNadania
     */
    public function __construct(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\KierunekType $kierunek = null, array $opakowanie = [], array $czynnoscUpustowa = [], $pakietGuid = null, $miejsceOdbioru = 'URZAD_NADANIA', $sposobNadania = null)
    {
        $this
            ->setKierunek($kierunek)
            ->setOpakowanie($opakowanie)
            ->setCzynnoscUpustowa($czynnoscUpustowa)
            ->setPakietGuid($pakietGuid)
            ->setMiejsceOdbioru($miejsceOdbioru)
            ->setSposobNadania($sposobNadania);
    }

    /**
     * Get kierunek value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KierunekType|null
     */
    public function getKierunek()
    {
        return $this->kierunek;
    }

    /**
     * Set kierunek value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\KierunekType $kierunek
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PakietType
     */
    public function setKierunek(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\KierunekType $kierunek = null)
    {
        $this->kierunek = $kierunek;

        return $this;
    }

    /**
     * Get opakowanie value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OpakowanieType[]|null
     */
    public function getOpakowanie()
    {
        return $this->opakowanie;
    }

    /**
     * This method is responsible for validating the values passed to the setOpakowanie method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOpakowanie method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOpakowanieForArrayConstraintsFromSetOpakowanie(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pakietTypeOpakowanieItem) {
            // validation for constraint: itemType
            if (!$pakietTypeOpakowanieItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OpakowanieType) {
                $invalidValues[] = is_object($pakietTypeOpakowanieItem) ? get_class($pakietTypeOpakowanieItem) : sprintf('%s(%s)', gettype($pakietTypeOpakowanieItem), var_export($pakietTypeOpakowanieItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The opakowanie property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OpakowanieType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set opakowanie value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OpakowanieType[] $opakowanie
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PakietType
     */
    public function setOpakowanie(array $opakowanie = [])
    {
        // validation for constraint: array
        if ('' !== ($opakowanieArrayErrorMessage = self::validateOpakowanieForArrayConstraintsFromSetOpakowanie($opakowanie))) {
            throw new \InvalidArgumentException($opakowanieArrayErrorMessage, __LINE__);
        }
        $this->opakowanie = $opakowanie;

        return $this;
    }

    /**
     * Add item to opakowanie value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PakietType
     */
    public function addToOpakowanie(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\OpakowanieType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OpakowanieType) {
            throw new \InvalidArgumentException(sprintf('The opakowanie property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\OpakowanieType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->opakowanie[] = $item;

        return $this;
    }

    /**
     * Get czynnoscUpustowa value.
     *
     * @return string[]|null
     */
    public function getCzynnoscUpustowa()
    {
        return $this->czynnoscUpustowa;
    }

    /**
     * This method is responsible for validating the values passed to the setCzynnoscUpustowa method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCzynnoscUpustowa method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCzynnoscUpustowaForArrayConstraintsFromSetCzynnoscUpustowa(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pakietTypeCzynnoscUpustowaItem) {
            // validation for constraint: enumeration
            if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\CzynnoscUpustowaType::valueIsValid($pakietTypeCzynnoscUpustowaItem)) {
                $invalidValues[] = is_object($pakietTypeCzynnoscUpustowaItem) ? get_class($pakietTypeCzynnoscUpustowaItem) : sprintf('%s(%s)', gettype($pakietTypeCzynnoscUpustowaItem), var_export($pakietTypeCzynnoscUpustowaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\CzynnoscUpustowaType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\CzynnoscUpustowaType::getValidValues()));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set czynnoscUpustowa value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\CzynnoscUpustowaType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\CzynnoscUpustowaType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string[] $czynnoscUpustowa
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PakietType
     */
    public function setCzynnoscUpustowa(array $czynnoscUpustowa = [])
    {
        // validation for constraint: array
        if ('' !== ($czynnoscUpustowaArrayErrorMessage = self::validateCzynnoscUpustowaForArrayConstraintsFromSetCzynnoscUpustowa($czynnoscUpustowa))) {
            throw new \InvalidArgumentException($czynnoscUpustowaArrayErrorMessage, __LINE__);
        }
        $this->czynnoscUpustowa = $czynnoscUpustowa;

        return $this;
    }

    /**
     * Add item to czynnoscUpustowa value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\CzynnoscUpustowaType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\CzynnoscUpustowaType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $item
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PakietType
     */
    public function addToCzynnoscUpustowa($item)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\CzynnoscUpustowaType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\CzynnoscUpustowaType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\CzynnoscUpustowaType::getValidValues())), __LINE__);
        }
        $this->czynnoscUpustowa[] = $item;

        return $this;
    }

    /**
     * Get pakietGuid value.
     *
     * @return string|null
     */
    public function getPakietGuid()
    {
        return $this->pakietGuid;
    }

    /**
     * Set pakietGuid value.
     *
     * @param string $pakietGuid
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PakietType
     */
    public function setPakietGuid($pakietGuid = null)
    {
        // validation for constraint: string
        if (!is_null($pakietGuid) && !is_string($pakietGuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pakietGuid, true), gettype($pakietGuid)), __LINE__);
        }
        // validation for constraint: length(32)
        if (!is_null($pakietGuid) && 32 !== mb_strlen($pakietGuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 32', mb_strlen($pakietGuid)), __LINE__);
        }
        $this->pakietGuid = $pakietGuid;

        return $this;
    }

    /**
     * Get miejsceOdbioru value.
     *
     * @return string|null
     */
    public function getMiejsceOdbioru()
    {
        return $this->miejsceOdbioru;
    }

    /**
     * Set miejsceOdbioru value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\MiejsceOdbioruType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\MiejsceOdbioruType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $miejsceOdbioru
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PakietType
     */
    public function setMiejsceOdbioru($miejsceOdbioru = 'URZAD_NADANIA')
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\MiejsceOdbioruType::valueIsValid($miejsceOdbioru)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\MiejsceOdbioruType', is_array($miejsceOdbioru) ? implode(', ', $miejsceOdbioru) : var_export($miejsceOdbioru, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\MiejsceOdbioruType::getValidValues())), __LINE__);
        }
        $this->miejsceOdbioru = $miejsceOdbioru;

        return $this;
    }

    /**
     * Get sposobNadania value.
     *
     * @return string|null
     */
    public function getSposobNadania()
    {
        return $this->sposobNadania;
    }

    /**
     * Set sposobNadania value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\SposobNadaniaType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\SposobNadaniaType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $sposobNadania
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PakietType
     */
    public function setSposobNadania($sposobNadania = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\SposobNadaniaType::valueIsValid($sposobNadania)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\SposobNadaniaType', is_array($sposobNadania) ? implode(', ', $sposobNadania) : var_export($sposobNadania, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\SposobNadaniaType::getValidValues())), __LINE__);
        }
        $this->sposobNadania = $sposobNadania;

        return $this;
    }
}
