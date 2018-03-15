<?php


namespace Coff\OandaWrapper\Caller;


use Coff\OandaWrapper\Endpoint\Endpoint;
use Coff\OandaWrapper\OandaApiClient;
use Coff\OandaWrapper\Response\ResponseInterface;

interface CallerInterface
{
    public function setClient(OandaApiClient $client);

    /**
     * @param Endpoint $endpoint endpoint to call
     * @return CallerInterface
     * @throws \Exception
     */
    public function call(Endpoint $endpoint): CallerInterface;

    /**
     * @return ResponseInterface|null
     */
    public function getResponse(): ?ResponseInterface;
}