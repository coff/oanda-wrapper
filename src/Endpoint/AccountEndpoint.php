<?php

namespace Coff\OandaWrapper\Endpoint;

use Coff\OandaWrapper\EndpointResponse\AccountEndpointResponse;

class AccountEndpoint extends AccountsEndpoint
{
    /** @var string */
    protected $accountId;

    protected $responseClass = AccountEndpointResponse::class;

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
}