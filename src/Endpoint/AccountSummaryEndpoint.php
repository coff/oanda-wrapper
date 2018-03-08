<?php


namespace Coff\OandaWrapper\Endpoint;


class AccountSummaryEndpoint extends AccountEndpoint
{
    protected $path = '/summary';

    public function getPath()
    {
        return parent::getPath() . $this->path;
    }
}