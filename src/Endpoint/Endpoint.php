<?php


namespace Coff\OandaWrapper\Endpoint;

use Coff\OandaWrapper\Exception\OandaException;
use Coff\OandaWrapper\EndpointResponse\EndpointResponseInterface;

abstract class Endpoint implements EndpointInterface
{
    const
        METHOD_GET = 'GET',
        METHOD_PUT = 'PUT',
        METHOD_POST = 'POST',
        METHOD_PATCH = 'PATCH';
    /**
     * @var string
     */
    protected $responseClass;
    /**
     *
     * @var string
     */
    private $path = '/v3';
    /**
     * HTTP headers required for endpoint
     * @var array
     */
    private $headers = [];

    public function getResponseClass(): string
    {
        return $this->responseClass;
    }

    /**
     * @param string $class
     * @return EndpointInterface
     * @throws OandaException
     */
    public function setResponseClass(string $class): EndpointInterface
    {
        if (false === $class instanceof EndpointResponseInterface) {
            throw new OandaException('Invalid response class!');
        }

        $this->responseClass = $class;

        return $this;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function getBody()
    {
        return null;
    }

    protected function setHeader($headerName, $content)
    {
        $this->headers[$headerName] = $content;

        return $this;
    }

}