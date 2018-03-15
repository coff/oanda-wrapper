<?php


namespace Coff\OandaWrapper\Response;


use Coff\OandaWrapper\Entity\Entity;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

interface ResponseInterface
{

    /**
     * @param \Psr\Http\Message\ResponseInterface $response
     */
    public static function createFromHttpResponse(HttpResponseInterface $httpResponse): ResponseInterface;

    /**
     * Returns all entities
     * @var Entity[]
     */
    public function getEntities();

    /**
     * Returns one or the only response entity
     * @return mixed
     */
    public function getEntity($index = 0);
}