<?php


namespace Coff\OandaWrapper\Entity\Order;


use Coff\OandaWrapper\Entity\Entity;

class OrderIdentifier extends Entity
{
    protected $orderId;

    protected $clientOrderId;

    /**
     * @return string
     */
    public function toJson()
    {
        return <<<JSON
{ orderID: $this->orderId, clientOrderID: $this->clientOrderId
JSON;
    }
}