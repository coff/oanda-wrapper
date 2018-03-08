<?php


namespace Coff\OandaWrapper\Enum;


class OrderType extends Enum
{
    const
        __default = null,
        MARKET = 'MARKET',
        LIMIT = 'LIMIT',
        STOP = 'STOP',
        MARKET_IF_TOUCHED = 'MARKET_IF_TOUCHED',
        TAKE_PROFIT = 'TAKE_PROFIT',
        STOP_LOSS = 'STOP_LOSS',
        TRAILING_STOP_LOSS = 'TRAILING_STOP_LOSS';
}