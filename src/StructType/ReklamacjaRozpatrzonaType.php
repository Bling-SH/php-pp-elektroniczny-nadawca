<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for reklamacjaRozpatrzonaType StructType.
 */
class ReklamacjaRozpatrzonaType extends AbstractStructBase
{
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - whiteSpace: collapse.
     *
     * @var string
     */
    public $guid;
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
     * The rozstrzygniecie.
     *
     * @var string
     */
    public $rozstrzygniecie;
    /**
     * The przyznaneOdszkodowanie.
     *
     * @var int
     */
    public $przyznaneOdszkodowanie;
    /**
     * The uzasadnienie.
     *
     * @var string
     */
    public $uzasadnienie;
    /**
     * The dataRozpatrzenia.
     *
     * @var string
     */
    public $dataRozpatrzenia;
    /**
     * The nazwaJednostkiRozpatrujacej.
     *
     * @var string
     */
    public $nazwaJednostkiRozpatrujacej;
    /**
     * The osobaRozpatrujaca.
     *
     * @var string
     */
    public $osobaRozpatrujaca;
    /**
     * The idReklamacja.
     *
     * @var string
     */
    public $idReklamacja;

    /**
     * Constructor method for reklamacjaRozpatrzonaType.
     *
     * @uses ReklamacjaRozpatrzonaType::setGuid()
     * @uses ReklamacjaRozpatrzonaType::setNumerNadania()
     * @uses ReklamacjaRozpatrzonaType::setRozstrzygniecie()
     * @uses ReklamacjaRozpatrzonaType::setPrzyznaneOdszkodowanie()
     * @uses ReklamacjaRozpatrzonaType::setUzasadnienie()
     * @uses ReklamacjaRozpatrzonaType::setDataRozpatrzenia()
     * @uses ReklamacjaRozpatrzonaType::setNazwaJednostkiRozpatrujacej()
     * @uses ReklamacjaRozpatrzonaType::setOsobaRozpatrujaca()
     * @uses ReklamacjaRozpatrzonaType::setIdReklamacja()
     *
     * @param string $guid
     * @param string $numerNadania
     * @param string $rozstrzygniecie
     * @param int    $przyznaneOdszkodowanie
     * @param string $uzasadnienie
     * @param string $dataRozpatrzenia
     * @param string $nazwaJednostkiRozpatrujacej
     * @param string $osobaRozpatrujaca
     * @param string $idReklamacja
     */
    public function __construct($guid = null, $numerNadania = null, $rozstrzygniecie = null, $przyznaneOdszkodowanie = null, $uzasadnienie = null, $dataRozpatrzenia = null, $nazwaJednostkiRozpatrujacej = null, $osobaRozpatrujaca = null, $idReklamacja = null)
    {
        $this
            ->setGuid($guid)
            ->setNumerNadania($numerNadania)
            ->setRozstrzygniecie($rozstrzygniecie)
            ->setPrzyznaneOdszkodowanie($przyznaneOdszkodowanie)
            ->setUzasadnienie($uzasadnienie)
            ->setDataRozpatrzenia($dataRozpatrzenia)
            ->setNazwaJednostkiRozpatrujacej($nazwaJednostkiRozpatrujacej)
            ->setOsobaRozpatrujaca($osobaRozpatrujaca)
            ->setIdReklamacja($idReklamacja);
    }

