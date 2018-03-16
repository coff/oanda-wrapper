<?php


namespace Coff\OandaWrapper\Entity\OrderRequest;


class TakeProfitOrderRequest extends OrderRequest
{
    use TriggerConditionTrait;
    use PriceTrait;
    use TradeIdsTrait;

    protected $type='TAKE_PROFIT';


    public function toJson(): \stdClass
    {
        $obj = parent::toJson();

        $this->fillTriggerCondition($obj);
        $this->fillPrice($obj);
        $this->fillTradeIds($obj);


        return $obj;
    }



}