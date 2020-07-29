<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for helloResponse StructType.
 */
class HelloResponse extends AbstractStructBase
{
    /**
     * The out.
     *
     * @var string
     */
    public $out;

    /**
     * Constructor method for helloResponse.
     *
     * @uses HelloResponse::setOut()
     *
     * @param string $out
     */
    public function __construct($out = null)
    {
        $this
            ->setOut($out);
    }

    /**
     * Get out value.
     *
     * @return string|null
     */
    public function getOut()
    {
        return $this->out;
    }

    /**
     * Set out value.
     *
     * @param string $out
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\HelloResponse
     */
    public function setOut($out = null)
    {
        // validation for constraint: string
        if (!is_null($out) && !is_string($out)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($out, true), gettype($out)), __LINE__);
        }
        $this->out = $out;

        return $this;
    }
}
