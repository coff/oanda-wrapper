<?php


namespace Coff\OandaWrapper\Endpoint;


use Coff\OandaWrapper\EndpointResponse\InstrumentCandlesEndpointResponse;
use Coff\OandaWrapper\Entity\InstrumentName;
use Coff\OandaWrapper\Enum\Granularity;
use Coff\OandaWrapper\Enum\WeeklyAlignment;
use Coff\OandaWrapper\Exception\InvalidEndpointArgumentException;

/**
 * Class InstrumentCandlesEndpoint
 *
 *
 * @package Coff\OandaWrapper\Endpoint
 */
class InstrumentCandlesEndpoint extends InstrumentsEndpoint
{
    const
        PRICE_BID = 'B',
        PRICE_ASK = 'A',
        PRICE_MID = 'M';

    protected $responseClass = InstrumentCandlesEndpointResponse::class;

    /** @var InstrumentName $instrument Name of the Instrument */
    protected $instrument;

    /**
     * @var string[] $prices  The Price component(s) to get candlestick data for. Can contain any combination of the
     *                        characters “M” (midpoint candles) “B” (bid candles) and “A” (ask candles).
     */
    protected $prices = [self::PRICE_MID];

    /** @var Granularity $granularity The granularity of the candlesticks to fetch */
    protected $granularity;

    /** @var \DateTime $from, $to The start of the time range to fetch candlesticks for. */
    protected $from, $to;

    /**
     * @var int $count The number of candlesticks to return in the reponse. Count should not be specified if both the
     *                 start and end parameters are provided, as the time range combined with the graularity will
     *                 determine the number of candlesticks to return. [default=500, maximum=5000]
     */
    protected $count=500;

    /**
     * @var bool $smooth A flag that controls whether the candlestick is “smoothed” or not. A smoothed candlestick uses
     *                   the previous candle’s close price as its open price, while an unsmoothed candlestick uses the
     *                   first price from its time range as its open price. [default=False]
     */
    protected $smooth=false;

    /**
     * @var bool $includeFirst A flag that controls whether the candlestick that is covered by the from time should be
     *                         included in the results. This flag enables clients to use the timestamp of the last
     *                         completed candlestick received to poll for future candlesticks but avoid receiving the
     *                         previous candlestick repeatedly.
     */
    protected $includeFirst=true;

    /**
     * @var int $dailyAlignment The hour of the day (in the specified timezone) to use for granularities that have daily
     *                          alignments. [default=17, minimum=0, maximum=23]
     */
    protected $dailyAlignment=17;

    /**
     * @var string $alignmentTimezone The timezone to use for the dailyAlignment parameter. Candlesticks with daily
     *                                alignment will be aligned to the dailyAlignment hour within the alignmentTimezone.
     *                                Note that the returned times will still be represented in UTC.
     *                                [default=America/New_York]
     *
     * @todo dedicated enum class for this?
     */
    protected $alignmentTimezone='America/New_York';

    /**
     * @var WeeklyAlignment $weeklyAlignment The day of the week used for granularities that have weekly alignment.
     */
    protected $weeklyAlignment;

    public function __construct()
    {
        $this->granularity = Granularity::SEC_5();
        $this->weeklyAlignment = WeeklyAlignment::FRI;
    }

    /**
     * @return string
     * @throws InvalidEndpointArgumentException
     */
    public function getPath()
    {
        $args = [];

        $args[] = 'price=' . implode(array_unique($this->prices));
        $args[] = 'granularity=' . $this->granularity;

        if ($this->from instanceof \DateTime && $this->to instanceof \DateTime) {
            $args[] = 'from=' . $this->from->format('U.u');
            $args[] = 'to=' . $this->to->format('U.u');

        } elseif ($this->count > 0 && $this->count < 5000) {
            $args[] = 'count=' . $this->count;
        } else {
            throw new InvalidEndpointArgumentException("Either `from`/`to` or `count` argument is required and within proper range");
        }

        if ($this->dailyAlignment < 0 || $this->dailyAlignment > 23) {
            throw new InvalidEndpointArgumentException("`dailyAlignment` argument out of valid scope [0,23]");
        }

        $args[] = 'dailyAlignment=' . $this->dailyAlignment;
        $args[] = 'alignmentTimezone=' . $this->alignmentTimezone;
        $args[] = 'weeklyAlignment=' . $this->weeklyAlignment;

        return parent::getPath() . '/' . $this->instrument . '/candles' . '?' . implode('&', $args);
    }

    /**
     * @return int
     */
    public function getDailyAlignment(): int
    {
        return $this->dailyAlignment;
    }

    /**
     * @param int $dailyAlignment
     * @return $this
     */
    public function setDailyAlignment(int $dailyAlignment)
    {
        $this->dailyAlignment = $dailyAlignment;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlignmentTimezone(): string
    {
        return $this->alignmentTimezone;
    }

    /**
     * @param string $alignmentTimezone
     * @return $this
     */
    public function setAlignmentTimezone(string $alignmentTimezone)
    {
        $this->alignmentTimezone = $alignmentTimezone;
        return $this;
    }

    /**
     * @return WeeklyAlignment
     */
    public function getWeeklyAlignment(): WeeklyAlignment
    {
        return $this->weeklyAlignment;
    }

    /**
     * @param WeeklyAlignment $weeklyAlignment
     * @return $this
     */
    public function setWeeklyAlignment(WeeklyAlignment $weeklyAlignment)
    {
        $this->weeklyAlignment = $weeklyAlignment;
        return $this;
    }



    /**
     * @return bool
     */
    public function isIncludeFirst(): bool
    {
        return $this->includeFirst;
    }

    /**
     * @param bool $includeFirst
     * @return $this
     */
    public function setIncludeFirst(bool $includeFirst)
    {
        $this->includeFirst = $includeFirst;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSmooth(): bool
    {
        return $this->smooth;
    }

    /**
     * @param bool $smooth
     * @return $this
     */
    public function setSmooth(bool $smooth)
    {
        $this->smooth = $smooth;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFrom(): \DateTime
    {
        return $this->from;
    }

    /**
     * @param \DateTime $from
     * @return $this
     */
    public function setFrom(\DateTime $from)
    {
        $this->from = $from;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTo(): \DateTime
    {
        return $this->to;
    }

    /**
     * @param \DateTime $to
     * @return $this
     */
    public function setTo(\DateTime $to)
    {
        $this->to = $to;
        return $this;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $count
     * @return $this
     */
    public function setCount(int $count)
    {
        $this->count = $count;
        return $this;
    }

    /**
     * @return Granularity
     */
    public function getGranularity(): Granularity
    {
        return $this->granularity;
    }

    /**
     * @param Granularity $granularity
     * @return $this
     */
    public function setGranularity(Granularity $granularity)
    {
        $this->granularity = $granularity;

        return $this;
    }

    /**
     * @param $price
     * @return $this
     */
    public function addPrice($price)
    {
        return $this;
    }

    /**
     * @return string[]
     */
    public function getPrices(): array
    {
        return $this->prices;
    }

    /**
     * @param string[] $prices
     * @return $this
     */
    public function setPrices(array $prices)
    {
        $this->prices = $prices;
        return $this;
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
}