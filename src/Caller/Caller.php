<?php


namespace Coff\OandaWrapper\Caller;


use Coff\OandaWrapper\OandaApiClient;
use Coff\OandaWrapper\EndpointResponse\EndpointResponseInterface;

abstract class Caller implements CallerInterface
{
    /** @var OandaApiClient */
    protected $client;

    /** @var string */
    protected $httpRequestClass;

    /**
     * @var EndpointResponseInterface
     */
    protected $response;

    /**
     * @return string
     */
    public function getRequestClass(): string
    {
        return $this->requestClass;
    }

    /**
     * @param string $requestClass
     * @return $this
     */
    public function setHttpRequestClass($requestClass): Caller
    {
        $this->httpRequestClass = $requestClass;

        return $this;
    }

    /**
     * @param OandaApiClient $client
     * @return $this
     */
    public function setClient(OandaApiClient $client)
    {
        $this->client = $client;

        return $this;
    }

    public function getResponse(): EndpointResponseInterface
    {
        return $this->response;
    }
}