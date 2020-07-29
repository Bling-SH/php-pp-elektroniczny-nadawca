<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getKierunki StructType.
 */
class GetKierunki extends AbstractStructBase
{
    /**
     * The plan.
     *
     * @var string
     */
    public $plan;
    /**
     * The prefixKodPocztowy
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 2.
     *
     * @var string
     */
    public $prefixKodPocztowy;

    /**
     * Constructor method for getKierunki.
     *
     * @uses GetKierunki::setPlan()
     * @uses GetKierunki::setPrefixKodPocztowy()
     *
     * @param string $plan
     * @param string $prefixKodPocztowy
     */
    public function __construct($plan = null, $prefixKodPocztowy = null)
    {
        $this
            ->setPlan($plan)
            ->setPrefixKodPocztowy($prefixKodPocztowy);
    }

    /**
     * Get plan value.
     *
     * @return string|null
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Set plan value.
     *
     * @param string $plan
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetKierunki
     */
    public function setPlan($plan = null)
    {
        // validation for constraint: string
        if (!is_null($plan) && !is_string($plan)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($plan, true), gettype($plan)), __LINE__);
        }
        $this->plan = $plan;

        return $this;
    }

    /**
     * Get prefixKodPocztowy value.
     *
     * @return string|null
     */
    public function getPrefixKodPocztowy()
    {
        return $this->prefixKodPocztowy;
    }

    /**
     * Set prefixKodPocztowy value.
     *
     * @param string $prefixKodPocztowy
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetKierunki
     */
    public function setPrefixKodPocztowy($prefixKodPocztowy = null)
    {
        // validation for constraint: string
        if (!is_null($prefixKodPocztowy) && !is_string($prefixKodPocztowy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($prefixKodPocztowy, true), gettype($prefixKodPocztowy)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($prefixKodPocztowy) && 2 !== mb_strlen($prefixKodPocztowy)) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen($prefixKodPocztowy)), __LINE__);
        }
        $this->prefixKodPocztowy = $prefixKodPocztowy;

        return $this;
    }
}
