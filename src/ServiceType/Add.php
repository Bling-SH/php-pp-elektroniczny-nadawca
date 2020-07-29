<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Add ServiceType.
 */
class Add extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named addShipment.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddShipmentResponse|bool
     */
    public function addShipment(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddShipment $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->addShipment($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named addReklamacje.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddReklamacjeResponse|bool
     */
    public function addReklamacje(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddReklamacje $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->addReklamacje($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named addOdwolanieDoReklamacji.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddOdwolanieDoReklamacjiResponse|bool
     */
    public function addOdwolanieDoReklamacji(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddOdwolanieDoReklamacji $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->addOdwolanieDoReklamacji($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named addRozbieznoscDoZapowiedziFaktur.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddRozbieznoscDoZapowiedziFakturResponse|bool
     */
    public function addRozbieznoscDoZapowiedziFaktur(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddRozbieznoscDoZapowiedziFaktur $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->addRozbieznoscDoZapowiedziFaktur($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named addZalacznikDoReklamacji.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddZalacznikDoReklamacjiResponse|bool
     */
    public function addZalacznikDoReklamacji(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddZalacznikDoReklamacji $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->addZalacznikDoReklamacji($parameters));

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddOdwolanieDoReklamacjiResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddReklamacjeResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddRozbieznoscDoZapowiedziFakturResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddShipmentResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AddZalacznikDoReklamacjiResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
