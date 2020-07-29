<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Create ServiceType.
 */
class Create extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named createEnvelopeBufor.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\CreateEnvelopeBuforResponse|bool
     */
    public function createEnvelopeBufor(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\CreateEnvelopeBufor $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->createEnvelopeBufor($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named createAccount.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\CreateAccountResponse|bool
     */
    public function createAccount(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\CreateAccount $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->createAccount($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named createProfil.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\CreateProfilResponse|bool
     */
    public function createProfil(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\CreateProfil $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->createProfil($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result.
     *
     * @see AbstractSoapClientBase::getResult()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\CreateAccountResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\CreateEnvelopeBuforResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\CreateProfilResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
