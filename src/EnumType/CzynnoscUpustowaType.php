<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for czynnoscUpustowaType EnumType.
 */
class CzynnoscUpustowaType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'POSORTOWANA'.
     *
     * @return string 'POSORTOWANA'
     */
    const VALUE_POSORTOWANA = 'POSORTOWANA';

    /**
     * Return allowed values.
     *
     * @uses self::VALUE_POSORTOWANA
     *
     * @return string[]
     */
    public static function getValidValues()
    {
        return [
            self::VALUE_POSORTOWANA,
        ];
    }
}
