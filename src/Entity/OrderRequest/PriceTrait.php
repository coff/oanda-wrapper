<?php


namespace Coff\OandaWrapper\Entity\OrderRequest;


trait PriceTrait
{
    /**
     * The worst price that the client is willing to have the Market Order filled at.
     * @var string
     */
    protected $price;

    public function fillPrice(\stdClass $obj)
    {
        if (null !== $this->price) {
            $obj->price = (string) $this->price;
        }
    }

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @param string $price
     * @return $this
     */
    public function setPrice(string $price)
    {
        $this->price = $price;
        return $this;
    }
}