<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for opakowanieKurierskaType EnumType.
 */
class OpakowanieKurierskaType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'FIRMOWA_DO_1KG'.
     *
     * @return string 'FIRMOWA_DO_1KG'
     */
    const VALUE_FIRMOWA_DO_1_KG = 'FIRMOWA_DO_1KG';

    /**
     * Return allowed values.
     *
     * @uses self::VALUE_FIRMOWA_DO_1_KG
     *
     * @return string[]
     */
    public static function getValidValues()
    {
        return [
            self::VALUE_FIRMOWA_DO_1_KG,
        ];
    }
}
