<?php


namespace Coff\OandaWrapper\Entity\OrderRequest;


class StopLossOrderRequest extends OrderRequest
{
    use PriceTrait;
    use TradeIdsTrait;
    use TriggerConditionTrait;

    protected $type = 'STOP_LOSS';

    public function toJson(): \stdClass
    {
        $obj = parent::toJson();

        $this->fillTradeIds($obj);
        $this->fillPrice($obj);
        $this->fillTriggerCondition($obj);

        return $obj;
    }
}