<?php

namespace Coff\OandaWrapper\Caller;

use Coff\OandaWrapper\Endpoint\AccountEndpoint;
use Coff\OandaWrapper\Endpoint\Endpoint;
use Coff\OandaWrapper\Entity\Entity;
use Coff\OandaWrapper\Exception\OandaException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class GuzzleHttpCaller extends Caller
{
    /** @var ClientInterface */
    protected $httpClient;

    public function setHttpClient(ClientInterface $client) {
        $this->httpClient = $client;

        return $this;
    }

    /**
     * @param Endpoint $endpoint
     * @throws OandaException
     * @throws GuzzleException
     */
    public function call(Endpoint $endpoint)
    {
        if ($endpoint instanceof AccountEndpoint) {
            $endpoint->setAccountId($this->client->getAccount());
        }

        $url = $this->client->getUrl($endpoint);
        $headers = $endpoint->getHeaders();

        $headers['Authorization'] =  'Bearer ' . $this->client->getAuthToken();

        /** @var RequestInterface $request */
        $request = new $this->requestClass($endpoint->getMethod(), $url, $headers, $endpoint->getBody());

        /** @var ResponseInterface $response */
        $response = $this->httpClient->send($request);

        $endpoint->parseResponse($response);
    }
}