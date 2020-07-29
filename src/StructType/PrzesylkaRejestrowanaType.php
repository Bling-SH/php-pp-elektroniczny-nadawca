<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

/**
 * This class stands for przesylkaRejestrowanaType StructType.
 */
abstract class PrzesylkaRejestrowanaType extends PrzesylkaType
{
    /**
     * The adres.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType
     */
    public $adres;
    /**
     * The nadawca
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType
     */
    public $nadawca;
    /**
     * The relatedToAllegro
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\RelatedToAllegroType
     */
    public $relatedToAllegro;
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
     * The sygnatura
     * Meta information extracted from the WSDL
     * - documentation: sygnatura np. sprawy/pisma nadanego przesyłką
     * - base: xsd:string
     * - maxLength: 255
     * - minLength: 0
     * - whiteSpace: collapse.
     *
     * @var string
     */
    public $sygnatura;
    /**
     * The terminSprawy
     * Meta information extracted from the WSDL
     * - documentation: termin np. rozprawy sądowej lub termin graniczny pisma nadanego przesyłką
     * - base: xsd:string.
     *
     * @var string
     */
    public $terminSprawy;
    /**
     * The rodzaj
     * Meta information extracted from the WSDL
     * - documentation: rodzaj przesyłki klienta np. postepowanie karne, cywilne, reklamacja, odwołanie, wezwanie do zapłaty itp.
     * - base: xsd:string
     * - maxLength: 255
     * - minLength: 0
     * - whiteSpace: collapse.
     *
     * @var string
     */
    public $rodzaj;

    /**
     * Constructor method for przesylkaRejestrowanaType.
     *
     * @uses PrzesylkaRejestrowanaType::setAdres()
     * @uses PrzesylkaRejestrowanaType::setNadawca()
     * @uses PrzesylkaRejestrowanaType::setRelatedToAllegro()
     * @uses PrzesylkaRejestrowanaType::setNumerNadania()
     * @uses PrzesylkaRejestrowanaType::setSygnatura()
     * @uses PrzesylkaRejestrowanaType::setTerminSprawy()
     * @uses PrzesylkaRejestrowanaType::setRodzaj()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType            $adres
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType            $nadawca
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\RelatedToAllegroType $relatedToAllegro
     * @param string                                                                   $numerNadania
     * @param string                                                                   $sygnatura
     * @param string                                                                   $terminSprawy
     * @param string                                                                   $rodzaj
     */
    public function __construct(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $adres = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $nadawca = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\RelatedToAllegroType $relatedToAllegro = null, $numerNadania = null, $sygnatura = null, $terminSprawy = null, $rodzaj = null)
    {
        $this
            ->setAdres($adres)
            ->setNadawca($nadawca)
            ->setRelatedToAllegro($relatedToAllegro)
            ->setNumerNadania($numerNadania)
            ->setSygnatura($sygnatura)
            ->setTerminSprawy($terminSprawy)
            ->setRodzaj($rodzaj);
    }

    /**
     * Get adres value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType|null
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * Set adres value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $adres
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaRejestrowanaType
     */
    public function setAdres(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $adres = null)
    {
        $this->adres = $adres;

        return $this;
    }

    /**
     * Get nadawca value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType|null
     */
    public function getNadawca()
    {
        return $this->nadawca;
    }

    /**
     * Set nadawca value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $nadawca
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaRejestrowanaType
     */
    public function setNadawca(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $nadawca = null)
    {
        $this->nadawca = $nadawca;

        return $this;
    }

    /**
     * Get relatedToAllegro value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\RelatedToAllegroType|null
     */
    public function getRelatedToAllegro()
    {
        return $this->relatedToAllegro;
    }

    /**
     * Set relatedToAllegro value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\RelatedToAllegroType $relatedToAllegro
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaRejestrowanaType
     */
    public function setRelatedToAllegro(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\RelatedToAllegroType $relatedToAllegro = null)
    {
        $this->relatedToAllegro = $relatedToAllegro;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaRejestrowanaType
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
     * Get sygnatura value.
     *
     * @return string|null
     */
    public function getSygnatura()
    {
        return $this->sygnatura;
    }

    /**
     * Set sygnatura value.
     *
     * @param string $sygnatura
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaRejestrowanaType
     */
    public function setSygnatura($sygnatura = null)
    {
        // validation for constraint: string
        if (!is_null($sygnatura) && !is_string($sygnatura)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sygnatura, true), gettype($sygnatura)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($sygnatura) && mb_strlen($sygnatura) > 255) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen($sygnatura)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($sygnatura) && mb_strlen($sygnatura) < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen($sygnatura)), __LINE__);
        }
        $this->sygnatura = $sygnatura;

        return $this;
    }

    /**
     * Get terminSprawy value.
     *
     * @return string|null
     */
    public function getTerminSprawy()
    {
        return $this->terminSprawy;
    }

    /**
     * Set terminSprawy value.
     *
     * @param string $terminSprawy
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaRejestrowanaType
     */
    public function setTerminSprawy($terminSprawy = null)
    {
        // validation for constraint: string
        if (!is_null($terminSprawy) && !is_string($terminSprawy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($terminSprawy, true), gettype($terminSprawy)), __LINE__);
        }
        $this->terminSprawy = $terminSprawy;

        return $this;
    }

    /**
     * Get rodzaj value.
     *
     * @return string|null
     */
    public function getRodzaj()
    {
        return $this->rodzaj;
    }

    /**
     * Set rodzaj value.
     *
     * @param string $rodzaj
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaRejestrowanaType
     */
    public function setRodzaj($rodzaj = null)
    {
        // validation for constraint: string
        if (!is_null($rodzaj) && !is_string($rodzaj)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rodzaj, true), gettype($rodzaj)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($rodzaj) && mb_strlen($rodzaj) > 255) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen($rodzaj)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($rodzaj) && mb_strlen($rodzaj) < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen($rodzaj)), __LINE__);
        }
        $this->rodzaj = $rodzaj;

        return $this;
    }
}
