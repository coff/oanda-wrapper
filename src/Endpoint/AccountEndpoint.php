<?php

namespace Coff\OandaWrapper\Endpoint;

class AccountEndpoint extends AccountsEndpoint
{
    /** @var string */
    protected $accountId;

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

    public function getPath()
    {
        return parent::getPath() . '/' . $this->getAccountId();
    }


}