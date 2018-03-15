<?php


namespace Coff\OandaWrapper\Entity\Details;


class TrailingStopLossDetails extends Details
{
    /**
     * @var string $distance The distance (in price units) from the Trade’s fill price that the
     *                       Trailing Stop Loss Order will be triggered at.
     */
    protected $distance;

    /**
     * @return string
     */
    public function getDistance(): string
    {
        return $this->distance;
    }

    /**
     * @param string $distance
     */
    public function setDistance(string $distance): void
    {
        $this->distance = $distance;
    }

    public function toJson(): \stdClass
    {
        $obj = parent::toJson();

        $obj->distance = $this->distance;

        return $obj;
    }
}