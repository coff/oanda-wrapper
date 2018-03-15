<?php


namespace Coff\OandaWrapper\Entity\Details;


use Coff\OandaWrapper\Entity\ClientExtensions;
use Coff\OandaWrapper\Entity\Entity;
use Coff\OandaWrapper\Enum\TimeInForce;

class Details extends Entity
{
    /**
     * @var TimeInForce $timeInForce The time in force for the created Trailing Stop Loss Order. This may only be GTC, GTD or GFD.
     */
    protected $timeInForce;

    /**
     * @var \DateTime $gtdTime  The date when the Trailing Stop Loss Order will be cancelled on if timeInForce is GTD.
     */
    protected $gtdTime;

    /**
     * @var ClientExtensions $clientExtensions  The Client Extensions to add to the Trailing Stop Loss Order when created.
     */
    protected $clientExtensions;

    public function __construct()
    {
        $this->timeInForce = TimeInForce::GTC();
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
     * @return Details
     */
    public function setTimeInForce(TimeInForce $timeInForce): Details
    {
        $this->timeInForce = $timeInForce;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getGtdTime(): \DateTime
    {
        return $this->gtdTime;
    }

    /**
     * @param \DateTime $gtdTime
     * @return Details
     */
    public function setGtdTime(\DateTime $gtdTime): Details
    {
        $this->gtdTime = $gtdTime;
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
     * @return Details
     */
    public function setClientExtensions(ClientExtensions $clientExtensions): Details
    {
        $this->clientExtensions = $clientExtensions;
        return $this;
    }



    public function toJson(): \stdClass
    {
        $obj = new \stdClass();

        $obj->timeInForce = (string)$this->timeInForce;

        if (null !== $this->gtdTime) {
            $obj->gtdTime = $this->gtdTime->format('U.u');
        }

        if (null !== $this->clientExtensions) {
            $obj->clientExtensions = $this->clientExtensions->toJson();
        }

        return $obj;
    }
}