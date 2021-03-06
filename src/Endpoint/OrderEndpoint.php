<?php


namespace Coff\OandaWrapper\Endpoint;

use Coff\OandaWrapper\EndpointResponse\OrderEndpointResponse;
use Coff\OandaWrapper\Entity\OrderRequest\OrderRequest;

class OrderEndpoint extends AccountEndpoint
{
    protected $responseClass = OrderEndpointResponse::class;

    protected $path = '/orders';

    /** @var OrderRequest */
    protected $orderRequest;

    public function getHeaders()
    {
        $headers = parent::getHeaders();
        $headers['Content-Type'] = 'application/json';
        return $headers;
    }

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

    /**
     * @return null|string
     * @throws \Coff\OandaWrapper\Exception\OandaException
     */
    public function getBody()
    {
        $obj = new \stdClass();

        $obj->order = $this->orderRequest->toJson();

        return json_encode($obj);
    }

    public function getPath()
    {
        return parent::getPath() . $this->path;
    }
}