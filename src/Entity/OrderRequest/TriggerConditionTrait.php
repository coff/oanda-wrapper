<?php


namespace Coff\OandaWrapper\Entity\OrderRequest;


use Coff\OandaWrapper\Enum\OrderTriggerCondition;

trait TriggerConditionTrait
{
    /**
     * Specification of which price component should be used when determining if
     * an Order should be triggered and filled. This allows Orders to be
     * triggered based on the bid, ask, mid, default (ask for buy, bid for sell)
     * or inverse (ask for sell, bid for buy) price depending on the desired
     * behaviour. Orders are always filled using their default price component.
     * This feature is only provided through the REST API. Clients who choose to
     * specify a non-default trigger condition will not see it reflected in any
     * of OANDA’s proprietary or partner trading platforms, their transaction
     * history or their account statements. OANDA platforms always assume that
     * an Order’s trigger condition is set to the default value when indicating
     * the distance from an Order’s trigger price, and will always provide the
     * default trigger condition when creating or modifying an Order.
     *
     * @var OrderTriggerCondition
     */
    protected $triggerCondition;

    public function fillTriggerCondition(\stdClass $obj)
    {
        $obj->triggerCondition = (string) $this->triggerCondition;
    }

    /**
     * @return OrderTriggerCondition
     */
    public function getTriggerCondition(): OrderTriggerCondition
    {
        return $this->triggerCondition;
    }

    /**
     * @param OrderTriggerCondition $triggerCondition
     * @return $this
     */
    public function setTriggerCondition(OrderTriggerCondition $triggerCondition)
    {
        $this->triggerCondition = $triggerCondition;
        return $this;
    }
}