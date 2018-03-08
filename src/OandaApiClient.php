<?php

namespace Coff\OandaWrapper;

use Coff\OandaWrapper\Endpoint\EndpointInterface;

class OandaApiClient
{
    const
        STAGE_DEV       =   'dev',
        STAGE_TESTING   =   'test',
        STAGE_LIVE      =   'live';

    /** @var string */
    protected $stage='dev';

    /** @var string[] */
    protected $urls = [
        self::STAGE_DEV     => 'https://api-fxpractice.oanda.com',
        self::STAGE_TESTING => 'https://api-fxpractice.oanda.com',
        self::STAGE_LIVE    => 'https://api-fxtrade.oanda.com',
    ];

    /** @var string */
    protected $account;

    /** @var string */
    protected $authToken;

    /**
     * @return string
     */
    public function getStage(): string
    {
        return $this->stage;
    }

    /**
     * @param string $stage
     * @return OandaApiClient
     */
    public function setStage(string $stage): OandaApiClient
    {
        $this->stage = $stage;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthToken(): string
    {
        return $this->authToken;
    }

    /**
     * @param string $authToken
     * @return OandaApiClient
     */
    public function setAuthToken(string $authToken): OandaApiClient
    {
        $this->authToken = $authToken;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccount(): string
    {
        return $this->account;
    }

    /**
     * @param string $account
     * @return $this
     */
    public function setAccount(string $account): OandaApiClient
    {
        $this->account = $account;

        return $this;
    }

    public function getHost() {
        switch ($this->stage) {
            case self::STAGE_LIVE:
                return $this->urls[self::STAGE_LIVE];
            case self::STAGE_TESTING:
                // no break
            default:
                return $this->urls[self::STAGE_DEV];
        }
    }

    public function getUrl(EndpointInterface $endpoint) {
        return $this->getHost() . $endpoint->getPath();
    }
}