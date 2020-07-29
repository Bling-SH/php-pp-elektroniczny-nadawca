<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for reklamacjaInfoType StructType.
 */
class ReklamacjaInfoType extends AbstractStructBase
{
    /**
     * The idReklamacja
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var string
     */
    public $idReklamacja;
    /**
     * The guidPrzesylki
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - maxOccurs: 1
     * - minOccurs: 1
     * - whiteSpace: collapse.
     *
     * @var string
     */
    public $guidPrzesylki;

    /**
     * Constructor method for reklamacjaInfoType.
     *
     * @uses ReklamacjaInfoType::setIdReklamacja()
     * @uses ReklamacjaInfoType::setGuidPrzesylki()
     *
     * @param string $idReklamacja
     * @param string $guidPrzesylki
     */
    public function __construct($idReklamacja = null, $guidPrzesylki = null)
    {
        $this
            ->setIdReklamacja($idReklamacja)
            ->setGuidPrzesylki($guidPrzesylki);
    }

    /**
     * Get idReklamacja value.
     *
     * @return string
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamacjaInfoType
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

    /**
     * Get guidPrzesylki value.
     *
     * @return string
     */
    public function getGuidPrzesylki()
    {
        return $this->guidPrzesylki;
    }

    /**
     * Set guidPrzesylki value.
     *
     * @param string $guidPrzesylki
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ReklamacjaInfoType
     */
    public function setGuidPrzesylki($guidPrzesylki = null)
    {
        // validation for constraint: string
        if (!is_null($guidPrzesylki) && !is_string($guidPrzesylki)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guidPrzesylki, true), gettype($guidPrzesylki)), __LINE__);
        }
        // validation for constraint: length(32)
        if (!is_null($guidPrzesylki) && 32 !== mb_strlen($guidPrzesylki)) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 32', mb_strlen($guidPrzesylki)), __LINE__);
        }
        $this->guidPrzesylki = $guidPrzesylki;

        return $this;
    }
}
