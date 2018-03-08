<?php


namespace Coff\OandaWrapper\Enum;


class OrderStateFilter extends Enum
{
    const
        __default = self::ALL,
        PENDING = 'PENDING',
        FILLED = 'FILLED',
        TRIGGERED = 'TRIGGERED',
        CANCELLED = 'CANCELLED',
        ALL = 'ALL';
}