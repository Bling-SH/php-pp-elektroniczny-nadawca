<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Download ServiceType.
 */
class Download extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named downloadIWDContent.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DownloadIWDContentResponse|bool
     */
    public function downloadIWDContent(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\DownloadIWDContent $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->downloadIWDContent($parameters));

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DownloadIWDContentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
