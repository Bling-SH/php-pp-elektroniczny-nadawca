<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Move ServiceType.
 */
class Move extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named moveShipments.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\MoveShipmentsResponse|bool
     */
    public function moveShipments(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\MoveShipments $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->moveShipments($parameters));

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\MoveShipmentsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
