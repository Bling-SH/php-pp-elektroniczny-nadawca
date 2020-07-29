<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getOutboxBook StructType.
 */
class GetOutboxBook extends AbstractStructBase
{
    /**
     * The idEnvelope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var int
     */
    public $idEnvelope;
    /**
     * The includeNierejestrowane
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var bool
     */
    public $includeNierejestrowane;

    /**
     * Constructor method for getOutboxBook.
     *
     * @uses GetOutboxBook::setIdEnvelope()
     * @uses GetOutboxBook::setIncludeNierejestrowane()
     *
     * @param int  $idEnvelope
     * @param bool $includeNierejestrowane
     */
    public function __construct($idEnvelope = null, $includeNierejestrowane = null)
    {
        $this
            ->setIdEnvelope($idEnvelope)
            ->setIncludeNierejestrowane($includeNierejestrowane);
    }

    /**
     * Get idEnvelope value.
     *
     * @return int
     */
    public function getIdEnvelope()
    {
        return $this->idEnvelope;
    }

    /**
     * Set idEnvelope value.
     *
     * @param int $idEnvelope
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetOutboxBook
     */
    public function setIdEnvelope($idEnvelope = null)
    {
        // validation for constraint: int
        if (!is_null($idEnvelope) && !(is_int($idEnvelope) || ctype_digit($idEnvelope))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idEnvelope, true), gettype($idEnvelope)), __LINE__);
        }
        $this->idEnvelope = $idEnvelope;

        return $this;
    }

    /**
     * Get includeNierejestrowane value.
     *
     * @return bool|null
     */
    public function getIncludeNierejestrowane()
    {
        return $this->includeNierejestrowane;
    }

    /**
     * Set includeNierejestrowane value.
     *
     * @param bool $includeNierejestrowane
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetOutboxBook
     */
    public function setIncludeNierejestrowane($includeNierejestrowane = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeNierejestrowane) && !is_bool($includeNierejestrowane)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeNierejestrowane, true), gettype($includeNierejestrowane)), __LINE__);
        }
        $this->includeNierejestrowane = $includeNierejestrowane;

        return $this;
    }
}
