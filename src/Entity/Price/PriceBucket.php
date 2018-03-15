<?php


namespace Coff\OandaWrapper\Entity\Price;

use Coff\OandaWrapper\Entity\Entity;

/**
 * A PriceBucket represents price available for an amount of liquidity
 */
class PriceBucket extends Entity
{
    /** @var string $price Price offered by the PriceBucket */
    protected $price;

    /** @var int $liquidity Amount of liquidity offered by the PriceBucket */
    protected $liquidity;

    /**
     * @param \stdClass $json
     * @return Entity
     */
    public static function createFromJson(\stdClass $json): Entity
    {
        $entity = new static();

        $entity->price = $json->price;
        $entity->liquidity = $json->liquidity;

        return $entity;
    }

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getLiquidity(): int
    {
        return $this->liquidity;
    }

}