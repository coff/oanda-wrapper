<?php


namespace Coff\OandaWrapper\Entity\OrderRequest;


class MarkedIfTouchedOrderRequest extends OrderRequest
{
    use OrderRequestDetailsTrait;
    use TriggerConditionTrait;
    use TradeClientExtensionsTrait;
    use PriceTrait;
    use PriceBoundTrait;

    protected $type='MARKET_IF_TOUCHED';


    public function toJson(): \stdClass
    {
        $obj = parent::toJson();

        $this->fillOrderRequestDetails($obj);
        $this->fillTriggerCondition($obj);
        $this->fillTradeClientExtensions($obj);
        $this->fillPrice($obj);
        $this->fillPriceBound($obj);

        return $obj;
    }
}