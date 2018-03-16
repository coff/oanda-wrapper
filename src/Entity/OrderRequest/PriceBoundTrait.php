<?php


namespace Coff\OandaWrapper\Entity\OrderRequest;


trait PriceBoundTrait
{
    /**
     * The worst price that the client is willing to have the Market Order filled at.
     * @var string
     */
    protected $priceBound;

    public function fillPriceBound(\stdClass $obj)
    {
        if (null !== $this->priceBound) {
            $obj->priceBound = (string) $this->priceBound;
        }
    }

    /**
     * @return string
     */
    public function getPriceBound(): string
    {
        return $this->priceBound;
    }

    /**
     * @param string $priceBound
     * @return $this
     */
    public function setPriceBound(string $priceBound)
    {
        $this->priceBound = $priceBound;
        return $this;
    }
}