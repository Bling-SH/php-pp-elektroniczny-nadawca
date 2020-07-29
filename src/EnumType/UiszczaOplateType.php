<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for uiszczaOplateType EnumType.
 */
class UiszczaOplateType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NADAWCA'.
     *
     * @return string 'NADAWCA'
     */
    const VALUE_NADAWCA = 'NADAWCA';
    /**
     * Constant for value 'ADRESAT'.
     *
     * @return string 'ADRESAT'
     */
    const VALUE_ADRESAT = 'ADRESAT';

    /**
     * Return allowed values.
     *
     * @uses self::VALUE_NADAWCA
     * @uses self::VALUE_ADRESAT
     *
     * @return string[]
     */
    public static function getValidValues()
    {
        return [
            self::VALUE_NADAWCA,
            self::VALUE_ADRESAT,
        ];
    }
}
