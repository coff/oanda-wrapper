<?php

namespace Coff\OandaWrapper\EndpointResponse;

use Coff\OandaWrapper\Entity\EntityInterface;
use Coff\OandaWrapper\Entity\Instrument\Candlestick;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class InstrumentCandlesEndpointResponse extends EndpointResponse
{
    protected static $entityClass = Candlestick::class;

    public function __construct(HttpResponseInterface $response)
    {
        parent::__construct($response);

        $stream = $response->getBody();

        $json = json_decode($stream->getContents());


        /** @var EntityInterface $entityClass */
        $entityClass = self::getEntityClass();

        foreach ($json->candles as $candle) {
            $this->entities[] = $entityClass::createFromJson($candle);
        }
    }
}