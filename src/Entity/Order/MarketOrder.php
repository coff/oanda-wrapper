<?php


namespace Coff\OandaWrapper\Entity\Order;


use Coff\OandaWrapper\Entity\InstrumentName;

class MarketOrder extends Order
{
    /** @var InstrumentName */
    protected $instrument;

    /** @var string */
    protected $units;


    protected $timeInForce;

    protected $priceBound;

    protected $positionFill;

    protected $tradeClose;

    protected $longPositionCloseout;

    protected $shortPositionCloseout;

    protected $marginCloseout;

    protected $delayedTradeClose;

    protected $takeProfitOnFill;

    protected $stopLossOnFill;

    protected $trailingStopLossOnFill;

    protected $tradeClientExtensions;

    protected $fillingTransactionId;

    protected $filledTime;

    protected $tradeOpenedId;

    protected $tradeReducedId;

    /** @var array */
    protected $tradeClosedIds;

    protected $cancellingTransactionId;

    /** @var \DateTime */
    protected $cancelledTime;

}