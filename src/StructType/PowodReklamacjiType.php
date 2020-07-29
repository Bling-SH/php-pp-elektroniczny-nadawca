<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for powodReklamacjiType StructType.
 */
class PowodReklamacjiType extends AbstractStructBase
{
    /**
     * The powodSzczegolowy
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PowodSzczegolowyType[]
     */
    public $powodSzczegolowy;
    /**
     * The idPowodGlowny.
     *
     * @var int
     */
    public $idPowodGlowny;
    /**
     * The powodGlownyOpis.
     *
     * @var string
     */
    public $powodGlownyOpis;

    /**
     * Constructor method for powodReklamacjiType.
     *
     * @uses PowodReklamacjiType::setPowodSzczegolowy()
     * @uses PowodReklamacjiType::setIdPowodGlowny()
     * @uses PowodReklamacjiType::setPowodGlownyOpis()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PowodSzczegolowyType[] $powodSzczegolowy
     * @param int                                                                        $idPowodGlowny
     * @param string                                                                     $powodGlownyOpis
     */
    public function __construct(array $powodSzczegolowy = [], $idPowodGlowny = null, $powodGlownyOpis = null)
    {
        $this
            ->setPowodSzczegolowy($powodSzczegolowy)
            ->setIdPowodGlowny($idPowodGlowny)
            ->setPowodGlownyOpis($powodGlownyOpis);
    }

    /**
     * Get powodSzczegolowy value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PowodSzczegolowyType[]
     */
    public function getPowodSzczegolowy()
    {
        return $this->powodSzczegolowy;
    }

    /**
     * This method is responsible for validating the values passed to the setPowodSzczegolowy method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPowodSzczegolowy method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePowodSzczegolowyForArrayConstraintsFromSetPowodSzczegolowy(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $powodReklamacjiTypePowodSzczegolowyItem) {
            // validation for constraint: itemType
            if (!$powodReklamacjiTypePowodSzczegolowyItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PowodSzczegolowyType) {
                $invalidValues[] = is_object($powodReklamacjiTypePowodSzczegolowyItem) ? get_class($powodReklamacjiTypePowodSzczegolowyItem) : sprintf('%s(%s)', gettype($powodReklamacjiTypePowodSzczegolowyItem), var_export($powodReklamacjiTypePowodSzczegolowyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The powodSzczegolowy property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PowodSzczegolowyType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set powodSzczegolowy value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PowodSzczegolowyType[] $powodSzczegolowy
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PowodReklamacjiType
     */
    public function setPowodSzczegolowy(array $powodSzczegolowy = [])
    {
        // validation for constraint: array
        if ('' !== ($powodSzczegolowyArrayErrorMessage = self::validatePowodSzczegolowyForArrayConstraintsFromSetPowodSzczegolowy($powodSzczegolowy))) {
            throw new \InvalidArgumentException($powodSzczegolowyArrayErrorMessage, __LINE__);
        }
        $this->powodSzczegolowy = $powodSzczegolowy;

        return $this;
    }

    /**
     * Add item to powodSzczegolowy value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PowodReklamacjiType
     */
    public function addToPowodSzczegolowy(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PowodSzczegolowyType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PowodSzczegolowyType) {
            throw new \InvalidArgumentException(sprintf('The powodSzczegolowy property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PowodSzczegolowyType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->powodSzczegolowy[] = $item;

        return $this;
    }

    /**
     * Get idPowodGlowny value.
     *
     * @return int|null
     */
    public function getIdPowodGlowny()
    {
        return $this->idPowodGlowny;
    }

    /**
     * Set idPowodGlowny value.
     *
     * @param int $idPowodGlowny
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PowodReklamacjiType
     */
    public function setIdPowodGlowny($idPowodGlowny = null)
    {
        // validation for constraint: int
        if (!is_null($idPowodGlowny) && !(is_int($idPowodGlowny) || ctype_digit($idPowodGlowny))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idPowodGlowny, true), gettype($idPowodGlowny)), __LINE__);
        }
        $this->idPowodGlowny = $idPowodGlowny;

        return $this;
    }

    /**
     * Get powodGlownyOpis value.
     *
     * @return string|null
     */
    public function getPowodGlownyOpis()
    {
        return $this->powodGlownyOpis;
    }

    /**
     * Set powodGlownyOpis value.
     *
     * @param string $powodGlownyOpis
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PowodReklamacjiType
     */
    public function setPowodGlownyOpis($powodGlownyOpis = null)
    {
        // validation for constraint: string
        if (!is_null($powodGlownyOpis) && !is_string($powodGlownyOpis)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($powodGlownyOpis, true), gettype($powodGlownyOpis)), __LINE__);
        }
        $this->powodGlownyOpis = $powodGlownyOpis;

        return $this;
    }
}
