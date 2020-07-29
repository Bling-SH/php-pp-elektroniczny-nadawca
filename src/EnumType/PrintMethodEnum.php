<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PrintMethodEnum EnumType.
 */
class PrintMethodEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'EACH_PARCEL_SEPARATELY'.
     *
     * @return string 'EACH_PARCEL_SEPARATELY'
     */
    const VALUE_EACH_PARCEL_SEPARATELY = 'EACH_PARCEL_SEPARATELY';
    /**
     * Constant for value 'ALL_PARCELS_IN_ONE_FILE'.
     *
     * @return string 'ALL_PARCELS_IN_ONE_FILE'
     */
    const VALUE_ALL_PARCELS_IN_ONE_FILE = 'ALL_PARCELS_IN_ONE_FILE';

    /**
     * Return allowed values.
     *
     * @uses self::VALUE_EACH_PARCEL_SEPARATELY
     * @uses self::VALUE_ALL_PARCELS_IN_ONE_FILE
     *
     * @return string[]
     */
    public static function getValidValues()
    {
        return [
            self::VALUE_EACH_PARCEL_SEPARATELY,
            self::VALUE_ALL_PARCELS_IN_ONE_FILE,
        ];
    }
}
