<?php


namespace Coff\OandaWrapper\Enum;


class OrderState extends Enum
{
    const  __default = self::UNKNOWN,
        UNKNOWN = '',
        PENDING = 'PENDING',
        FILLED = 'FILLED',
        TRIGGERED = 'TRIGGERED',
        CANCELLED = 'CANCELLED';
}