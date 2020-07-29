<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for uploadIWDContent StructType.
 */
class UploadIWDContent extends AbstractStructBase
{
    /**
     * The IWDContent
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var string
     */
    public $IWDContent;
    /**
     * The urzadNadania
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var int
     */
    public $urzadNadania;

    /**
     * Constructor method for uploadIWDContent.
     *
     * @uses UploadIWDContent::setIWDContent()
     * @uses UploadIWDContent::setUrzadNadania()
     *
     * @param string $iWDContent
     * @param int    $urzadNadania
     */
    public function __construct($iWDContent = null, $urzadNadania = null)
    {
        $this
            ->setIWDContent($iWDContent)
            ->setUrzadNadania($urzadNadania);
    }

    /**
     * Get IWDContent value.
     *
     * @return string
     */
    public function getIWDContent()
    {
        return $this->IWDContent;
    }

    /**
     * Set IWDContent value.
     *
     * @param string $iWDContent
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UploadIWDContent
     */
    public function setIWDContent($iWDContent = null)
    {
        // validation for constraint: string
        if (!is_null($iWDContent) && !is_string($iWDContent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iWDContent, true), gettype($iWDContent)), __LINE__);
        }
        $this->IWDContent = $iWDContent;

        return $this;
    }

    /**
     * Get urzadNadania value.
     *
     * @return int|null
     */
    public function getUrzadNadania()
    {
        return $this->urzadNadania;
    }

    /**
     * Set urzadNadania value.
     *
     * @param int $urzadNadania
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UploadIWDContent
     */
    public function setUrzadNadania($urzadNadania = null)
    {
        // validation for constraint: int
        if (!is_null($urzadNadania) && !(is_int($urzadNadania) || ctype_digit($urzadNadania))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($urzadNadania, true), gettype($urzadNadania)), __LINE__);
        }
        $this->urzadNadania = $urzadNadania;

        return $this;
    }
}
