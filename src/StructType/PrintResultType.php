<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintResultType StructType.
 */
class PrintResultType extends AbstractStructBase
{
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - maxOccurs: 1
     * - minOccurs: 0
     * - whiteSpace: collapse.
     *
     * @var string
     */
    public $guid;
    /**
     * The print
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var string
     */
    public $print;

    /**
     * Constructor method for PrintResultType.
     *
     * @uses PrintResultType::setGuid()
     * @uses PrintResultType::setPrint()
     *
     * @param string $guid
     * @param string $print
     */
    public function __construct($guid = null, $print = null)
    {
        $this
            ->setGuid($guid)
            ->setPrint($print);
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrintResultType
     */
    public function setGuid($guid = null)
    {
        // validation for constraint: string
        if (!is_null($guid) && !is_string($guid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guid, true), gettype($guid)), __LINE__);
        }
        // validation for constraint: length(32)
        if (!is_null($guid) && 32 !== mb_strlen($guid)) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 32', mb_strlen($guid)), __LINE__);
        }
        $this->guid = $guid;

        return $this;
    }

    /**
     * Get print value.
     *
     * @return string|null
     */
    public function getPrint()
    {
        return $this->print;
    }

    /**
     * Set print value.
     *
     * @param string $print
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrintResultType
     */
    public function setPrint($print = null)
    {
        // validation for constraint: string
        if (!is_null($print) && !is_string($print)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($print, true), gettype($print)), __LINE__);
        }
        $this->print = $print;

        return $this;
    }
}
