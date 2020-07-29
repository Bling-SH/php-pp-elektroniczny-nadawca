<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintType StructType.
 */
class PrintType extends AbstractStructBase
{
    /**
     * The kind
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var string
     */
    public $kind;
    /**
     * The method
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var string
     */
    public $method;

    /**
     * Constructor method for PrintType.
     *
     * @uses PrintType::setKind()
     * @uses PrintType::setMethod()
     *
     * @param string $kind
     * @param string $method
     */
    public function __construct($kind = null, $method = null)
    {
        $this
            ->setKind($kind)
            ->setMethod($method);
    }

    /**
     * Get kind value.
     *
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Set kind value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\PrintKindEnum::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\PrintKindEnum::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $kind
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrintType
     */
    public function setKind($kind = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\PrintKindEnum::valueIsValid($kind)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\PrintKindEnum', is_array($kind) ? implode(', ', $kind) : var_export($kind, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\PrintKindEnum::getValidValues())), __LINE__);
        }
        $this->kind = $kind;

        return $this;
    }

    /**
     * Get method value.
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set method value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\PrintMethodEnum::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\PrintMethodEnum::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $method
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrintType
     */
    public function setMethod($method = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\PrintMethodEnum::valueIsValid($method)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\PrintMethodEnum', is_array($method) ? implode(', ', $method) : var_export($method, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\PrintMethodEnum::getValidValues())), __LINE__);
        }
        $this->method = $method;

        return $this;
    }
}
