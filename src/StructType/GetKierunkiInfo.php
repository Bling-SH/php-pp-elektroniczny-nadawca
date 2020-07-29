<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getKierunkiInfo StructType.
 */
class GetKierunkiInfo extends AbstractStructBase
{
    /**
     * The plan.
     *
     * @var string
     */
    public $plan;

    /**
     * Constructor method for getKierunkiInfo.
     *
     * @uses GetKierunkiInfo::setPlan()
     *
     * @param string $plan
     */
    public function __construct($plan = null)
    {
        $this
            ->setPlan($plan);
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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetKierunkiInfo
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
}
