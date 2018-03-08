<?php


namespace Coff\OandaWrapper\Enum;


class TimeInForce extends Enum
{
    const  
        __default = null,
        GTC = "GTC", // The Order is "Good unTil Cancelled"
        GTD = "GTD", // The Order is “Good unTil Date” and will be cancelled at the provided time
        GFD = "GFD", // The Order is “Good For Day” and will be cancelled at 5pm New York time
        FOK = "FOK", // The Order must be immediately “Filled Or Killed”
        IOC = "IOC"; // The Order must be “Immediatedly paritally filled Or Cancelled”
}