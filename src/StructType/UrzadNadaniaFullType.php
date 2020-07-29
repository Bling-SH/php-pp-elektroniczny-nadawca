<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for urzadNadaniaFullType StructType.
 */
class UrzadNadaniaFullType extends AbstractStructBase
{
    /**
     * The urzadNadania
     * Meta information extracted from the WSDL
     * - base: xsd:int.
     *
     * @var int
     */
    public $urzadNadania;
    /**
     * The opis.
     *
     * @var string
     */
    public $opis;
    /**
     * The nazwaWydruk.
     *
     * @var string
     */
    public $nazwaWydruk;

    /**
     * Constructor method for urzadNadaniaFullType.
     *
     * @uses UrzadNadaniaFullType::setUrzadNadania()
     * @uses UrzadNadaniaFullType::setOpis()
     * @uses UrzadNadaniaFullType::setNazwaWydruk()
     *
     * @param int    $urzadNadania
     * @param string $opis
     * @param string $nazwaWydruk
     */
    public function __construct($urzadNadania = null, $opis = null, $nazwaWydruk = null)
    {
        $this
            ->setUrzadNadania($urzadNadania)
            ->setOpis($opis)
            ->setNazwaWydruk($nazwaWydruk);
    }

    /**
     * Get urzadNadania value.
     *
     * @return int|null
     */
    public function getUrzadNadania()
    {
        return $this->urzadNadania;
    }

    /**
     * Set urzadNadania value.
     *
     * @param int $urzadNadania
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UrzadNadaniaFullType
     */
    public function setUrzadNadania($urzadNadania = null)
    {
        // validation for constraint: int
        if (!is_null($urzadNadania) && !(is_int($urzadNadania) || ctype_digit($urzadNadania))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($urzadNadania, true), gettype($urzadNadania)), __LINE__);
        }
        $this->urzadNadania = $urzadNadania;

        return $this;
    }

    /**
     * Get opis value.
     *
     * @return string|null
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * Set opis value.
     *
     * @param string $opis
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UrzadNadaniaFullType
     */
    public function setOpis($opis = null)
    {
        // validation for constraint: string
        if (!is_null($opis) && !is_string($opis)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($opis, true), gettype($opis)), __LINE__);
        }
        $this->opis = $opis;

        return $this;
    }

    /**
     * Get nazwaWydruk value.
     *
     * @return string|null
     */
    public function getNazwaWydruk()
    {
        return $this->nazwaWydruk;
    }

    /**
     * Set nazwaWydruk value.
     *
     * @param string $nazwaWydruk
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UrzadNadaniaFullType
     */
    public function setNazwaWydruk($nazwaWydruk = null)
    {
        // validation for constraint: string
        if (!is_null($nazwaWydruk) && !is_string($nazwaWydruk)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nazwaWydruk, true), gettype($nazwaWydruk)), __LINE__);
        }
        $this->nazwaWydruk = $nazwaWydruk;

        return $this;
    }
}
