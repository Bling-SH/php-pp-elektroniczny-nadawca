<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Hello ServiceType.
 */
class Hello extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named hello.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\HelloResponse|bool
     */
    public function hello(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\Hello $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->hello($parameters));

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\HelloResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
