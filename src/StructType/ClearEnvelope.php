<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for clearEnvelope StructType.
 */
class ClearEnvelope extends AbstractStructBase
{
    /**
     * The idBufor
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var int
     */
    public $idBufor;

    /**
     * Constructor method for clearEnvelope.
     *
     * @uses ClearEnvelope::setIdBufor()
     *
     * @param int $idBufor
     */
    public function __construct($idBufor = null)
    {
        $this
            ->setIdBufor($idBufor);
    }

    /**
     * Get idBufor value.
     *
     * @return int|null
     */
    public function getIdBufor()
    {
        return $this->idBufor;
    }

    /**
     * Set idBufor value.
     *
     * @param int $idBufor
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ClearEnvelope
     */
    public function setIdBufor($idBufor = null)
    {
        // validation for constraint: int
        if (!is_null($idBufor) && !(is_int($idBufor) || ctype_digit($idBufor))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idBufor, true), gettype($idBufor)), __LINE__);
        }
        $this->idBufor = $idBufor;

        return $this;
    }
}
