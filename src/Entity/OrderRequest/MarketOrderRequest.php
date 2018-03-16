<?php


namespace Coff\OandaWrapper\Entity\OrderRequest;

use Coff\OandaWrapper\Entity\ClientExtensions;
use Coff\OandaWrapper\Entity\Details\StopLossDetails;
use Coff\OandaWrapper\Entity\Details\TakeProfitDetails;
use Coff\OandaWrapper\Entity\Details\TrailingStopLossDetails;
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

    /** @var ClientExtensions */
    protected $clientExtensions;

    /** @var TakeProfitDetails */
    protected $takeProfitOnFill;

    /** @var StopLossDetails */
    protected $stopLossOnFill;

    /** @var TrailingStopLossDetails */
    protected $trailingStopLossOnFill;

    /** @var ClientExtensions */
    protected $tradeClientExtensions;

    public function __construct()
    {
        $this->timeInForce = TimeInForce::FOK();
        $this->positionFill = OrderPositionFill::DEFAULT();
    }

    public function toJson(): \stdClass
    {
        $obj = new \stdClass();

        $obj->type = $this->type;
        $obj->instrument = (string) $this->instrument;
        $obj->units = $this->units;
        $obj->timeInForce = (string) $this->timeInForce;
        $obj->positionFill = (string) $this->positionFill;


        if (null !== $this->priceBound) {
            $obj->priceBound = (string) $this->priceBound;
        }

        if (null !== $this->clientExtensions) {
            $obj->clientExtensions = $this->clientExtensions->toJson();
        }

        if (null !== $this->takeProfitOnFill) {
            $obj->takeProfitOnFill = $this->takeProfitOnFill->toJson();
        }

        if (null != $this->stopLossOnFill) {
            $obj->stopLossOnFill = $this->stopLossOnFill->toJson();
        }

        if (null != $this->trailingStopLossOnFill) {
            $obj->trailingStopLossOnFill = $this->trailingStopLossOnFill->toJson();
        }

        return $obj;
    }

    /**
     * @return InstrumentName
     */
    public function getInstrument(): InstrumentName
    {
        return $this->instrument;
    }

    /**
     * @param InstrumentName $instrument
     * @return MarketOrderRequest
     */
    public function setInstrument(InstrumentName $instrument): MarketOrderRequest
    {
        $this->instrument = $instrument;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnits(): string
    {
        return $this->units;
    }

    /**
     * @param string $units
     * @return MarketOrderRequest
     */
    public function setUnits(string $units): MarketOrderRequest
    {
        $this->units = $units;
        return $this;
    }

    /**
     * @return TimeInForce
     */
    public function getTimeInForce(): TimeInForce
    {
        return $this->timeInForce;
    }

    /**
     * @param TimeInForce $timeInForce
     * @return MarketOrderRequest
     */
    public function setTimeInForce(TimeInForce $timeInForce): MarketOrderRequest
    {
        $this->timeInForce = $timeInForce;
        return $this;
    }

    /**
     * @return string
     */
    public function getPriceBound(): string
    {
        return $this->priceBound;
    }

    /**
     * @param string $priceBound
     * @return MarketOrderRequest
     */
    public function setPriceBound(string $priceBound): MarketOrderRequest
    {
        $this->priceBound = $priceBound;
        return $this;
    }

    /**
     * @return OrderPositionFill
     */
    public function getPositionFill(): OrderPositionFill
    {
        return $this->positionFill;
    }

    /**
     * @param OrderPositionFill $positionFill
     * @return MarketOrderRequest
     */
    public function setPositionFill(OrderPositionFill $positionFill): MarketOrderRequest
    {
        $this->positionFill = $positionFill;
        return $this;
    }

    /**
     * @return TakeProfitDetails
     */
    public function getTakeProfitOnFill(): TakeProfitDetails
    {
        return $this->takeProfitOnFill;
    }

    /**
     * @param TakeProfitDetails $takeProfitOnFill
     * @return MarketOrderRequest
     */
    public function setTakeProfitOnFill(TakeProfitDetails $takeProfitOnFill): MarketOrderRequest
    {
        $this->takeProfitOnFill = $takeProfitOnFill;
        return $this;
    }

    /**
     * @return StopLossDetails
     */
    public function getStopLossOnFill(): StopLossDetails
    {
        return $this->stopLossOnFill;
    }

    /**
     * @param StopLossDetails $stopLossOnFill
     * @return MarketOrderRequest
     */
    public function setStopLossOnFill(StopLossDetails $stopLossOnFill): MarketOrderRequest
    {
        $this->stopLossOnFill = $stopLossOnFill;
        return $this;
    }

    /**
     * @return ClientExtensions
     */
    public function getClientExtensions(): ClientExtensions
    {
        return $this->clientExtensions;
    }

    /**
     * @param ClientExtensions $clientExtensions
     * @return MarketOrderRequest
     */
    public function setClientExtensions(ClientExtensions $clientExtensions): MarketOrderRequest
    {
        $this->clientExtensions = $clientExtensions;
        return $this;
    }

    /**
     * @return TrailingStopLossDetails
     */
    public function getTrailingStopLossOnFill(): TrailingStopLossDetails
    {
        return $this->trailingStopLossOnFill;
    }

    /**
     * @param TrailingStopLossDetails $trailingStopLossOnFill
     * @return MarketOrderRequest
     */
    public function setTrailingStopLossOnFill(TrailingStopLossDetails $trailingStopLossOnFill): MarketOrderRequest
    {
        $this->trailingStopLossOnFill = $trailingStopLossOnFill;
        return $this;
    }

    /**
     * @return ClientExtensions
     */
    public function getTradeClientExtensions(): ClientExtensions
    {
        return $this->tradeClientExtensions;
    }

    /**
     * @param ClientExtensions $tradeClientExtensions
     * @return MarketOrderRequest
     */
    public function setTradeClientExtensions(ClientExtensions $tradeClientExtensions): MarketOrderRequest
    {
        $this->tradeClientExtensions = $tradeClientExtensions;
        return $this;
    }


}