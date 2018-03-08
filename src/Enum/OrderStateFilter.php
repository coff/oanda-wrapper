<?php


namespace Coff\OandaWrapper\Enum;


class OrderStateFilter extends Enum
{
    const  __default    =   null,
        PENDING     =   'PENDING',
        FILLED      =   'FILLED',
        TRIGGERED   =   'TRIGGERED',
        CANCELLED   =   'CANCELLED',
        ALL         =   'ALL';
}