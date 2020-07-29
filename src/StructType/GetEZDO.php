<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEZDO StructType.
 */
class GetEZDO extends AbstractStructBase
{
    /**
     * The idEZDOPakiet
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var int
     */
    public $idEZDOPakiet;

    /**
     * Constructor method for getEZDO.
     *
     * @uses GetEZDO::setIdEZDOPakiet()
     *
     * @param int $idEZDOPakiet
     */
    public function __construct($idEZDOPakiet = null)
    {
        $this
            ->setIdEZDOPakiet($idEZDOPakiet);
    }

    /**
     * Get idEZDOPakiet value.
     *
     * @return int
     */
    public function getIdEZDOPakiet()
    {
        return $this->idEZDOPakiet;
    }

    /**
     * Set idEZDOPakiet value.
     *
     * @param int $idEZDOPakiet
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEZDO
     */
    public function setIdEZDOPakiet($idEZDOPakiet = null)
    {
        // validation for constraint: int
        if (!is_null($idEZDOPakiet) && !(is_int($idEZDOPakiet) || ctype_digit($idEZDOPakiet))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idEZDOPakiet, true), gettype($idEZDOPakiet)), __LINE__);
        }
        $this->idEZDOPakiet = $idEZDOPakiet;

        return $this;
    }
}
