<?php


namespace Coff\OandaWrapper\Caller;


use Coff\OandaWrapper\Endpoint\Endpoint;
use Coff\OandaWrapper\OandaApiClient;

interface CallerInterface
{
    public function setClient(OandaApiClient $client);

    /**
     * @param Endpoint $endpoint endpoint to call
     * @throws \Exception
     */
    public function call(Endpoint $endpoint);

}