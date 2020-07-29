<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Cancel ServiceType.
 */
class Cancel extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named cancelReklamacja.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\CancelReklamacjaResponse|bool
     */
    public function cancelReklamacja(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\CancelReklamacja $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->cancelReklamacja($parameters));

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\CancelReklamacjaResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
