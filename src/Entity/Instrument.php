<?php


namespace Coff\OandaWrapper\Entity;


use Coff\OandaWrapper\Enum\InstrumentType;

class Instrument extends Entity
{
    /** @var InstrumentName */
    protected $name;

    /** @var InstrumentType */
    protected $type;

    /** @var string */
    protected $displayName;

    /** @var int */
    protected $pipLocation;

    /** @var int */
    protected $displayPrecision;

    /** @var int */
    protected $tradeUnitsPrecision;

    /** @var string decimal number */
    protected $minimumTradeSize;

    /** @var string decimal number */
    protected $maximumTrailingStopDistance;

    /** @var string decimal number */
    protected $minimumTrailingStopDistance;

    /** @var string decimal number */
    protected $maximumPositionSize;

    /** @var string decimal number */
    protected $maximumOrderUnits;

    /** @var string decimal number */
    protected $marginRate;

    /** @var InstrumentCommission */
    protected $commission;

}