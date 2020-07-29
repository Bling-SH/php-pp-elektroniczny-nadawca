<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Clear ServiceType.
 */
class Clear extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named clearEnvelope.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ClearEnvelopeResponse|bool
     */
    public function clearEnvelope(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\ClearEnvelope $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->clearEnvelope($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named clearEnvelopeByGuids.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ClearEnvelopeByGuidsResponse|bool
     */
    public function clearEnvelopeByGuids(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\ClearEnvelopeByGuids $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->clearEnvelopeByGuids($parameters));

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ClearEnvelopeByGuidsResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\ClearEnvelopeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
