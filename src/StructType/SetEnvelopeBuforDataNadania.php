<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for setEnvelopeBuforDataNadania StructType.
 */
class SetEnvelopeBuforDataNadania extends AbstractStructBase
{
    /**
     * The dataNadania
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var string
     */
    public $dataNadania;

    /**
     * Constructor method for setEnvelopeBuforDataNadania.
     *
     * @uses SetEnvelopeBuforDataNadania::setDataNadania()
     *
     * @param string $dataNadania
     */
    public function __construct($dataNadania = null)
    {
        $this
            ->setDataNadania($dataNadania);
    }

    /**
     * Get dataNadania value.
     *
     * @return string
     */
    public function getDataNadania()
    {
        return $this->dataNadania;
    }

    /**
     * Set dataNadania value.
     *
     * @param string $dataNadania
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SetEnvelopeBuforDataNadania
     */
    public function setDataNadania($dataNadania = null)
    {
        // validation for constraint: string
        if (!is_null($dataNadania) && !is_string($dataNadania)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataNadania, true), gettype($dataNadania)), __LINE__);
        }
        $this->dataNadania = $dataNadania;

        return $this;
    }
}
