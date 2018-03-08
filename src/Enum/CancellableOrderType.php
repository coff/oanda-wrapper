<?php


namespace Coff\OandaWrapper\Enum;

class CancellableOrderType extends Enum
{
    const   _default            =   null,
        LIMIT               =   'LIMIT',
        STOP                =   'STOP',
        MARKET_IF_TOUCHED   =   'MARKET_IF_TOUCHED',
        TAKE_PROFIT         =   'TAKE_PROFIT',
        STOP_LOSS           =   'STOP_LOSS',
        TRAILING_STOP_LOSS  =   'TRAILING_STOP_LOSS';
}