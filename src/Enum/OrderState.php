<?php


namespace Coff\OandaWrapper\Enum;


class OrderState extends Enum
{
    const   _default    =   null,
            PENDING     =   'PENDING',
            FILLED      =   'FILLED',
            TRIGGERED   =   'TRIGGERED',
            CANCELLED   =   'CANCELLED';
}