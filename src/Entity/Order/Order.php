<?php

namespace Coff\OandaWrapper\Entity\Order;


use Coff\OandaWrapper\Entity\Entity;
use Coff\OandaWrapper\Enum\OrderState;
use Coff\OandaWrapper\Enum\OrderType;

class Order extends Entity
{
    protected $id;

    /** @var \DateTime */
    protected $createTime;

    /** @var OrderState */
    protected $state;

    protected $clientExtensions;

    /** @var OrderType */
    protected $type;

    public function toJson(): string
    {


        return <<<JSON
{ id: $this->id, createTime: "{$this->createTime->format('U.u')}"
JSON;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Order
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * @param mixed $createTime
     * @return Order
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return OrderState
     */
    public function getState(): OrderState
    {
        return $this->state;
    }

    /**
     * @param OrderState $state
     * @return $this
     */
    public function setState(OrderState $state): Order
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getClientExtensions()
    {
        return $this->clientExtensions;
    }

    /**
     * @param mixed $clientExtensions
     * @return Order
     */
    public function setClientExtensions($clientExtensions)
    {
        $this->clientExtensions = $clientExtensions;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }


}