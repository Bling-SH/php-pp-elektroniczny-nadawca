<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Zamow ServiceType.
 */
class Zamow extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named zamowKuriera.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZamowKurieraResponse|bool
     */
    public function zamowKuriera(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZamowKuriera $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->zamowKuriera($parameters));

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ZamowKurieraResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
