<?php

namespace Coff\OandaWrapper\Entity\Instrument;

use Coff\OandaWrapper\DateTime\DateTime;
use Coff\OandaWrapper\Entity\Entity;

class Candlestick extends Entity
{
    /**
     * @var \DateTime $time The start time of the candlestick
     */
    protected $time;

    /**
     * @var CandlestickData $bid The candlestick data based on bids. Only provided if bid-based candles were requested.
     */
    protected $bid;

    /**
     * @var CandlestickData $ask The candlestick data based on asks. Only provided if ask-based candles were requested.
     */
    protected $ask;

    /**
     * @var CandlestickData $mid The candlestick data based on midpoints. Only provided if midpoint-based candles
     * were requested.
     */
    protected $mid;

    /**
     * @var int $volume The number of prices created during the time-range represented by the candlestick.
     */
    protected $volume;

    /**
     * @var bool A flag indicating if the candlestick is complete. A complete candlestick is one whose ending time is
     * not in the future.
     */
    protected $complete;

    /**
     * @param \stdClass $json
     * @return Candlestick
     * @throws \Coff\OandaWrapper\Exception\OandaException
     */
    public static function createFromJson(\stdClass $json): self
    {
        $entity = new static();
        $entity->time = DateTime::createFromFormat('U.u', $json->time);
        $entity->volume = (int) $json->volume;
        $entity->complete = (bool) $json->complete;

        if (isset($json->bid)) {
            $entity->bid = CandlestickData::createFromJson($json->bid);
        }

        if (isset($json->ask)) {
            $entity->ask = CandlestickData::createFromJson($json->ask);
        }

        if (isset($json->mid)) {
            $entity->mid = CandlestickData::createFromJson($json->mid);
        }

        return $entity;
    }

    /**
     * @return DateTime
     */
    public function getTime(): DateTime
    {
        return $this->time;
    }

    /**
     * @return CandlestickData
     */
    public function getBid(): CandlestickData
    {
        return $this->bid;
    }

    /**
     * @return CandlestickData
     */
    public function getAsk(): CandlestickData
    {
        return $this->ask;
    }

    /**
     * @return CandlestickData
     */
    public function getMid(): CandlestickData
    {
        return $this->mid;
    }

    /**
     * @return int
     */
    public function getVolume(): int
    {
        return $this->volume;
    }

    /**
     * @return bool
     */
    public function isComplete(): bool
    {
        return $this->complete;
    }


}