<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sendEnvelope StructType.
 */
class SendEnvelope extends AbstractStructBase
{
    /**
     * The urzadNadania
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var int
     */
    public $urzadNadania;
    /**
     * The pakiet
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PakietType[]
     */
    public $pakiet;
    /**
     * The idBufor
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var int
     */
    public $idBufor;
    /**
     * The profil
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType
     */
    public $profil;

    /**
     * Constructor method for sendEnvelope.
     *
     * @uses SendEnvelope::setUrzadNadania()
     * @uses SendEnvelope::setPakiet()
     * @uses SendEnvelope::setIdBufor()
     * @uses SendEnvelope::setProfil()
     *
     * @param int                                                              $urzadNadania
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PakietType[] $pakiet
     * @param int                                                              $idBufor
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType   $profil
     */
    public function __construct($urzadNadania = null, array $pakiet = [], $idBufor = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType $profil = null)
    {
        $this
            ->setUrzadNadania($urzadNadania)
            ->setPakiet($pakiet)
            ->setIdBufor($idBufor)
            ->setProfil($profil);
    }

    /**
     * Get urzadNadania value.
     *
     * @return int|null
     */
    public function getUrzadNadania()
    {
        return $this->urzadNadania;
    }

    /**
     * Set urzadNadania value.
     *
     * @param int $urzadNadania
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SendEnvelope
     */
    public function setUrzadNadania($urzadNadania = null)
    {
        // validation for constraint: int
        if (!is_null($urzadNadania) && !(is_int($urzadNadania) || ctype_digit($urzadNadania))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($urzadNadania, true), gettype($urzadNadania)), __LINE__);
        }
        $this->urzadNadania = $urzadNadania;

        return $this;
    }

    /**
     * Get pakiet value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PakietType[]|null
     */
    public function getPakiet()
    {
        return $this->pakiet;
    }

    /**
     * This method is responsible for validating the values passed to the setPakiet method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPakiet method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePakietForArrayConstraintsFromSetPakiet(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sendEnvelopePakietItem) {
            // validation for constraint: itemType
            if (!$sendEnvelopePakietItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PakietType) {
                $invalidValues[] = is_object($sendEnvelopePakietItem) ? get_class($sendEnvelopePakietItem) : sprintf('%s(%s)', gettype($sendEnvelopePakietItem), var_export($sendEnvelopePakietItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The pakiet property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PakietType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set pakiet value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PakietType[] $pakiet
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SendEnvelope
     */
    public function setPakiet(array $pakiet = [])
    {
        // validation for constraint: array
        if ('' !== ($pakietArrayErrorMessage = self::validatePakietForArrayConstraintsFromSetPakiet($pakiet))) {
            throw new \InvalidArgumentException($pakietArrayErrorMessage, __LINE__);
        }
        $this->pakiet = $pakiet;

        return $this;
    }

    /**
     * Add item to pakiet value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SendEnvelope
     */
    public function addToPakiet(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PakietType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PakietType) {
            throw new \InvalidArgumentException(sprintf('The pakiet property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PakietType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->pakiet[] = $item;

        return $this;
    }

    /**
     * Get idBufor value.
     *
     * @return int|null
     */
    public function getIdBufor()
    {
        return $this->idBufor;
    }

    /**
     * Set idBufor value.
     *
     * @param int $idBufor
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SendEnvelope
     */
    public function setIdBufor($idBufor = null)
    {
        // validation for constraint: int
        if (!is_null($idBufor) && !(is_int($idBufor) || ctype_digit($idBufor))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idBufor, true), gettype($idBufor)), __LINE__);
        }
        $this->idBufor = $idBufor;

        return $this;
    }

    /**
     * Get profil value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType|null
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Set profil value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType $profil
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SendEnvelope
     */
    public function setProfil(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\ProfilType $profil = null)
    {
        $this->profil = $profil;

        return $this;
    }
}
