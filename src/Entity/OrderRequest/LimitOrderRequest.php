<?php


namespace Coff\OandaWrapper\Entity\OrderRequest;


class LimitOrderRequest extends OrderRequest
{
    use OrderRequestDetailsTrait;
    use TriggerConditionTrait;
    use TradeClientExtensionsTrait;
    use PriceTrait;

    protected $type='LIMIT';

    public function toJson(): \stdClass
    {
        $obj = parent::toJson();

        $this->fillOrderRequestDetails($obj);
        $this->fillTriggerCondition($obj);
        $this->fillTradeClientExtensions($obj);
        $this->fillPrice($obj);

        return $obj;
    }

}