<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPasswordExpiredDateResponse StructType.
 */
class GetPasswordExpiredDateResponse extends AbstractStructBase
{
    /**
     * The dataWygasniecia.
     *
     * @var string
     */
    public $dataWygasniecia;

    /**
     * Constructor method for getPasswordExpiredDateResponse.
     *
     * @uses GetPasswordExpiredDateResponse::setDataWygasniecia()
     *
     * @param string $dataWygasniecia
     */
    public function __construct($dataWygasniecia = null)
    {
        $this
            ->setDataWygasniecia($dataWygasniecia);
    }

    /**
     * Get dataWygasniecia value.
     *
     * @return string|null
     */
    public function getDataWygasniecia()
    {
        return $this->dataWygasniecia;
    }

    /**
     * Set dataWygasniecia value.
     *
     * @param string $dataWygasniecia
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetPasswordExpiredDateResponse
     */
    public function setDataWygasniecia($dataWygasniecia = null)
    {
        // validation for constraint: string
        if (!is_null($dataWygasniecia) && !is_string($dataWygasniecia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataWygasniecia, true), gettype($dataWygasniecia)), __LINE__);
        }
        $this->dataWygasniecia = $dataWygasniecia;

        return $this;
    }
}
