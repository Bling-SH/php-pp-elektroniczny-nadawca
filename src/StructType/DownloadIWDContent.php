<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for downloadIWDContent StructType.
 */
class DownloadIWDContent extends AbstractStructBase
{
    /**
     * The idEnvelope.
     *
     * @var int
     */
    public $idEnvelope;

    /**
     * Constructor method for downloadIWDContent.
     *
     * @uses DownloadIWDContent::setIdEnvelope()
     *
     * @param int $idEnvelope
     */
    public function __construct($idEnvelope = null)
    {
        $this
            ->setIdEnvelope($idEnvelope);
    }

    /**
     * Get idEnvelope value.
     *
     * @return int|null
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DownloadIWDContent
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
}
