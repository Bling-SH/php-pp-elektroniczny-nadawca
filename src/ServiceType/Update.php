<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Update ServiceType.
 */
class Update extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named updateEnvelopeBufor.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UpdateEnvelopeBuforResponse|bool
     */
    public function updateEnvelopeBufor(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\UpdateEnvelopeBufor $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->updateEnvelopeBufor($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named updateAccount.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UpdateAccountResponse|bool
     */
    public function updateAccount(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\UpdateAccount $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->updateAccount($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named updateProfil.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UpdateProfilResponse|bool
     */
    public function updateProfil(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\UpdateProfil $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->updateProfil($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named updateShopEZwroty.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UpdateShopEZwrotyResponse|bool
     */
    public function updateShopEZwroty(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\UpdateShopEZwroty $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->updateShopEZwroty($parameters));

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\UpdateAccountResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\UpdateEnvelopeBuforResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\UpdateProfilResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\UpdateShopEZwrotyResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
