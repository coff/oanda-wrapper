<?php


namespace Coff\OandaWrapper\Entity\OrderRequest;

use Coff\OandaWrapper\Entity\Details\StopLossDetails;
use Coff\OandaWrapper\Entity\Details\TakeProfitDetails;
use Coff\OandaWrapper\Entity\InstrumentName;
use Coff\OandaWrapper\Enum\OrderPositionFill;
use Coff\OandaWrapper\Enum\TimeInForce;


/**
 * A MarketOrderRequest specifies the parameters that may be set when creating a Market Order.
 */
class MarketOrderRequest extends OrderRequest
{
    protected $type='MARKET';

    /** @var InstrumentName */
    protected $instrument;

    /** @var string */
    protected $units;

    /** @var TimeInForce */
    protected $timeInForce;

    /** @var string */
    protected $priceBound;

    /** @var OrderPositionFill */
    protected $positionFill;

    /** @var [] */
    protected $clientExtensions;

    /** @var TakeProfitDetails */
    protected $takeProfitOnFill;

    /** @var StopLossDetails */
    protected $stopLossOnFill;

    public function __construct()
    {
        $this->timeInForce = TimeInForce::FOK();
    }

    public function toJson(): string
    {
        return <<<JSON
{   
    type: "$this->type",
    instrument: "$this->instrument",
    units: "$this->units",
    timeInForce: "$this->timeInForce",
    priceBound: "$this->priceBound",
}
JSON;

    }
}