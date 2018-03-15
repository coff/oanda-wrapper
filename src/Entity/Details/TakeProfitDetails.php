<?php


namespace Coff\OandaWrapper\Entity\Details;


class TakeProfitDetails extends Details
{
    /**
     * @var string The price that the Take Profit Order will be triggered at.
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
     */
    public function setPrice(string $price): void
    {
        $this->price = $price;
    }

}