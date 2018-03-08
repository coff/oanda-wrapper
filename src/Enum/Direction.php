<?php


namespace Coff\OandaWrapper\Enum;


class Direction extends Enum
{
    const  __default    =   null,
            LONG        =   'LONG',  // A long Order is used to to buy units of an Instrument. A Trade is long when it has bought units of an Instrument.
            SHORT       =   'SHORT'; // A short Order is used to to sell units of an Instrument. A Trade is short when it has sold units of an Instrument.
}