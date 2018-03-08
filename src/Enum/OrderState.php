<?php


namespace Coff\OandaWrapper\Enum;


class OrderState extends Enum
{
    const  __default    =   null,
            PENDING     =   'PENDING',
            FILLED      =   'FILLED',
            TRIGGERED   =   'TRIGGERED',
            CANCELLED   =   'CANCELLED';
}