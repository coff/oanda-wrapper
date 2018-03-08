<?php


namespace Coff\OandaWrapper\Endpoint;


use Psr\Http\Message\ResponseInterface;

interface EndpointInterface
{
    public function getPath();

    public function getMethod();

    public function getHeaders();

    public function getResult();

    public function parseResponse(ResponseInterface $response);
}