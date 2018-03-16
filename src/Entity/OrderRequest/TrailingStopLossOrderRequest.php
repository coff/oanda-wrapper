<?php


namespace Coff\OandaWrapper\Entity\OrderRequest;


class TrailingStopLossOrderRequest extends OrderRequest
{
    use TradeIdsTrait;
    use TriggerConditionTrait;

    protected $type = 'TRAILING_STOP_LOSS';

    /** @var string */
    protected $distance;

    public function toJson(): \stdClass
    {
        $obj = parent::toJson();

        $obj->distance = (string) $this->distance;

        $this->fillTradeIds($obj);
        $this->fillTriggerCondition($obj);

        return $obj;
    }

    /**
     * @return string
     */
    public function getDistance(): string
    {
        return $this->distance;
    }

    /**
     * @param string $distance
     * @return $this
     */
    public function setDistance(string $distance)
    {
        $this->distance = $distance;
        return $this;
    }


}