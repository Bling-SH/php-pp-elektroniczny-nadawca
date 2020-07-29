<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for hello StructType.
 */
class Hello extends AbstractStructBase
{
    /**
     * The in.
     *
     * @var string
     */
    public $in;

    /**
     * Constructor method for hello.
     *
     * @uses Hello::setIn()
     *
     * @param string $in
     */
    public function __construct($in = null)
    {
        $this
            ->setIn($in);
    }

    /**
     * Get in value.
     *
     * @return string|null
     */
    public function getIn()
    {
        return $this->in;
    }

    /**
     * Set in value.
     *
     * @param string $in
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\Hello
     */
    public function setIn($in = null)
    {
        // validation for constraint: string
        if (!is_null($in) && !is_string($in)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($in, true), gettype($in)), __LINE__);
        }
        $this->in = $in;

        return $this;
    }
}
