<?php


namespace Coff\OandaWrapper\Entity\Price;


use Coff\OandaWrapper\Entity\Entity;
use Coff\OandaWrapper\Entity\InstrumentName;

class Price extends Entity
{
    /**
     * @var string $price The string “PRICE”. Used to identify the a Price object when found in a stream.
     */
    protected $type = 'PRICE';

    /**
     * @var InstrumentName $instrument
     */
    protected $instrument;

    /**
     * @var \DateTime $time The date/time when the Price was created
     */
    protected $time;

    /**
     * @var boolean $tradeable Flag indicating if the Price is tradeable or not.
     */
    protected $tradeable;

    /**
     * The list of prices and liquidity available on the Instrument’s bid side.
     * It is possible for this list to be empty if there is no bid liquidity
     * currently available for the Instrument in the Account.
     *
     * @var
     */
    protected $bids;

    /**
     * The list of prices and liquidity available on the Instrument’s ask side.
     * It is possible for this list to be empty if there is no ask liquidity
     * currently available for the Instrument in the Account.
     *
     * @var PriceBucket[] $asks
     */
    protected $asks;


    /**
     * The closeout bid Price. This Price is used when a bid is required to
     * closeout a Position (margin closeout or manual) yet there is no bid
     * liquidity. The closeout bid is never used to open a new position.
     *
     * @var string
     */
    protected $closeoutBid;


    /**
     * The closeout ask Price. This Price is used when a ask is required to
     * closeout a Position (margin closeout or manual) yet there is no ask
     * liquidity. The closeout ask is never used to open a new position.
     *
     * @var string
     */
    protected $closeoutAsk;

    /**
     * Price constructor.
     * @param InstrumentName $instrument
     * @param \DateTime $time
     * @param PriceBucket[] $bids
     * @param PriceBucket[] $asks
     * @param bool $tradeable
     * @param null $closeoutBid
     * @param null $closeoutAsk
     */
    public function __construct(InstrumentName $instrument, \DateTime $time, array $bids, array $asks, bool $tradeable = true, $closeoutBid = null, $closeoutAsk = null)
    {
        $this->instrument = $instrument;
        $this->time = $time;
        $this->tradeable = $tradeable;

        $this->bids = $bids;
        $this->asks = $asks;
        $this->closeoutAsk = $closeoutAsk;
        $this->closeoutBid = $closeoutBid;
    }

    public static function createFromJson(\stdClass $json): Entity
    {
       // var_dump($json); exit;
        /*
         * Deprecated json fields are:
         * - status
         * - unitsAvailable
         * - quoteHomeConversionFactors
         */

        $instrument = InstrumentName::createFromString($json->instrument);

        $asks = [];
        foreach ($json->asks as $ask) {
            $asks[] = PriceBucket::createFromJson($ask);
        }

        $bids = [];
        foreach ($json->bids as $ask) {
            $bids[] = PriceBucket::createFromJson($ask);
        }

        $entity = new static(
            $instrument,
            \DateTime::createFromFormat('U.u', substr($json->time, 0, 17)),
            $bids,
            $asks,
            $json->tradeable,
            $json->closeoutBid,
            $json->closeoutAsk);

        return $entity;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return InstrumentName
     */
    public function getInstrument(): InstrumentName
    {
        return $this->instrument;
    }

    /**
     * @return \DateTime
     */
    public function getTime(): \DateTime
    {
        return $this->time;
    }

    /**
     * @return bool
     */
    public function isTradeable(): bool
    {
        return $this->tradeable;
    }

    /**
     * @return mixed
     */
    public function getBids()
    {
        return $this->bids;
    }

    /**
     * @return PriceBucket[]
     */
    public function getAsks(): array
    {
        return $this->asks;
    }

    /**
     * @return string
     */
    public function getCloseoutBid(): string
    {
        return $this->closeoutBid;
    }

    /**
     * @return string
     */
    public function getCloseoutAsk(): string
    {
        return $this->closeoutAsk;
    }


}