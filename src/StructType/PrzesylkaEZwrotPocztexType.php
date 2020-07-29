<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

/**
 * This class stands for przesylkaEZwrotPocztexType StructType.
 */
class PrzesylkaEZwrotPocztexType extends PrzesylkaRejestrowanaType
{
    /**
     * The numerNadaniaZwrot
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minLength: 13.
     *
     * @var string
     */
    public $numerNadaniaZwrot;

    /**
     * Constructor method for przesylkaEZwrotPocztexType.
     *
     * @uses PrzesylkaEZwrotPocztexType::setNumerNadaniaZwrot()
     *
     * @param string $numerNadaniaZwrot
     */
    public function __construct($numerNadaniaZwrot = null)
    {
        $this
            ->setNumerNadaniaZwrot($numerNadaniaZwrot);
    }

    /**
     * Get numerNadaniaZwrot value.
     *
     * @return string|null
     */
    public function getNumerNadaniaZwrot()
    {
        return $this->numerNadaniaZwrot;
    }

    /**
     * Set numerNadaniaZwrot value.
     *
     * @param string $numerNadaniaZwrot
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaEZwrotPocztexType
     */
    public function setNumerNadaniaZwrot($numerNadaniaZwrot = null)
    {
        // validation for constraint: string
        if (!is_null($numerNadaniaZwrot) && !is_string($numerNadaniaZwrot)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerNadaniaZwrot, true), gettype($numerNadaniaZwrot)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($numerNadaniaZwrot) && mb_strlen($numerNadaniaZwrot) > 20) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen($numerNadaniaZwrot)), __LINE__);
        }
        // validation for constraint: minLength(13)
        if (!is_null($numerNadaniaZwrot) && mb_strlen($numerNadaniaZwrot) < 13) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 13', mb_strlen($numerNadaniaZwrot)), __LINE__);
        }
        $this->numerNadaniaZwrot = $numerNadaniaZwrot;

        return $this;
    }
}
