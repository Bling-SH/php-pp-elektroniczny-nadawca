<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReklamacje StructType.
 */
class GetReklamacje extends AbstractStructBase
{
    /**
     * The dataRozpatrzenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var string
     */
    public $dataRozpatrzenia;

    /**
     * Constructor method for getReklamacje.
     *
     * @uses GetReklamacje::setDataRozpatrzenia()
     *
     * @param string $dataRozpatrzenia
     */
    public function __construct($dataRozpatrzenia = null)
    {
        $this
            ->setDataRozpatrzenia($dataRozpatrzenia);
    }

    /**
     * Get dataRozpatrzenia value.
     *
     * @return string
     */
    public function getDataRozpatrzenia()
    {
        return $this->dataRozpatrzenia;
    }

    /**
     * Set dataRozpatrzenia value.
     *
     * @param string $dataRozpatrzenia
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetReklamacje
     */
    public function setDataRozpatrzenia($dataRozpatrzenia = null)
    {
        // validation for constraint: string
        if (!is_null($dataRozpatrzenia) && !is_string($dataRozpatrzenia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataRozpatrzenia, true), gettype($dataRozpatrzenia)), __LINE__);
        }
        $this->dataRozpatrzenia = $dataRozpatrzenia;

        return $this;
    }
}
