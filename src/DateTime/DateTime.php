<?php

namespace Coff\OandaWrapper\DateTime;

use DateTimeZone;

/**
 * Class DateTime
 *
 * Simple fix for high precision time values returned by Oanda's API
 *
 * @package Coff\OandaWrapper\DateTime
 */
class DateTime extends \DateTime
{
    public static function createFromFormat($format, $time, DateTimeZone $timezone = null)
    {
        if ($format == 'U.u') {
            [$U, $u] = explode('.', $time);

            $u = substr($u, 6);

            $time = $U . '.' . $u;
        }

        return parent::createFromFormat($format, $time, $timezone);
    }
}