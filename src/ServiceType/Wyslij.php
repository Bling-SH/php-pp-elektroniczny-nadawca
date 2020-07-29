<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Wyslij ServiceType.
 */
class Wyslij extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named wyslijLinkaOStatusieEZwrotu.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\WyslijLinkaOStatusieEZwrotuResponse|bool
     */
    public function wyslijLinkaOStatusieEZwrotu(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\WyslijLinkaOStatusieEZwrotu $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->wyslijLinkaOStatusieEZwrotu($parameters));

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\WyslijLinkaOStatusieEZwrotuResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
