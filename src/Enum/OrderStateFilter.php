<?php


namespace Coff\OandaWrapper\Enum;


class OrderStateFilter extends Enum
{
    const   _default    =   null,
        PENDING     =   'PENDING',
        FILLED      =   'FILLED',
        TRIGGERED   =   'TRIGGERED',
        CANCELLED   =   'CANCELLED',
        ALL         =   'ALL';
}