<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEnvelopeList StructType.
 */
class GetEnvelopeList extends AbstractStructBase
{
    /**
     * The startDate.
     *
     * @var string
     */
    public $startDate;
    /**
     * The endDate.
     *
     * @var string
     */
    public $endDate;

    /**
     * Constructor method for getEnvelopeList.
     *
     * @uses GetEnvelopeList::setStartDate()
     * @uses GetEnvelopeList::setEndDate()
     *
     * @param string $startDate
     * @param string $endDate
     */
    public function __construct($startDate = null, $endDate = null)
    {
        $this
            ->setStartDate($startDate)
            ->setEndDate($endDate);
    }

    /**
     * Get startDate value.
     *
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set startDate value.
     *
     * @param string $startDate
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeList
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get endDate value.
     *
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set endDate value.
     *
     * @param string $endDate
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeList
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;

        return $this;
    }
}
