<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Set ServiceType.
 */
class Set extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named setAktywnaKarta.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SetAktywnaKartaResponse|bool
     */
    public function setAktywnaKarta(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\SetAktywnaKarta $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->setAktywnaKarta($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named setEnvelopeBuforDataNadania.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SetEnvelopeBuforDataNadaniaResponse|bool
     */
    public function setEnvelopeBuforDataNadania(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\SetEnvelopeBuforDataNadania $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->setEnvelopeBuforDataNadania($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named setStatusZgodyNaEZwrot.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SetStatusZgodyNaEZwrotResponse|bool
     */
    public function setStatusZgodyNaEZwrot(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\SetStatusZgodyNaEZwrot $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->setStatusZgodyNaEZwrot($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named setJednostkaOrganizacyjna.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SetJednostkaOrganizacyjnaResponse|bool
     */
    public function setJednostkaOrganizacyjna(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\SetJednostkaOrganizacyjna $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->setJednostkaOrganizacyjna($parameters));

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SetAktywnaKartaResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\SetEnvelopeBuforDataNadaniaResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\SetJednostkaOrganizacyjnaResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\SetStatusZgodyNaEZwrotResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
