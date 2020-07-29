<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getProfilListResponse StructType.
 */
class GetProfilListResponse extends AbstractStructBase
{
    /**
     * The profil
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType[]
     */
    public $profil;

    /**
     * Constructor method for getProfilListResponse.
     *
     * @uses GetProfilListResponse::setProfil()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType[] $profil
     */
    public function __construct(array $profil = [])
    {
        $this
            ->setProfil($profil);
    }

    /**
     * Get profil value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType[]
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * This method is responsible for validating the values passed to the setProfil method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProfil method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProfilForArrayConstraintsFromSetProfil(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getProfilListResponseProfilItem) {
            // validation for constraint: itemType
            if (!$getProfilListResponseProfilItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType) {
                $invalidValues[] = is_object($getProfilListResponseProfilItem) ? get_class($getProfilListResponseProfilItem) : sprintf('%s(%s)', gettype($getProfilListResponseProfilItem), var_export($getProfilListResponseProfilItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The profil property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set profil value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType[] $profil
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetProfilListResponse
     */
    public function setProfil(array $profil = [])
    {
        // validation for constraint: array
        if ('' !== ($profilArrayErrorMessage = self::validateProfilForArrayConstraintsFromSetProfil($profil))) {
            throw new \InvalidArgumentException($profilArrayErrorMessage, __LINE__);
        }
        $this->profil = $profil;

        return $this;
    }

    /**
     * Add item to profil value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\GetProfilListResponse
     */
    public function addToProfil(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType) {
            throw new \InvalidArgumentException(sprintf('The profil property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->profil[] = $item;

        return $this;
    }
}
