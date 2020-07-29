<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAccountListResponse StructType.
 */
class GetAccountListResponse extends AbstractStructBase
{
    /**
     * The account
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType[]
     */
    public $account;

    /**
     * Constructor method for getAccountListResponse.
     *
     * @uses GetAccountListResponse::setAccount()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType[] $account
     */
    public function __construct(array $account = [])
    {
        $this
            ->setAccount($account);
    }

    /**
     * Get account value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType[]|null
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * This method is responsible for validating the values passed to the setAccount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccount method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccountForArrayConstraintsFromSetAccount(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAccountListResponseAccountItem) {
            // validation for constraint: itemType
            if (!$getAccountListResponseAccountItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType) {
                $invalidValues[] = is_object($getAccountListResponseAccountItem) ? get_class($getAccountListResponseAccountItem) : sprintf('%s(%s)', gettype($getAccountListResponseAccountItem), var_export($getAccountListResponseAccountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The account property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set account value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType[] $account
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetAccountListResponse
     */
    public function setAccount(array $account = [])
    {
        // validation for constraint: array
        if ('' !== ($accountArrayErrorMessage = self::validateAccountForArrayConstraintsFromSetAccount($account))) {
            throw new \InvalidArgumentException($accountArrayErrorMessage, __LINE__);
        }
        $this->account = $account;

        return $this;
    }

    /**
     * Add item to account value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetAccountListResponse
     */
    public function addToAccount(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType) {
            throw new \InvalidArgumentException(sprintf('The account property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->account[] = $item;

        return $this;
    }
}
