<?php


namespace Coff\OandaWrapper\Entity\OrderRequest;


use Coff\OandaWrapper\Entity\Entity;
use Coff\OandaWrapper\Enum\OrderType;
use Coff\OandaWrapper\Entity\ClientExtensions;
use Coff\OandaWrapper\Entity\InstrumentName;
use Coff\OandaWrapper\Enum\OrderPositionFill;
use Coff\OandaWrapper\Enum\TimeInForce;


abstract class OrderRequest extends Entity
{
    /** @var OrderType */
    protected $type;

    /** @var InstrumentName */
    protected $instrument;

    /** @var string */
    protected $units;

    /** @var TimeInForce */
    protected $timeInForce;

    /** @var OrderPositionFill */
    protected $positionFill;

    /** @var ClientExtensions */
    protected $clientExtensions;



    public function toJson(): \stdClass
    {
        $obj = new \stdClass();

        $obj->type = $this->type;
        $obj->instrument = (string) $this->instrument;
        $obj->units = $this->units;
        $obj->timeInForce = (string) $this->timeInForce;
        $obj->positionFill = (string) $this->positionFill;

        if (null !== $this->clientExtensions) {
            $obj->clientExtensions = $this->clientExtensions->toJson();
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
     * @return $this
     */
    public function setInstrument(InstrumentName $instrument)
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
     * @return $this
     */
    public function setUnits(string $units)
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
     * @return $this
     */
    public function setTimeInForce(TimeInForce $timeInForce)
    {
        $this->timeInForce = $timeInForce;
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
     * @return $this
     */
    public function setPositionFill(OrderPositionFill $positionFill)
    {
        $this->positionFill = $positionFill;
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
     * @return $this
     */
    public function setClientExtensions(ClientExtensions $clientExtensions)
    {
        $this->clientExtensions = $clientExtensions;
        return $this;
    }

}