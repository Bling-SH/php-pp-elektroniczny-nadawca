<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for siecPlacowekEnum EnumType
 * Meta information extracted from the WSDL
 * - documentation: Okresla do jakiej sieci nalezy placowka.
 */
class SiecPlacowekEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'POCZTAPOLSKA'.
     *
     * @return string 'POCZTAPOLSKA'
     */
    const VALUE_POCZTAPOLSKA = 'POCZTAPOLSKA';
    /**
     * Constant for value 'ORLEN'.
     *
     * @return string 'ORLEN'
     */
    const VALUE_ORLEN = 'ORLEN';

    /**
     * Return allowed values.
     *
     * @uses self::VALUE_POCZTAPOLSKA
     * @uses self::VALUE_ORLEN
     *
     * @return string[]
     */
    public static function getValidValues()
    {
        return [
            self::VALUE_POCZTAPOLSKA,
            self::VALUE_ORLEN,
        ];
    }
}
