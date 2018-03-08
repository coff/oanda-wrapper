<?php

namespace Coff\OandaWrapper\Endpoint;

use Coff\OandaWrapper\Entity\Account\Account;
use Psr\Http\Message\ResponseInterface;

class AccountEndpoint extends AccountsEndpoint
{
    /** @var string */
    protected $accountId;

    public function getHeaders()
    {
        $headers = parent::getHeaders(); // TODO: Change the autogenerated stub
        $headers['Accept-Datetime-Format'] = 'UNIX';
        return $headers;
    }

    public function getPath()
    {
        return parent::getPath() . '/' . $this->getAccountId();
    }

    /**
     * @return string
     */
    public function getAccountId(): string
    {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     * @return AccountEndpoint
     */
    public function setAccountId(string $accountId): AccountEndpoint
    {
        $this->accountId = $accountId;

        return $this;
    }

    public function parseResponse(ResponseInterface $response)
    {
        $stream = $response->getBody();

        $entity = new Account();
        $entity->fromJson(json_decode($stream->getContents()));
        $this->result = $entity;
    }
}