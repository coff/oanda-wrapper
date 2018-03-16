<?php


namespace Coff\OandaWrapper\EndpointResponse;


use Coff\OandaWrapper\Entity\Entity;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

interface EndpointResponseInterface
{

    /**
     * @param \Psr\Http\Message\ResponseInterface $response
     * @return EndpointResponseInterface
     */
    public static function createFromHttpResponse(HttpResponseInterface $httpResponse): EndpointResponseInterface;

    /**
     * Returns all entities
     * @var Entity[]
     */
    public function getEntities();

    /**
     * Returns one or the only response entity
     * @param int $index
     * @return mixed
     */
    public function getEntity($index = 0);

    /**
     * @return int
     */
    public function getReturnCode();

}