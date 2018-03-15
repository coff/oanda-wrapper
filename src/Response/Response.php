<?php


namespace Coff\OandaWrapper\Response;

use Psr\Http\Message\ResponseInterface as HttpResponseInterface;


abstract class Response implements ResponseInterface
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
     * @return mixed
     */
    public function getEntity($index = 0)
    {
        return $this->entities[$index];
    }

    public static function createFromHttpResponse(HttpResponseInterface $response): ResponseInterface
    {
        return new static($response);
    }
}