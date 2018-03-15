<?php


namespace Coff\OandaWrapper\Endpoint;


use Coff\OandaWrapper\EndpointResponse\PricingEndpointRespose;
use Coff\OandaWrapper\Entity\OrderRequest\OrderRequest;

class OrderEndpoint extends AccountEndpoint
{
    protected $responseClass = PricingEndpointRespose::class;

    protected $path = '/orders';

    /** @var OrderRequest */
    protected $orderRequest;

    /**
     * @return OrderRequest
     */
    public function getOrderRequest(): OrderRequest
    {
        return $this->orderRequest;
    }

    public function getMethod()
    {
        return self::METHOD_POST;
    }

    /**
     * @param OrderRequest $order
     * @return OrderEndpoint
     */
    public function setOrderRequest(OrderRequest $orderRequest): OrderEndpoint
    {
        $this->orderRequest = $orderRequest;
        return $this;
    }

    public function getBody()
    {
        $obj = new \stdClass();

        $obj->order = $this->orderRequest->toJson();

        return json_encode($obj);
    }
}