    /**
     * Get guid value.
     *
     * @return string|null
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Set guid value.
     *
     * @param string $guid
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType
     */
    public function setGuid($guid = null)
    {
        // validation for constraint: string
        if (!is_null($guid) && !is_string($guid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guid, true), gettype($guid)), __LINE__);
        }
        // validation for constraint: length(32)
        if (!is_null($guid) && 32 !== mb_strlen($guid)) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 32', mb_strlen($guid)), __LINE__);
        }
        $this->guid = $guid;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType
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
     * Get rozstrzygniecie value.
     *
     * @return string|null
     */
    public function getRozstrzygniecie()
    {
        return $this->rozstrzygniecie;
    }

    /**
     * Set rozstrzygniecie value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\RozstrzygniecieType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\RozstrzygniecieType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $rozstrzygniecie
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType
     */
    public function setRozstrzygniecie($rozstrzygniecie = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\RozstrzygniecieType::valueIsValid($rozstrzygniecie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\RozstrzygniecieType', is_array($rozstrzygniecie) ? implode(', ', $rozstrzygniecie) : var_export($rozstrzygniecie, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\RozstrzygniecieType::getValidValues())), __LINE__);
        }
        $this->rozstrzygniecie = $rozstrzygniecie;

        return $this;
    }

    /**
     * Get przyznaneOdszkodowanie value.
     *
     * @return int|null
     */
    public function getPrzyznaneOdszkodowanie()
    {
        return $this->przyznaneOdszkodowanie;
    }

    /**
     * Set przyznaneOdszkodowanie value.
     *
     * @param int $przyznaneOdszkodowanie
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType
     */
    public function setPrzyznaneOdszkodowanie($przyznaneOdszkodowanie = null)
    {
        // validation for constraint: int
        if (!is_null($przyznaneOdszkodowanie) && !(is_int($przyznaneOdszkodowanie) || ctype_digit($przyznaneOdszkodowanie))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($przyznaneOdszkodowanie, true), gettype($przyznaneOdszkodowanie)), __LINE__);
        }
        $this->przyznaneOdszkodowanie = $przyznaneOdszkodowanie;

        return $this;
    }

    /**
     * Get uzasadnienie value.
     *
     * @return string|null
     */
    public function getUzasadnienie()
    {
        return $this->uzasadnienie;
    }

    /**
     * Set uzasadnienie value.
     *
     * @param string $uzasadnienie
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType
     */
    public function setUzasadnienie($uzasadnienie = null)
    {
        // validation for constraint: string
        if (!is_null($uzasadnienie) && !is_string($uzasadnienie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uzasadnienie, true), gettype($uzasadnienie)), __LINE__);
        }
        $this->uzasadnienie = $uzasadnienie;

        return $this;
    }

    /**
     * Get dataRozpatrzenia value.
     *
     * @return string|null
     */
    public function getDataRozpatrzenia()
    {
        return $this->dataRozpatrzenia;
    }

    /**
     * Set dataRozpatrzenia value.
     *
     * @param string $dataRozpatrzenia
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType
     */
    public function setDataRozpatrzenia($dataRozpatrzenia = null)
    {
        // validation for constraint: string
        if (!is_null($dataRozpatrzenia) && !is_string($dataRozpatrzenia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataRozpatrzenia, true), gettype($dataRozpatrzenia)), __LINE__);
        }
        $this->dataRozpatrzenia = $dataRozpatrzenia;

        return $this;
    }

    /**
     * Get nazwaJednostkiRozpatrujacej value.
     *
     * @return string|null
     */
    public function getNazwaJednostkiRozpatrujacej()
    {
        return $this->nazwaJednostkiRozpatrujacej;
    }

    /**
     * Set nazwaJednostkiRozpatrujacej value.
     *
     * @param string $nazwaJednostkiRozpatrujacej
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType
     */
    public function setNazwaJednostkiRozpatrujacej($nazwaJednostkiRozpatrujacej = null)
    {
        // validation for constraint: string
        if (!is_null($nazwaJednostkiRozpatrujacej) && !is_string($nazwaJednostkiRozpatrujacej)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nazwaJednostkiRozpatrujacej, true), gettype($nazwaJednostkiRozpatrujacej)), __LINE__);
        }
        $this->nazwaJednostkiRozpatrujacej = $nazwaJednostkiRozpatrujacej;

        return $this;
    }

    /**
     * Get osobaRozpatrujaca value.
     *
     * @return string|null
     */
    public function getOsobaRozpatrujaca()
    {
        return $this->osobaRozpatrujaca;
    }

    /**
     * Set osobaRozpatrujaca value.
     *
     * @param string $osobaRozpatrujaca
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType
     */
    public function setOsobaRozpatrujaca($osobaRozpatrujaca = null)
    {
        // validation for constraint: string
        if (!is_null($osobaRozpatrujaca) && !is_string($osobaRozpatrujaca)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($osobaRozpatrujaca, true), gettype($osobaRozpatrujaca)), __LINE__);
        }
        $this->osobaRozpatrujaca = $osobaRozpatrujaca;

        return $this;
    }

    /**
     * Get idReklamacja value.
     *
     * @return string|null
     */
    public function getIdReklamacja()
    {
        return $this->idReklamacja;
    }

    /**
     * Set idReklamacja value.
     *
     * @param string $idReklamacja
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamacjaRozpatrzonaType
     */
    public function setIdReklamacja($idReklamacja = null)
    {
        // validation for constraint: string
        if (!is_null($idReklamacja) && !is_string($idReklamacja)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idReklamacja, true), gettype($idReklamacja)), __LINE__);
        }
        $this->idReklamacja = $idReklamacja;

        return $this;
    }
}
