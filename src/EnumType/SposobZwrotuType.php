<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for sposobZwrotuType EnumType.
 */
class SposobZwrotuType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'LADOWO_MORSKA'.
     *
     * @return string 'LADOWO_MORSKA'
     */
    const VALUE_LADOWO_MORSKA = 'LADOWO_MORSKA';
    /**
     * Constant for value 'LOTNICZA'.
     *
     * @return string 'LOTNICZA'
     */
    const VALUE_LOTNICZA = 'LOTNICZA';

    /**
     * Return allowed values.
     *
     * @uses self::VALUE_LADOWO_MORSKA
     * @uses self::VALUE_LOTNICZA
     *
     * @return string[]
     */
    public static function getValidValues()
    {
        return [
            self::VALUE_LADOWO_MORSKA,
            self::VALUE_LOTNICZA,
        ];
    }
}
