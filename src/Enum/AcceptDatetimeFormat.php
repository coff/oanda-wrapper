<?php


namespace Coff\OandaWrapper\Enum;


/**
 * DateTime header
 *
 * Class AcceptDatetimeFormat
 * @package Coff\OandaWrapper\Enum
 */
class AcceptDatetimeFormat extends Enum
{
    const
        __default = self::UNIX,
        UNIX = "UNIX",     // If “UNIX” is specified DateTime fields will be specified or returned in the “12345678.000000123” format.
        RFC3339 = "RFC3339";  // If “RFC3339” is specified DateTime will be specified or returned in “YYYY-MM-DDTHH:MM:SS.nnnnnnnnnZ” format.
}