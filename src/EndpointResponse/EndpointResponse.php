<?php


namespace Coff\OandaWrapper\EndpointResponse;

use Psr\Http\Message\ResponseInterface as HttpResponseInterface;


abstract class EndpointResponse implements EndpointResponseInterface
{

    /**
     * @var string $entityClass Class for objects when factorizing with Entity::createFromJson();
     */
    protected static $entityClass;

    /**
     * @var int $returnCode code returned by endpoint
     */
    protected $returnCode;

    /**
     * @var \DateTime
     */
    protected $time;

    /**
     * @var array
     */
    protected $entities = [];

    /**
     * EndpointResponse constructor.
     * @param HttpResponseInterface $response
     */
    public function __construct(HttpResponseInterface $response)
    {
        $this->returnCode = $response->getStatusCode();
    }

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

    /**
     * @param HttpResponseInterface $response
     * @return EndpointResponseInterface
     */
    public static function createFromHttpResponse(HttpResponseInterface $response): EndpointResponseInterface
    {
        if ($response->getStatusCode() >= 400) {
            return new ErrorEndpointResponse($response);
        } else {
            return new static($response);
        }
    }

    /**
     * @return int
     */
    public function getReturnCode()
    {
        return $this->returnCode;
    }
}