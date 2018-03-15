<?php


namespace Coff\OandaWrapper\Entity\Details;


class StopLossDetails extends Details
{

    /**
     * @var string $price The price that the Stop Loss Order will be triggered at.
     */
    protected $price;

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @param string $price
     * @return StopLossDetails
     */
    public function setPrice(string $price): StopLossDetails
    {
        $this->price = $price;
        return $this;
    }


}