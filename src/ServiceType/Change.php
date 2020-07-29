<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Change ServiceType.
 */
class Change extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named changePassword.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ChangePasswordResponse|bool
     */
    public function changePassword(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\ChangePassword $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->changePassword($parameters));

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ChangePasswordResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
