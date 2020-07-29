<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createAccount StructType.
 */
class CreateAccount extends AbstractStructBase
{
    /**
     * The account
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType
     */
    public $account;

    /**
     * Constructor method for createAccount.
     *
     * @uses CreateAccount::setAccount()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType $account
     */
    public function __construct(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType $account = null)
    {
        $this
            ->setAccount($account);
    }

    /**
     * Get account value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set account value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType $account
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\CreateAccount
     */
    public function setAccount(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AccountType $account = null)
    {
        $this->account = $account;

        return $this;
    }
}
