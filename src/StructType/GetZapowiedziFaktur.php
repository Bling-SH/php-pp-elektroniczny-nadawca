<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getZapowiedziFaktur StructType.
 */
class GetZapowiedziFaktur extends AbstractStructBase
{
    /**
     * The data
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var string
     */
    public $data;

    /**
     * Constructor method for getZapowiedziFaktur.
     *
     * @uses GetZapowiedziFaktur::setData()
     *
     * @param string $data
     */
    public function __construct($data = null)
    {
        $this
            ->setData($data);
    }

    /**
     * Get data value.
     *
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set data value.
     *
     * @param string $data
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetZapowiedziFaktur
     */
    public function setData($data = null)
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        $this->data = $data;

        return $this;
    }
}
