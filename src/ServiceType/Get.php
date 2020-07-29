<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType.
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getUrzedyNadania.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetUrzedyNadaniaResponse|bool
     */
    public function getUrzedyNadania(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetUrzedyNadania $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getUrzedyNadania($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getUrzedyWydajaceEPrzesylki.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetUrzedyWydajaceEPrzesylkiResponse|bool
     */
    public function getUrzedyWydajaceEPrzesylki(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetUrzedyWydajaceEPrzesylki $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getUrzedyWydajaceEPrzesylki($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEnvelopeStatus.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeStatusResponse|bool
     */
    public function getEnvelopeStatus(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeStatus $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getEnvelopeStatus($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getKarty.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetKartyResponse|bool
     */
    public function getKarty(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetKarty $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getKarty($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getPasswordExpiredDate.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetPasswordExpiredDateResponse|bool
     */
    public function getPasswordExpiredDate(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetPasswordExpiredDate $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getPasswordExpiredDate($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEnvelopeContentShort.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeContentShortResponse|bool
     */
    public function getEnvelopeContentShort(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeContentShort $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getEnvelopeContentShort($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEnvelopeContentFull.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeContentFullResponse|bool
     */
    public function getEnvelopeContentFull(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeContentFull $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getEnvelopeContentFull($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getAddressLabel.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetAddressLabelResponse|bool
     */
    public function getAddressLabel(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetAddressLabel $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getAddressLabel($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getOutboxBook.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetOutboxBookResponse|bool
     */
    public function getOutboxBook(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetOutboxBook $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getOutboxBook($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getFirmowaPocztaBook.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetFirmowaPocztaBookResponse|bool
     */
    public function getFirmowaPocztaBook(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetFirmowaPocztaBook $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getFirmowaPocztaBook($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEnvelopeList.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeListResponse|bool
     */
    public function getEnvelopeList(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeList $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getEnvelopeList($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getAddresLabelByGuid.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetAddresLabelByGuidResponse|bool
     */
    public function getAddresLabelByGuid(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetAddresLabelByGuid $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getAddresLabelByGuid($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getPlacowkiPocztowe.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetPlacowkiPocztoweResponse|bool
     */
    public function getPlacowkiPocztowe(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetPlacowkiPocztowe $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getPlacowkiPocztowe($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getGuid.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetGuidResponse|bool
     */
    public function getGuid(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetGuid $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getGuid($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getKierunki.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetKierunkiResponse|bool
     */
    public function getKierunki(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetKierunki $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getKierunki($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getKierunkiInfo.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetKierunkiInfoResponse|bool
     */
    public function getKierunkiInfo(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetKierunkiInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getKierunkiInfo($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEnvelopeBufor.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeBuforResponse|bool
     */
    public function getEnvelopeBufor(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeBufor $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getEnvelopeBufor($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEPOStatus.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEPOStatusResponse|bool
     */
    public function getEPOStatus(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEPOStatus $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getEPOStatus($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getAddresLabelCompact.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetAddresLabelCompactResponse|bool
     */
    public function getAddresLabelCompact(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetAddresLabelCompact $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getAddresLabelCompact($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getAddresLabelByGuidCompact.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetAddresLabelByGuidCompactResponse|bool
     */
    public function getAddresLabelByGuidCompact(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetAddresLabelByGuidCompact $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getAddresLabelByGuidCompact($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEnvelopeBuforList.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeBuforListResponse|bool
     */
    public function getEnvelopeBuforList(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeBuforList $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getEnvelopeBuforList($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getUbezpieczeniaInfo.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetUbezpieczeniaInfoResponse|bool
     */
    public function getUbezpieczeniaInfo(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetUbezpieczeniaInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getUbezpieczeniaInfo($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getBlankietPobraniaByGuids.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetBlankietPobraniaByGuidsResponse|bool
     */
    public function getBlankietPobraniaByGuids(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetBlankietPobraniaByGuids $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getBlankietPobraniaByGuids($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getAccountList.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetAccountListResponse|bool
     */
    public function getAccountList(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetAccountList $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getAccountList($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getProfilList.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetProfilListResponse|bool
     */
    public function getProfilList(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetProfilList $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getProfilList($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getReklamacje.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetReklamacjeResponse|bool
     */
    public function getReklamacje(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetReklamacje $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getReklamacje($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getZapowiedziFaktur.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetZapowiedziFakturResponse|bool
     */
    public function getZapowiedziFaktur(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetZapowiedziFaktur $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getZapowiedziFaktur($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getListaPowodowReklamacji.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetListaPowodowReklamacjiResponse|bool
     */
    public function getListaPowodowReklamacji(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetListaPowodowReklamacji $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getListaPowodowReklamacji($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEZDO.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEZDOResponse|bool
     */
    public function getEZDO(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEZDO $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getEZDO($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEZDOList.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEZDOListResponse|bool
     */
    public function getEZDOList(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEZDOList $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getEZDOList($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getWplatyCKP.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetWplatyCKPResponse|bool
     */
    public function getWplatyCKP(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetWplatyCKP $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getWplatyCKP($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getListaZgodEZwrotow.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetListaZgodEZwrotowResponse|bool
     */
    public function getListaZgodEZwrotow(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetListaZgodEZwrotow $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getListaZgodEZwrotow($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getPaczkaKorzysciInfo.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetPaczkaKorzysciInfoResponse|bool
     */
    public function getPaczkaKorzysciInfo(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetPaczkaKorzysciInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getPaczkaKorzysciInfo($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getJednostkaOrganizacyjna.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetJednostkaOrganizacyjnaResponse|bool
     */
    public function getJednostkaOrganizacyjna(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetJednostkaOrganizacyjna $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getJednostkaOrganizacyjna($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getPrintForParcel
     * Meta information extracted from the WSDL
     * - documentation: The method returns parcels printouts for passed guid's.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetPrintForParcelResponse|bool
     */
    public function getPrintForParcel(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetPrintForParcel $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getPrintForParcel($parameters));

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
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetAccountListResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetAddresLabelByGuidCompactResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetAddresLabelByGuidResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetAddresLabelCompactResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetAddressLabelResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetBlankietPobraniaByGuidsResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeBuforListResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeBuforResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeContentFullResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeContentShortResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeListResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEnvelopeStatusResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEPOStatusResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEZDOListResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetEZDOResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetFirmowaPocztaBookResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetGuidResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetJednostkaOrganizacyjnaResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetKartyResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetKierunkiInfoResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetKierunkiResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetListaPowodowReklamacjiResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetListaZgodEZwrotowResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetOutboxBookResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetPaczkaKorzysciInfoResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetPasswordExpiredDateResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetPlacowkiPocztoweResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetPrintForParcelResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetProfilListResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetReklamacjeResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetUbezpieczeniaInfoResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetUrzedyNadaniaResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetUrzedyWydajaceEPrzesylkiResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetWplatyCKPResponse|\Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetZapowiedziFakturResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
