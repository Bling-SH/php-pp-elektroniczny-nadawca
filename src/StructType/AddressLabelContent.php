<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addressLabelContent StructType.
 */
class AddressLabelContent extends AbstractStructBase
{
    /**
     * The pdfContent.
     *
     * @var string
     */
    public $pdfContent;
    /**
     * The nrNadania.
     *
     * @var string
     */
    public $nrNadania;
    /**
     * The guid.
     *
     * @var string
     */
    public $guid;

    /**
     * Constructor method for addressLabelContent.
     *
     * @uses AddressLabelContent::setPdfContent()
     * @uses AddressLabelContent::setNrNadania()
     * @uses AddressLabelContent::setGuid()
     *
     * @param string $pdfContent
     * @param string $nrNadania
     * @param string $guid
     */
    public function __construct($pdfContent = null, $nrNadania = null, $guid = null)
    {
        $this
            ->setPdfContent($pdfContent)
            ->setNrNadania($nrNadania)
            ->setGuid($guid);
    }

    /**
     * Get pdfContent value.
     *
     * @return string|null
     */
    public function getPdfContent()
    {
        return $this->pdfContent;
    }

    /**
     * Set pdfContent value.
     *
     * @param string $pdfContent
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddressLabelContent
     */
    public function setPdfContent($pdfContent = null)
    {
        // validation for constraint: string
        if (!is_null($pdfContent) && !is_string($pdfContent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pdfContent, true), gettype($pdfContent)), __LINE__);
        }
        $this->pdfContent = $pdfContent;

        return $this;
    }

    /**
     * Get nrNadania value.
     *
     * @return string|null
     */
    public function getNrNadania()
    {
        return $this->nrNadania;
    }

    /**
     * Set nrNadania value.
     *
     * @param string $nrNadania
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddressLabelContent
     */
    public function setNrNadania($nrNadania = null)
    {
        // validation for constraint: string
        if (!is_null($nrNadania) && !is_string($nrNadania)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nrNadania, true), gettype($nrNadania)), __LINE__);
        }
        $this->nrNadania = $nrNadania;

        return $this;
    }

    /**
     * Get guid value.
     *
     * @return string|null
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Set guid value.
     *
     * @param string $guid
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddressLabelContent
     */
    public function setGuid($guid = null)
    {
        // validation for constraint: string
        if (!is_null($guid) && !is_string($guid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guid, true), gettype($guid)), __LINE__);
        }
        $this->guid = $guid;

        return $this;
    }
}
