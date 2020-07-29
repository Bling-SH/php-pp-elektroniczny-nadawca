<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

/**
 * This class stands for listZwyklyFirmowyType StructType.
 */
class ListZwyklyFirmowyType extends PrzesylkaNieRejestrowanaType
{
    /**
     * The adres
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType
     */
    public $adres;
    /**
     * The posteRestante.
     *
     * @var bool
     */
    public $posteRestante;
    /**
     * The miejscowa
     * Meta information extracted from the WSDL
     * - default: false.
     *
     * @var bool
     */
    public $miejscowa;
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
     * The egzemplarzBiblioteczny
     * Meta information extracted from the WSDL
     * - default: false.
     *
     * @var bool
     */
    public $egzemplarzBiblioteczny;
    /**
     * The dlaOciemnialych
     * Meta information extracted from the WSDL
     * - default: false.
     *
     * @var bool
     */
    public $dlaOciemnialych;
    /**
     * The obszarMiasto.
     *
     * @var bool
     */
    public $obszarMiasto;
    /**
     * The kategoria.
     *
     * @var string
     */
    public $kategoria;
    /**
     * The gabaryt.
     *
     * @var string
     */
    public $gabaryt;

    /**
     * Constructor method for listZwyklyFirmowyType.
     *
     * @uses ListZwyklyFirmowyType::setAdres()
     * @uses ListZwyklyFirmowyType::setPosteRestante()
     * @uses ListZwyklyFirmowyType::setMiejscowa()
     * @uses ListZwyklyFirmowyType::setMasa()
     * @uses ListZwyklyFirmowyType::setEgzemplarzBiblioteczny()
     * @uses ListZwyklyFirmowyType::setDlaOciemnialych()
     * @uses ListZwyklyFirmowyType::setObszarMiasto()
     * @uses ListZwyklyFirmowyType::setKategoria()
     * @uses ListZwyklyFirmowyType::setGabaryt()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $adres
     * @param bool                                                          $posteRestante
     * @param bool                                                          $miejscowa
     * @param int                                                           $masa
     * @param bool                                                          $egzemplarzBiblioteczny
     * @param bool                                                          $dlaOciemnialych
     * @param bool                                                          $obszarMiasto
     * @param string                                                        $kategoria
     * @param string                                                        $gabaryt
     */
    public function __construct(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $adres = null, $posteRestante = null, $miejscowa = false, $masa = null, $egzemplarzBiblioteczny = false, $dlaOciemnialych = false, $obszarMiasto = null, $kategoria = null, $gabaryt = null)
    {
        $this
            ->setAdres($adres)
            ->setPosteRestante($posteRestante)
            ->setMiejscowa($miejscowa)
            ->setMasa($masa)
            ->setEgzemplarzBiblioteczny($egzemplarzBiblioteczny)
            ->setDlaOciemnialych($dlaOciemnialych)
            ->setObszarMiasto($obszarMiasto)
            ->setKategoria($kategoria)
            ->setGabaryt($gabaryt);
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ListZwyklyFirmowyType
     */
    public function setAdres(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $adres = null)
    {
        $this->adres = $adres;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ListZwyklyFirmowyType
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
     * Get miejscowa value.
     *
     * @return bool|null
     */
    public function getMiejscowa()
    {
        return $this->miejscowa;
    }

    /**
     * Set miejscowa value.
     *
     * @param bool $miejscowa
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ListZwyklyFirmowyType
     */
    public function setMiejscowa($miejscowa = false)
    {
        // validation for constraint: boolean
        if (!is_null($miejscowa) && !is_bool($miejscowa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($miejscowa, true), gettype($miejscowa)), __LINE__);
        }
        $this->miejscowa = $miejscowa;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ListZwyklyFirmowyType
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
     * Get egzemplarzBiblioteczny value.
     *
     * @return bool|null
     */
    public function getEgzemplarzBiblioteczny()
    {
        return $this->egzemplarzBiblioteczny;
    }

    /**
     * Set egzemplarzBiblioteczny value.
     *
     * @param bool $egzemplarzBiblioteczny
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ListZwyklyFirmowyType
     */
    public function setEgzemplarzBiblioteczny($egzemplarzBiblioteczny = false)
    {
        // validation for constraint: boolean
        if (!is_null($egzemplarzBiblioteczny) && !is_bool($egzemplarzBiblioteczny)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($egzemplarzBiblioteczny, true), gettype($egzemplarzBiblioteczny)), __LINE__);
        }
        $this->egzemplarzBiblioteczny = $egzemplarzBiblioteczny;

        return $this;
    }

    /**
     * Get dlaOciemnialych value.
     *
     * @return bool|null
     */
    public function getDlaOciemnialych()
    {
        return $this->dlaOciemnialych;
    }

    /**
     * Set dlaOciemnialych value.
     *
     * @param bool $dlaOciemnialych
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ListZwyklyFirmowyType
     */
    public function setDlaOciemnialych($dlaOciemnialych = false)
    {
        // validation for constraint: boolean
        if (!is_null($dlaOciemnialych) && !is_bool($dlaOciemnialych)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dlaOciemnialych, true), gettype($dlaOciemnialych)), __LINE__);
        }
        $this->dlaOciemnialych = $dlaOciemnialych;

        return $this;
    }

    /**
     * Get obszarMiasto value.
     *
     * @return bool|null
     */
    public function getObszarMiasto()
    {
        return $this->obszarMiasto;
    }

    /**
     * Set obszarMiasto value.
     *
     * @param bool $obszarMiasto
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ListZwyklyFirmowyType
     */
    public function setObszarMiasto($obszarMiasto = null)
    {
        // validation for constraint: boolean
        if (!is_null($obszarMiasto) && !is_bool($obszarMiasto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($obszarMiasto, true), gettype($obszarMiasto)), __LINE__);
        }
        $this->obszarMiasto = $obszarMiasto;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ListZwyklyFirmowyType
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ListZwyklyFirmowyType
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
