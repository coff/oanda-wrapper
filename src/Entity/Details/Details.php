<?php


namespace Coff\OandaWrapper\Entity\Details;


use Coff\OandaWrapper\Entity\Entity;
use Coff\OandaWrapper\Enum\TimeInForce;

class Details extends Entity
{
    /**
     * @var TimeInForce $timeInForce The time in force for the created Trailing Stop Loss Order. This may only
     *                               be GTC, GTD or GFD.
     */
    protected $timeInForce;

    /**
     * @var \DateTime $gtdTime  The date when the Trailing Stop Loss Order will be cancelled on if
     *                          timeInForce is GTD.
     */
    protected $gtdTime;

    /**
     * @var array $clientExtensions  The Client Extensions to add to the Trailing Stop Loss Order when
     *                         created.
     */
    protected $clientExtensions;

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

}