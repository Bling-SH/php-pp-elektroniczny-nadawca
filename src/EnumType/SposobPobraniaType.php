<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for sposobPobraniaType EnumType.
 */
class SposobPobraniaType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PRZEKAZ'.
     *
     * @return string 'PRZEKAZ'
     */
    const VALUE_PRZEKAZ = 'PRZEKAZ';
    /**
     * Constant for value 'RACHUNEK_BANKOWY'.
     *
     * @return string 'RACHUNEK_BANKOWY'
     */
    const VALUE_RACHUNEK_BANKOWY = 'RACHUNEK_BANKOWY';

    /**
     * Return allowed values.
     *
     * @uses self::VALUE_PRZEKAZ
     * @uses self::VALUE_RACHUNEK_BANKOWY
     *
     * @return string[]
     */
    public static function getValidValues()
    {
        return [
            self::VALUE_PRZEKAZ,
            self::VALUE_RACHUNEK_BANKOWY,
        ];
    }
}
