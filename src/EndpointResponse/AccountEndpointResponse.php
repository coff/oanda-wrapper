<?php


namespace Coff\OandaWrapper\EndpointResponse;


use Coff\OandaWrapper\Entity\Account\Account;
use Coff\OandaWrapper\Entity\EntityInterface;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class AccountEndpointResponse extends EndpointResponse
{
    protected static $entityClass = Account::class;

    public function __construct(HttpResponseInterface $response)
    {
        parent::__construct($response);

        $stream = $response->getBody();

        /** @var EntityInterface $entityClass */
        $entityClass = static::$entityClass;
        $entity = $entityClass::createFromJson(json_decode($stream->getContents()));

        $this->entities = [$entity];
    }

}