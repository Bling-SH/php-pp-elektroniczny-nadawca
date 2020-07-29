<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EZDOPakietType StructType.
 */
class EZDOPakietType extends AbstractStructBase
{
    /**
     * The idEZDOPakiet.
     *
     * @var int
     */
    public $idEZDOPakiet;
    /**
     * The exported.
     *
     * @var string
     */
    public $exported;
    /**
     * The idEZDOFile.
     *
     * @var string
     */
    public $idEZDOFile;

    /**
     * Constructor method for EZDOPakietType.
     *
     * @uses EZDOPakietType::setIdEZDOPakiet()
     * @uses EZDOPakietType::setExported()
     * @uses EZDOPakietType::setIdEZDOFile()
     *
     * @param int    $idEZDOPakiet
     * @param string $exported
     * @param string $idEZDOFile
     */
    public function __construct($idEZDOPakiet = null, $exported = null, $idEZDOFile = null)
    {
        $this
            ->setIdEZDOPakiet($idEZDOPakiet)
            ->setExported($exported)
            ->setIdEZDOFile($idEZDOFile);
    }

    /**
     * Get idEZDOPakiet value.
     *
     * @return int|null
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EZDOPakietType
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

    /**
     * Get exported value.
     *
     * @return string|null
     */
    public function getExported()
    {
        return $this->exported;
    }

    /**
     * Set exported value.
     *
     * @param string $exported
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EZDOPakietType
     */
    public function setExported($exported = null)
    {
        // validation for constraint: string
        if (!is_null($exported) && !is_string($exported)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exported, true), gettype($exported)), __LINE__);
        }
        $this->exported = $exported;

        return $this;
    }

    /**
     * Get idEZDOFile value.
     *
     * @return string|null
     */
    public function getIdEZDOFile()
    {
        return $this->idEZDOFile;
    }

    /**
     * Set idEZDOFile value.
     *
     * @param string $idEZDOFile
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\EZDOPakietType
     */
    public function setIdEZDOFile($idEZDOFile = null)
    {
        // validation for constraint: string
        if (!is_null($idEZDOFile) && !is_string($idEZDOFile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idEZDOFile, true), gettype($idEZDOFile)), __LINE__);
        }
        $this->idEZDOFile = $idEZDOFile;

        return $this;
    }
}
