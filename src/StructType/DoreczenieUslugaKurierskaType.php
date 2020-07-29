<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doreczenieUslugaKurierskaType StructType.
 */
class DoreczenieUslugaKurierskaType extends AbstractStructBase
{
    /**
     * The oczekiwanyTerminDoreczenia.
     *
     * @var string
     */
    public $oczekiwanyTerminDoreczenia;
    /**
     * The oczekiwanaGodzinaDoreczenia.
     *
     * @var string
     */
    public $oczekiwanaGodzinaDoreczenia;
    /**
     * The wSobote.
     *
     * @var bool
     */
    public $wSobote;
    /**
     * The w90Minut.
     *
     * @var bool
     */
    public $w90Minut;
    /**
     * The wNiedzieleLubSwieto.
     *
     * @var bool
     */
    public $wNiedzieleLubSwieto;
    /**
     * The doRakWlasnych.
     *
     * @var bool
     */
    public $doRakWlasnych;
    /**
     * The wGodzinachOd20Do7.
     *
     * @var bool
     */
    public $wGodzinachOd20Do7;
    /**
     * The po17.
     *
     * @var bool
     */
    public $po17;

    /**
     * Constructor method for doreczenieUslugaKurierskaType.
     *
     * @uses DoreczenieUslugaKurierskaType::setOczekiwanyTerminDoreczenia()
     * @uses DoreczenieUslugaKurierskaType::setOczekiwanaGodzinaDoreczenia()
     * @uses DoreczenieUslugaKurierskaType::setWSobote()
     * @uses DoreczenieUslugaKurierskaType::setW90Minut()
     * @uses DoreczenieUslugaKurierskaType::setWNiedzieleLubSwieto()
     * @uses DoreczenieUslugaKurierskaType::setDoRakWlasnych()
     * @uses DoreczenieUslugaKurierskaType::setWGodzinachOd20Do7()
     * @uses DoreczenieUslugaKurierskaType::setPo17()
     *
     * @param string $oczekiwanyTerminDoreczenia
     * @param string $oczekiwanaGodzinaDoreczenia
     * @param bool   $wSobote
     * @param bool   $w90Minut
     * @param bool   $wNiedzieleLubSwieto
     * @param bool   $doRakWlasnych
     * @param bool   $wGodzinachOd20Do7
     * @param bool   $po17
     */
    public function __construct($oczekiwanyTerminDoreczenia = null, $oczekiwanaGodzinaDoreczenia = null, $wSobote = null, $w90Minut = null, $wNiedzieleLubSwieto = null, $doRakWlasnych = null, $wGodzinachOd20Do7 = null, $po17 = null)
    {
        $this
            ->setOczekiwanyTerminDoreczenia($oczekiwanyTerminDoreczenia)
            ->setOczekiwanaGodzinaDoreczenia($oczekiwanaGodzinaDoreczenia)
            ->setWSobote($wSobote)
            ->setW90Minut($w90Minut)
            ->setWNiedzieleLubSwieto($wNiedzieleLubSwieto)
            ->setDoRakWlasnych($doRakWlasnych)
            ->setWGodzinachOd20Do7($wGodzinachOd20Do7)
            ->setPo17($po17);
    }

    /**
     * Get oczekiwanyTerminDoreczenia value.
     *
     * @return string|null
     */
    public function getOczekiwanyTerminDoreczenia()
    {
        return $this->oczekiwanyTerminDoreczenia;
    }

