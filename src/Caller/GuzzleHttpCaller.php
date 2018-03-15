<?php

namespace Coff\OandaWrapper\Caller;

use Coff\OandaWrapper\Endpoint\AccountEndpoint;
use Coff\OandaWrapper\Endpoint\Endpoint;
use Coff\OandaWrapper\Exception\OandaException;
use Coff\OandaWrapper\EndpointResponse\EndpointResponseInterface;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\RequestInterface as HttpRequest;
use Psr\Http\Message\ResponseInterface as HttpResponse;

class GuzzleHttpCaller extends Caller
{
    /** @var ClientInterface */
    protected $httpClient;

    public function setHttpClient(ClientInterface $client)
    {
        $this->httpClient = $client;

        return $this;
    }

    /**
     * @param Endpoint $endpoint
     * @return CallerInterface
     * @throws OandaException
     * @throws GuzzleException
     */
    public function call(Endpoint $endpoint): CallerInterface
    {
        if ($endpoint instanceof AccountEndpoint) {
            $endpoint->setAccountId($this->client->getAccount());
        }

        $url = $this->client->getUrl($endpoint);
        $headers = $endpoint->getHeaders();

        $headers['Authorization'] = 'Bearer ' . $this->client->getAuthToken();

        /** @var HttpRequest $request */
        $request = new $this->httpRequestClass($endpoint->getMethod(), $url, $headers, $endpoint->getBody());

        /** @var HttpResponse $response */
        $httpResponse = $this->httpClient->send($request);

        /** @var EndpointResponseInterface $responseClass */
        $responseClass = $endpoint->getResponseClass();

        $this->response = $responseClass::createFromHttpResponse($httpResponse);

        return $this;
    }
}