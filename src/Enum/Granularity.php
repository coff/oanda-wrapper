<?php


namespace Coff\OandaWrapper\Enum;


class Granularity extends Enum
{
    const
        __default = self::SEC_5,
        SEC_5  = 'S5',
        SEC_10 = 'S10',
        SEC_15 = 'S15',
        SEC_30 = 'S30',
        MIN_1  = 'M1',
        MIN_2  = 'M2',
        MIN_4  = 'M4',
        MIN_5  = 'M5',
        MIN_10 = 'M10',
        MIN_15 = 'M15',
        MIN_30 = 'M30',
        HOUR_1 = 'H1',
        HOUR_2 = 'H2',
        HOUR_3 = 'H3',
        HOUR_4 = 'H4',
        HOUR_6 = 'H6',
        HOUR_8 = 'H8',
        HOUR_12 = 'H12',
        DAY    = 'D',
        WEEK   = 'W',
        MONTH  = 'M';

                /*
        S5	5 second candlesticks, minute alignment
        S10	10 second candlesticks, minute alignment
        S15	15 second candlesticks, minute alignment
        S30	30 second candlesticks, minute alignment
        M1	1 minute candlesticks, minute alignment
        M2	2 minute candlesticks, hour alignment
        M4	4 minute candlesticks, hour alignment
        M5	5 minute candlesticks, hour alignment
        M10	10 minute candlesticks, hour alignment
        M15	15 minute candlesticks, hour alignment
        M30	30 minute candlesticks, hour alignment
        H1	1 hour candlesticks, hour alignment
        H2	2 hour candlesticks, day alignment
        H3	3 hour candlesticks, day alignment
        H4	4 hour candlesticks, day alignment
        H6	6 hour candlesticks, day alignment
        H8	8 hour candlesticks, day alignment
        H12	12 hour candlesticks, day alignment
        D	1 day candlesticks, day alignment
        W	1 week candlesticks, aligned to start of week
        M	1 month candlesticks, aligned to first day of the month
                */
}