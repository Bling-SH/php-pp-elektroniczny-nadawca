<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for uslugiType StructType.
 */
class UslugiType extends AbstractStructBase
{
    /**
     * The id.
     *
     * @var string
     */
    public $id;
    /**
     * The opis.
     *
     * @var string
     */
    public $opis;

    /**
     * Constructor method for uslugiType.
     *
     * @uses UslugiType::setId()
     * @uses UslugiType::setOpis()
     *
     * @param string $id
     * @param string $opis
     */
    public function __construct($id = null, $opis = null)
    {
        $this
            ->setId($id)
            ->setOpis($opis);
    }

    /**
     * Get id value.
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id value.
     *
     * @param string $id
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugiType
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;

        return $this;
    }

    /**
     * Get opis value.
     *
     * @return string|null
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * Set opis value.
     *
     * @param string $opis
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UslugiType
     */
    public function setOpis($opis = null)
    {
        // validation for constraint: string
        if (!is_null($opis) && !is_string($opis)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($opis, true), gettype($opis)), __LINE__);
        }
        $this->opis = $opis;

        return $this;
    }
}
