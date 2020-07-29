<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Is ServiceType.
 */
class Is extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named isMiejscowa.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\IsMiejscowaResponse|bool
     */
    public function isMiejscowa(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\IsMiejscowa $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->isMiejscowa($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named isObszarMiasto.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\IsObszarMiastoResponse|bool
     */
    public function isObszarMiasto(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\IsObszarMiasto $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->isObszarMiasto($parameters));

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\IsMiejscowaResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\IsObszarMiastoResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
