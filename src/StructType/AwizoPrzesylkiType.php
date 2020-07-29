<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for awizoPrzesylkiType StructType.
 */
class AwizoPrzesylkiType extends AbstractStructBase
{
    /**
     * The dataPierwszegoAwizowania.
     *
     * @var string
     */
    public $dataPierwszegoAwizowania;
    /**
     * The dataDrugiegoAwizowania.
     *
     * @var string
     */
    public $dataDrugiegoAwizowania;
    /**
     * The miejscePozostawienia.
     *
     * @var string
     */
    public $miejscePozostawienia;
    /**
     * The idPlacowkaPocztowaWydajaca.
     *
     * @var int
     */
    public $idPlacowkaPocztowaWydajaca;

    /**
     * Constructor method for awizoPrzesylkiType.
     *
     * @uses AwizoPrzesylkiType::setDataPierwszegoAwizowania()
     * @uses AwizoPrzesylkiType::setDataDrugiegoAwizowania()
     * @uses AwizoPrzesylkiType::setMiejscePozostawienia()
     * @uses AwizoPrzesylkiType::setIdPlacowkaPocztowaWydajaca()
     *
     * @param string $dataPierwszegoAwizowania
     * @param string $dataDrugiegoAwizowania
     * @param string $miejscePozostawienia
     * @param int    $idPlacowkaPocztowaWydajaca
     */
    public function __construct($dataPierwszegoAwizowania = null, $dataDrugiegoAwizowania = null, $miejscePozostawienia = null, $idPlacowkaPocztowaWydajaca = null)
    {
        $this
            ->setDataPierwszegoAwizowania($dataPierwszegoAwizowania)
            ->setDataDrugiegoAwizowania($dataDrugiegoAwizowania)
            ->setMiejscePozostawienia($miejscePozostawienia)
            ->setIdPlacowkaPocztowaWydajaca($idPlacowkaPocztowaWydajaca);
    }

    /**
     * Get dataPierwszegoAwizowania value.
     *
     * @return string|null
     */
    public function getDataPierwszegoAwizowania()
    {
        return $this->dataPierwszegoAwizowania;
    }

    /**
     * Set dataPierwszegoAwizowania value.
     *
     * @param string $dataPierwszegoAwizowania
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AwizoPrzesylkiType
     */
    public function setDataPierwszegoAwizowania($dataPierwszegoAwizowania = null)
    {
        // validation for constraint: string
        if (!is_null($dataPierwszegoAwizowania) && !is_string($dataPierwszegoAwizowania)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataPierwszegoAwizowania, true), gettype($dataPierwszegoAwizowania)), __LINE__);
        }
        $this->dataPierwszegoAwizowania = $dataPierwszegoAwizowania;

        return $this;
    }

    /**
     * Get dataDrugiegoAwizowania value.
     *
     * @return string|null
     */
    public function getDataDrugiegoAwizowania()
    {
        return $this->dataDrugiegoAwizowania;
    }

    /**
     * Set dataDrugiegoAwizowania value.
     *
     * @param string $dataDrugiegoAwizowania
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AwizoPrzesylkiType
     */
    public function setDataDrugiegoAwizowania($dataDrugiegoAwizowania = null)
    {
        // validation for constraint: string
        if (!is_null($dataDrugiegoAwizowania) && !is_string($dataDrugiegoAwizowania)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataDrugiegoAwizowania, true), gettype($dataDrugiegoAwizowania)), __LINE__);
        }
        $this->dataDrugiegoAwizowania = $dataDrugiegoAwizowania;

        return $this;
    }

    /**
     * Get miejscePozostawienia value.
     *
     * @return string|null
     */
    public function getMiejscePozostawienia()
    {
        return $this->miejscePozostawienia;
    }

    /**
     * Set miejscePozostawienia value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\MiejscaPozostawieniaAwizoEnum::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\MiejscaPozostawieniaAwizoEnum::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $miejscePozostawienia
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AwizoPrzesylkiType
     */
    public function setMiejscePozostawienia($miejscePozostawienia = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\MiejscaPozostawieniaAwizoEnum::valueIsValid($miejscePozostawienia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\MiejscaPozostawieniaAwizoEnum', is_array($miejscePozostawienia) ? implode(', ', $miejscePozostawienia) : var_export($miejscePozostawienia, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\MiejscaPozostawieniaAwizoEnum::getValidValues())), __LINE__);
        }
        $this->miejscePozostawienia = $miejscePozostawienia;

        return $this;
    }

    /**
     * Get idPlacowkaPocztowaWydajaca value.
     *
     * @return int|null
     */
    public function getIdPlacowkaPocztowaWydajaca()
    {
        return $this->idPlacowkaPocztowaWydajaca;
    }

    /**
     * Set idPlacowkaPocztowaWydajaca value.
     *
     * @param int $idPlacowkaPocztowaWydajaca
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AwizoPrzesylkiType
     */
    public function setIdPlacowkaPocztowaWydajaca($idPlacowkaPocztowaWydajaca = null)
    {
        // validation for constraint: int
        if (!is_null($idPlacowkaPocztowaWydajaca) && !(is_int($idPlacowkaPocztowaWydajaca) || ctype_digit($idPlacowkaPocztowaWydajaca))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idPlacowkaPocztowaWydajaca, true), gettype($idPlacowkaPocztowaWydajaca)), __LINE__);
        }
        $this->idPlacowkaPocztowaWydajaca = $idPlacowkaPocztowaWydajaca;

        return $this;
    }
}
