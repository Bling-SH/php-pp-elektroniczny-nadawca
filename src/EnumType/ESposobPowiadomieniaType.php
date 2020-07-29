<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for eSposobPowiadomieniaType EnumType.
 */
class ESposobPowiadomieniaType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SMS'.
     *
     * @return string 'SMS'
     */
    const VALUE_SMS = 'SMS';
    /**
     * Constant for value 'EMAIL'.
     *
     * @return string 'EMAIL'
     */
    const VALUE_EMAIL = 'EMAIL';

    /**
     * Return allowed values.
     *
     * @uses self::VALUE_SMS
     * @uses self::VALUE_EMAIL
     *
     * @return string[]
     */
    public static function getValidValues()
    {
        return [
            self::VALUE_SMS,
            self::VALUE_EMAIL,
        ];
    }
}
