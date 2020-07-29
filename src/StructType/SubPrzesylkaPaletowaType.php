<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

/**
 * This class stands for subPrzesylkaPaletowaType StructType.
 */
class SubPrzesylkaPaletowaType extends PrzesylkaType
{
    /**
     * The paleta
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaletaType
     */
    public $paleta;
    /**
     * The zawartosc.
     *
     * @var string
     */
    public $zawartosc;
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
     * Constructor method for subPrzesylkaPaletowaType.
     *
     * @uses SubPrzesylkaPaletowaType::setPaleta()
     * @uses SubPrzesylkaPaletowaType::setZawartosc()
     * @uses SubPrzesylkaPaletowaType::setMasa()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaletaType $paleta
     * @param string                                                         $zawartosc
     * @param int                                                            $masa
     */
    public function __construct(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaletaType $paleta = null, $zawartosc = null, $masa = null)
    {
        $this
            ->setPaleta($paleta)
            ->setZawartosc($zawartosc)
            ->setMasa($masa);
    }

    /**
     * Get paleta value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaletaType
     */
    public function getPaleta()
    {
        return $this->paleta;
    }

    /**
     * Set paleta value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaletaType $paleta
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubPrzesylkaPaletowaType
     */
    public function setPaleta(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaletaType $paleta = null)
    {
        $this->paleta = $paleta;

        return $this;
    }

    /**
     * Get zawartosc value.
     *
     * @return string|null
     */
    public function getZawartosc()
    {
        return $this->zawartosc;
    }

    /**
     * Set zawartosc value.
     *
     * @param string $zawartosc
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubPrzesylkaPaletowaType
     */
    public function setZawartosc($zawartosc = null)
    {
        // validation for constraint: string
        if (!is_null($zawartosc) && !is_string($zawartosc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zawartosc, true), gettype($zawartosc)), __LINE__);
        }
        $this->zawartosc = $zawartosc;

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubPrzesylkaPaletowaType
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
}
