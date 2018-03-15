<?php


namespace Coff\OandaWrapper\EndpointResponse;

use Psr\Http\Message\ResponseInterface as HttpResponseInterface;


abstract class EndpointResponse implements EndpointResponseInterface
{
    public function __construct(HttpResponseInterface $response)
    {
    }

    /**
     * @var string $entityClass Class for objects when factorizing with Entity::createFromJson();
     */
    protected static $entityClass;

    /**
     * @var \DateTime
     */
    protected $time;

    /**
     * @var array
     */
    protected $entities = [];

    /**
     * @return string
     */
    public static function getEntityClass(): string
    {
        return static::$entityClass;
    }

    /**
     * @param string $entityClass
     */
    public static function setEntityClass(string $entityClass)
    {
        static::$entityClass = $entityClass;
    }

    /**
     * @return mixed
     */
    public function getEntities()
    {
        return $this->entities;
    }

    /**
     * @param int $index
     * @return mixed
     */
    public function getEntity($index = 0)
    {
        return $this->entities[$index];
    }

    public static function createFromHttpResponse(HttpResponseInterface $response): EndpointResponseInterface
    {
        return new static($response);
    }
}