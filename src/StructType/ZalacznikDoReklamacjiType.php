<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zalacznikDoReklamacjiType StructType.
 */
class ZalacznikDoReklamacjiType extends AbstractStructBase
{
    /**
     * The fileContent
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var string
     */
    public $fileContent;
    /**
     * The fileName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var string
     */
    public $fileName;
    /**
     * The fileDesc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var string
     */
    public $fileDesc;

    /**
     * Constructor method for zalacznikDoReklamacjiType.
     *
     * @uses ZalacznikDoReklamacjiType::setFileContent()
     * @uses ZalacznikDoReklamacjiType::setFileName()
     * @uses ZalacznikDoReklamacjiType::setFileDesc()
     *
     * @param string $fileContent
     * @param string $fileName
     * @param string $fileDesc
     */
    public function __construct($fileContent = null, $fileName = null, $fileDesc = null)
    {
        $this
            ->setFileContent($fileContent)
            ->setFileName($fileName)
            ->setFileDesc($fileDesc);
    }

    /**
     * Get fileContent value.
     *
     * @return string
     */
    public function getFileContent()
    {
        return $this->fileContent;
    }

    /**
     * Set fileContent value.
     *
     * @param string $fileContent
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZalacznikDoReklamacjiType
     */
    public function setFileContent($fileContent = null)
    {
        // validation for constraint: string
        if (!is_null($fileContent) && !is_string($fileContent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileContent, true), gettype($fileContent)), __LINE__);
        }
        $this->fileContent = $fileContent;

        return $this;
    }

    /**
     * Get fileName value.
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set fileName value.
     *
     * @param string $fileName
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZalacznikDoReklamacjiType
     */
    public function setFileName($fileName = null)
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileName, true), gettype($fileName)), __LINE__);
        }
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get fileDesc value.
     *
     * @return string|null
     */
    public function getFileDesc()
    {
        return $this->fileDesc;
    }

    /**
     * Set fileDesc value.
     *
     * @param string $fileDesc
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZalacznikDoReklamacjiType
     */
    public function setFileDesc($fileDesc = null)
    {
        // validation for constraint: string
        if (!is_null($fileDesc) && !is_string($fileDesc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileDesc, true), gettype($fileDesc)), __LINE__);
        }
        $this->fileDesc = $fileDesc;

        return $this;
    }
}
