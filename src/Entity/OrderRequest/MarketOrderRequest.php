<?php


namespace Coff\OandaWrapper\Entity\OrderRequest;


use Coff\OandaWrapper\Enum\OrderPositionFill;
use Coff\OandaWrapper\Enum\TimeInForce;


/**
 * A MarketOrderRequest specifies the parameters that may be set when creating a Market Order.
 */
class MarketOrderRequest extends OrderRequest
{
    use OrderRequestDetailsTrait;
    use TradeClientExtensionsTrait;
    use PriceBoundTrait;

    protected $type='MARKET';

    public function __construct()
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $this->timeInForce = TimeInForce::FOK();
        /** @noinspection PhpUndefinedMethodInspection */
        $this->positionFill = OrderPositionFill::DEFAULT();
    }

    public function toJson(): \stdClass
    {
        $obj = parent::toJson();

        $this->fillPriceBound($obj);
        $this->fillOrderRequestDetails($obj);
        $this->fillTradeClientExtensions($obj);

        if (null !== $this->tradeClientExtensions) {
            $obj->tradeClientExtensions = $this->tradeClientExtensions->toJson();
        }

        return $obj;
    }



}