<?php


namespace Coff\OandaWrapper\Endpoint;

abstract class Endpoint implements EndpointInterface
{
    const
        METHOD_GET = 'GET',
        METHOD_PUT = 'PUT',
        METHOD_POST = 'POST',
        METHOD_PATCH = 'PATCH';
    protected $result;
    /** @var string */
    private $path = '/v3';
    private $headers = [];

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

    public function getResult()
    {
        return $this->result;
    }

    protected function setHeader($headerName, $content)
    {
        $this->headers[$headerName] = $content;

        return $this;
    }
}