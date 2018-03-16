<?php


namespace Coff\OandaWrapper\EndpointResponse;


use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class ErrorEndpointResponse extends EndpointResponse
{
    /** @var string $errorMessage */
    protected $errorMessage;

    public function __construct(HttpResponseInterface $response)
    {
        // example error feedback: {"errorMessage":"Invalid value specified for 'orderPositionFill'"}
        parent::__construct($response);

        $stream = $response->getBody();

        $obj = json_decode($stream->getContents());

        $this->errorMessage = $obj->errorMessage;

    }

    /**
     * @return string an error message if returned
     */
    public function getErrorMessage() {
        return $this->errorMessage;
    }
}