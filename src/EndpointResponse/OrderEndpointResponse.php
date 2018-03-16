<?php

namespace Coff\OandaWrapper\EndpointResponse;


use Psr\Http\Message\ResponseInterface;

class OrderEndpointResponse extends EndpointResponse
{
    public function __construct(ResponseInterface $response)
    {
        parent::__construct($response);

    }
}