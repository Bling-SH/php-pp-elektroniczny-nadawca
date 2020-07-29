<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for relatedToAllegroType StructType
 * Meta information extracted from the WSDL
 * - documentation: Opcjonalne informacje o powiązaniu przesyłki ze sprzedażą w serwisie Allegro.
 */
class RelatedToAllegroType extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - documentation: Id transakcji (MS), deal (WebAPI) lub order (RestAPI)
     * - base: xsd:string
     * - maxLength: 38
     * - minLength: 1.
     *
     * @var string
     */
    public $id;
    /**
     * The sellerId
     * Meta information extracted from the WSDL
     * - documentation: Identyfikator sprzedającego w serwisie Allegro.
     * - base: xsd:string
     * - maxLength: 22
     * - minLength: 1.
     *
     * @var string
     */
    public $sellerId;
    /**
     * The channel
     * Meta information extracted from the WSDL
     * - documentation: Źródło identyfikatora: MS - Menedżer Sprzedaży Allegro, WEB_API - WebAPI Allegro, REST_API - RestAPI Allegro.
     *
     * @var string
     */
    public $channel;
    /**
     * The deliveryMethod
     * Meta information extracted from the WSDL
     * - documentation: Identyfikator rodzaju dostawy, gdzie dla źródła: MS - nazwa rodzaju dostawy, WEB_API - id postaci liczby, REST_API - id postaci guid
     * - base: xsd:string
     * - maxLength: 128
     * - minLength: 1.
     *
     * @var string
     */
    public $deliveryMethod;

    /**
     * Constructor method for relatedToAllegroType.
     *
     * @uses RelatedToAllegroType::setId()
     * @uses RelatedToAllegroType::setSellerId()
     * @uses RelatedToAllegroType::setChannel()
     * @uses RelatedToAllegroType::setDeliveryMethod()
     *
     * @param string $id
     * @param string $sellerId
     * @param string $channel
     * @param string $deliveryMethod
     */
    public function __construct($id = null, $sellerId = null, $channel = null, $deliveryMethod = null)
    {
        $this
            ->setId($id)
            ->setSellerId($sellerId)
            ->setChannel($channel)
            ->setDeliveryMethod($deliveryMethod);
    }

    /**
     * Get id value.
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id value.
     *
     * @param string $id
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\RelatedToAllegroType
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: maxLength(38)
        if (!is_null($id) && mb_strlen($id) > 38) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 38', mb_strlen($id)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($id) && mb_strlen($id) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($id)), __LINE__);
        }
        $this->id = $id;

        return $this;
    }

    /**
     * Get sellerId value.
     *
     * @return string|null
     */
    public function getSellerId()
    {
        return $this->sellerId;
    }

    /**
     * Set sellerId value.
     *
     * @param string $sellerId
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\RelatedToAllegroType
     */
    public function setSellerId($sellerId = null)
    {
        // validation for constraint: string
        if (!is_null($sellerId) && !is_string($sellerId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerId, true), gettype($sellerId)), __LINE__);
        }
        // validation for constraint: maxLength(22)
        if (!is_null($sellerId) && mb_strlen($sellerId) > 22) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 22', mb_strlen($sellerId)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($sellerId) && mb_strlen($sellerId) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($sellerId)), __LINE__);
        }
        $this->sellerId = $sellerId;

        return $this;
    }

    /**
     * Get channel value.
     *
     * @return string|null
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Set channel value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\RelatedToAllegroChannelType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\RelatedToAllegroChannelType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $channel
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\RelatedToAllegroType
     */
    public function setChannel($channel = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\RelatedToAllegroChannelType::valueIsValid($channel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\RelatedToAllegroChannelType', is_array($channel) ? implode(', ', $channel) : var_export($channel, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\RelatedToAllegroChannelType::getValidValues())), __LINE__);
        }
        $this->channel = $channel;

        return $this;
    }

    /**
     * Get deliveryMethod value.
     *
     * @return string|null
     */
    public function getDeliveryMethod()
    {
        return $this->deliveryMethod;
    }

    /**
     * Set deliveryMethod value.
     *
     * @param string $deliveryMethod
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\RelatedToAllegroType
     */
    public function setDeliveryMethod($deliveryMethod = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryMethod) && !is_string($deliveryMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryMethod, true), gettype($deliveryMethod)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($deliveryMethod) && mb_strlen($deliveryMethod) > 128) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen($deliveryMethod)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($deliveryMethod) && mb_strlen($deliveryMethod) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($deliveryMethod)), __LINE__);
        }
        $this->deliveryMethod = $deliveryMethod;

        return $this;
    }
}
