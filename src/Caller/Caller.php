<?php


namespace Coff\OandaWrapper\Caller;


use Coff\OandaWrapper\OandaApiClient;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

abstract class Caller implements CallerInterface
{
    /** @var OandaApiClient */
    protected $client;

    /** @var string */
    protected $requestClass;

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
    public function setRequestClass($requestClass): Caller
    {
        $this->requestClass = $requestClass;

        return $this;
    }

    /**
     * @param OandaApiClient $client
     * @return $this
     */
    public function setClient(OandaApiClient $client) {
        $this->client  = $client;

        return $this;
    }

}