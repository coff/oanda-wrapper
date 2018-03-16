<?php


namespace Coff\OandaWrapper\Entity\OrderRequest;


class StopOrderRequest extends OrderRequest
{
    use OrderRequestDetailsTrait;
    use TriggerConditionTrait;
    use TradeClientExtensionsTrait;
    use PriceBoundTrait;
    use PriceTrait;

    protected $type='STOP';


    public function toJson(): \stdClass
    {
        $obj = parent::toJson();

        $this->fillOrderRequestDetails($obj);
        $this->fillTriggerCondition($obj);
        $this->fillTradeClientExtensions($obj);
        $this->fillPriceBound($obj);
        $this->fillPrice($obj);

        return $obj;
    }
}