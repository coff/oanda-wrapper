<?php


namespace Coff\OandaWrapper\EndpointResponse;


use Coff\OandaWrapper\Entity\EntityInterface;
use Coff\OandaWrapper\Entity\Price\Price;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class PricingEndpointRespose extends EndpointResponse
{
    protected static $entityClass = Price::class;

    public function __construct(HttpResponseInterface $response)
    {
        parent::__construct($response);

        $stream = $response->getBody();

        $json = json_decode($stream->getContents());


        /** @var EntityInterface $entityClass */
        $entityClass = self::getEntityClass();

        foreach ($json->prices as $price) {
            $this->entities[] = $entityClass::createFromJson($price);
        }

    }

}