    /**
     * Set oczekiwanyTerminDoreczenia value.
     *
     * @param string $oczekiwanyTerminDoreczenia
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczenieUslugaKurierskaType
     */
    public function setOczekiwanyTerminDoreczenia($oczekiwanyTerminDoreczenia = null)
    {
        // validation for constraint: string
        if (!is_null($oczekiwanyTerminDoreczenia) && !is_string($oczekiwanyTerminDoreczenia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oczekiwanyTerminDoreczenia, true), gettype($oczekiwanyTerminDoreczenia)), __LINE__);
        }
        $this->oczekiwanyTerminDoreczenia = $oczekiwanyTerminDoreczenia;

        return $this;
    }

    /**
     * Get oczekiwanaGodzinaDoreczenia value.
     *
     * @return string|null
     */
    public function getOczekiwanaGodzinaDoreczenia()
    {
        return $this->oczekiwanaGodzinaDoreczenia;
    }

    /**
     * Set oczekiwanaGodzinaDoreczenia value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\OczekiwanaGodzinaDoreczeniaUslugiType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\OczekiwanaGodzinaDoreczeniaUslugiType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $oczekiwanaGodzinaDoreczenia
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczenieUslugaKurierskaType
     */
    public function setOczekiwanaGodzinaDoreczenia($oczekiwanaGodzinaDoreczenia = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\OczekiwanaGodzinaDoreczeniaUslugiType::valueIsValid($oczekiwanaGodzinaDoreczenia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\OczekiwanaGodzinaDoreczeniaUslugiType', is_array($oczekiwanaGodzinaDoreczenia) ? implode(', ', $oczekiwanaGodzinaDoreczenia) : var_export($oczekiwanaGodzinaDoreczenia, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\OczekiwanaGodzinaDoreczeniaUslugiType::getValidValues())), __LINE__);
        }
        $this->oczekiwanaGodzinaDoreczenia = $oczekiwanaGodzinaDoreczenia;

        return $this;
    }

    /**
     * Get wSobote value.
     *
     * @return bool|null
     */
    public function getWSobote()
    {
        return $this->wSobote;
    }

    /**
     * Set wSobote value.
     *
     * @param bool $wSobote
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczenieUslugaKurierskaType
     */
    public function setWSobote($wSobote = null)
    {
        // validation for constraint: boolean
        if (!is_null($wSobote) && !is_bool($wSobote)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($wSobote, true), gettype($wSobote)), __LINE__);
        }
        $this->wSobote = $wSobote;

        return $this;
    }

    /**
     * Get w90Minut value.
     *
     * @return bool|null
     */
    public function getW90Minut()
    {
        return $this->w90Minut;
    }

    /**
     * Set w90Minut value.
     *
     * @param bool $w90Minut
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczenieUslugaKurierskaType
     */
    public function setW90Minut($w90Minut = null)
    {
        // validation for constraint: boolean
        if (!is_null($w90Minut) && !is_bool($w90Minut)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($w90Minut, true), gettype($w90Minut)), __LINE__);
        }
        $this->w90Minut = $w90Minut;

        return $this;
    }

    /**
     * Get wNiedzieleLubSwieto value.
     *
     * @return bool|null
     */
    public function getWNiedzieleLubSwieto()
    {
        return $this->wNiedzieleLubSwieto;
    }

    /**
     * Set wNiedzieleLubSwieto value.
     *
     * @param bool $wNiedzieleLubSwieto
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczenieUslugaKurierskaType
     */
    public function setWNiedzieleLubSwieto($wNiedzieleLubSwieto = null)
    {
        // validation for constraint: boolean
        if (!is_null($wNiedzieleLubSwieto) && !is_bool($wNiedzieleLubSwieto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($wNiedzieleLubSwieto, true), gettype($wNiedzieleLubSwieto)), __LINE__);
        }
        $this->wNiedzieleLubSwieto = $wNiedzieleLubSwieto;

        return $this;
    }

    /**
     * Get doRakWlasnych value.
     *
     * @return bool|null
     */
    public function getDoRakWlasnych()
    {
        return $this->doRakWlasnych;
    }

    /**
     * Set doRakWlasnych value.
     *
     * @param bool $doRakWlasnych
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczenieUslugaKurierskaType
     */
    public function setDoRakWlasnych($doRakWlasnych = null)
    {
        // validation for constraint: boolean
        if (!is_null($doRakWlasnych) && !is_bool($doRakWlasnych)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($doRakWlasnych, true), gettype($doRakWlasnych)), __LINE__);
        }
        $this->doRakWlasnych = $doRakWlasnych;

        return $this;
    }

    /**
     * Get wGodzinachOd20Do7 value.
     *
     * @return bool|null
     */
    public function getWGodzinachOd20Do7()
    {
        return $this->wGodzinachOd20Do7;
    }

    /**
     * Set wGodzinachOd20Do7 value.
     *
     * @param bool $wGodzinachOd20Do7
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczenieUslugaKurierskaType
     */
    public function setWGodzinachOd20Do7($wGodzinachOd20Do7 = null)
    {
        // validation for constraint: boolean
        if (!is_null($wGodzinachOd20Do7) && !is_bool($wGodzinachOd20Do7)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($wGodzinachOd20Do7, true), gettype($wGodzinachOd20Do7)), __LINE__);
        }
        $this->wGodzinachOd20Do7 = $wGodzinachOd20Do7;

        return $this;
    }

    /**
     * Get po17 value.
     *
     * @return bool|null
     */
    public function getPo17()
    {
        return $this->po17;
    }

    /**
     * Set po17 value.
     *
     * @param bool $po17
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DoreczenieUslugaKurierskaType
     */
    public function setPo17($po17 = null)
    {
        // validation for constraint: boolean
        if (!is_null($po17) && !is_bool($po17)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($po17, true), gettype($po17)), __LINE__);
        }
        $this->po17 = $po17;

        return $this;
    }
}
