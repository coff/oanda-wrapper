<?php


namespace Coff\OandaWrapper\Entity\OrderRequest;


use Coff\OandaWrapper\Entity\Details\StopLossDetails;
use Coff\OandaWrapper\Entity\Details\TakeProfitDetails;
use Coff\OandaWrapper\Entity\Details\TrailingStopLossDetails;

trait OrderRequestDetailsTrait
{
    /** @var TakeProfitDetails */
    protected $takeProfitOnFill;

    /** @var StopLossDetails */
    protected $stopLossOnFill;

    /** @var TrailingStopLossDetails */
    protected $trailingStopLossOnFill;

    public function fillOrderRequestDetails(\stdClass $obj)
    {
        if (null !== $this->takeProfitOnFill) {
            $obj->takeProfitOnFill = $this->takeProfitOnFill->toJson();
        }

        if (null != $this->stopLossOnFill) {
            $obj->stopLossOnFill = $this->stopLossOnFill->toJson();
        }

        if (null != $this->trailingStopLossOnFill) {
            $obj->trailingStopLossOnFill = $this->trailingStopLossOnFill->toJson();
        }
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
     * @return $this
     */
    public function setTakeProfitOnFill(TakeProfitDetails $takeProfitOnFill)
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
     * @return $this
     */
    public function setStopLossOnFill(StopLossDetails $stopLossOnFill)
    {
        $this->stopLossOnFill = $stopLossOnFill;
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
     * @return $this
     */
    public function setTrailingStopLossOnFill(TrailingStopLossDetails $trailingStopLossOnFill)
    {
        $this->trailingStopLossOnFill = $trailingStopLossOnFill;
        return $this;
    }

}