<?php


namespace Coff\OandaWrapper\Endpoint;

use Psr\Http\Message\ResponseInterface;

abstract class Endpoint implements EndpointInterface
{
    const
        METHOD_GET  =   'GET',
        METHOD_PUT  =   'PUT',
        METHOD_POST =   'POST',
        METHOD_PATCH=   'PATCH';

    /** @var string */
    private $path = '/v3';

    private $headers = [];

    protected $result;

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

    protected function setHeader($headerName, $content)
    {
        $this->headers[$headerName] = $content;

        return $this;
    }

    public function getBody()
    {
        return null;
    }

    public function getResult() {
        return $this->result;
    }
}