<?php


namespace Coff\OandaWrapper\Entity\Order;


use Coff\OandaWrapper\Entity\Entity;

class UnitsAvailable extends Entity
{
    /** @var UnitsAvailableDetails */
    protected $default;

    /** @var UnitsAvailableDetails */
    protected $openOnly;

    /** @var UnitsAvailableDetails */
    protected $reduceFirst;

    /** @var UnitsAvailableDetails */
    protected $reduceOnly;

    public function __construct(UnitsAvailableDetails $default, UnitsAvailableDetails $openOnly, UnitsAvailableDetails $reduceFirst, UnitsAvailableDetails $reduceOnly)
    {
        $this->default = $default;
        $this->openOnly = $openOnly;
        $this->reduceFirst = $reduceFirst;
        $this->reduceOnly = $reduceOnly;
    }

    public static function createFromJson(\stdClass $json): self
    {
        $entity = new static(
            UnitsAvailableDetails::createFromJson($json->default),
            UnitsAvailableDetails::createFromJson($json->openOnly),
            UnitsAvailableDetails::createFromJson($json->reduceFirst),
            UnitsAvailableDetails::createFromJson($json->reduceOnly)
        );

        return $entity;
    }

    /**
     * @return UnitsAvailableDetails
     */
    public function getDefault(): UnitsAvailableDetails
    {
        return $this->default;
    }

    /**
     * @return UnitsAvailableDetails
     */
    public function getOpenOnly(): UnitsAvailableDetails
    {
        return $this->openOnly;
    }

    /**
     * @return UnitsAvailableDetails
     */
    public function getReduceFirst(): UnitsAvailableDetails
    {
        return $this->reduceFirst;
    }

    /**
     * @return UnitsAvailableDetails
     */
    public function getReduceOnly(): UnitsAvailableDetails
    {
        return $this->reduceOnly;
    }


}