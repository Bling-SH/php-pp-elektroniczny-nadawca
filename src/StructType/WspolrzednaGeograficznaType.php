<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wspolrzednaGeograficznaType StructType.
 */
class WspolrzednaGeograficznaType extends AbstractStructBase
{
    /**
     * The dec.
     *
     * @var float
     */
    public $dec;
    /**
     * The stopien.
     *
     * @var int
     */
    public $stopien;
    /**
     * The minuta.
     *
     * @var int
     */
    public $minuta;
    /**
     * The sekunda.
     *
     * @var float
     */
    public $sekunda;

    /**
     * Constructor method for wspolrzednaGeograficznaType.
     *
     * @uses WspolrzednaGeograficznaType::setDec()
     * @uses WspolrzednaGeograficznaType::setStopien()
     * @uses WspolrzednaGeograficznaType::setMinuta()
     * @uses WspolrzednaGeograficznaType::setSekunda()
     *
     * @param float $dec
     * @param int   $stopien
     * @param int   $minuta
     * @param float $sekunda
     */
    public function __construct($dec = null, $stopien = null, $minuta = null, $sekunda = null)
    {
        $this
            ->setDec($dec)
            ->setStopien($stopien)
            ->setMinuta($minuta)
            ->setSekunda($sekunda);
    }

    /**
     * Get dec value.
     *
     * @return float|null
     */
    public function getDec()
    {
        return $this->dec;
    }

    /**
     * Set dec value.
     *
     * @param float $dec
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType
     */
    public function setDec($dec = null)
    {
        // validation for constraint: float
        if (!is_null($dec) && !(is_float($dec) || is_numeric($dec))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($dec, true), gettype($dec)), __LINE__);
        }
        $this->dec = $dec;

        return $this;
    }

    /**
     * Get stopien value.
     *
     * @return int|null
     */
    public function getStopien()
    {
        return $this->stopien;
    }

    /**
     * Set stopien value.
     *
     * @param int $stopien
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType
     */
    public function setStopien($stopien = null)
    {
        // validation for constraint: int
        if (!is_null($stopien) && !(is_int($stopien) || ctype_digit($stopien))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($stopien, true), gettype($stopien)), __LINE__);
        }
        $this->stopien = $stopien;

        return $this;
    }

    /**
     * Get minuta value.
     *
     * @return int|null
     */
    public function getMinuta()
    {
        return $this->minuta;
    }

    /**
     * Set minuta value.
     *
     * @param int $minuta
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType
     */
    public function setMinuta($minuta = null)
    {
        // validation for constraint: int
        if (!is_null($minuta) && !(is_int($minuta) || ctype_digit($minuta))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minuta, true), gettype($minuta)), __LINE__);
        }
        $this->minuta = $minuta;

        return $this;
    }

    /**
     * Get sekunda value.
     *
     * @return float|null
     */
    public function getSekunda()
    {
        return $this->sekunda;
    }

    /**
     * Set sekunda value.
     *
     * @param float $sekunda
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType
     */
    public function setSekunda($sekunda = null)
    {
        // validation for constraint: float
        if (!is_null($sekunda) && !(is_float($sekunda) || is_numeric($sekunda))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sekunda, true), gettype($sekunda)), __LINE__);
        }
        $this->sekunda = $sekunda;

        return $this;
    }
}
