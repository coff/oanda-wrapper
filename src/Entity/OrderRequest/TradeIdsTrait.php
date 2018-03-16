<?php


namespace Coff\OandaWrapper\Entity\OrderRequest;


trait TradeIdsTrait
{
    /** @var string $tradeId */
    protected $tradeId;

    /** @var string $clientTradeId */
    protected $clientTradeId;

    public function fillTradeIds(\stdClass $obj)
    {
        $obj->tradeID = (string) $this->tradeId;
        $obj->clientTradeID = (string) $this->clientTradeId;

    }

    /**
     * @return string
     */
    public function getTradeId(): string
    {
        return $this->tradeId;
    }

    /**
     * @param string $tradeId
     * @return $this
     */
    public function setTradeId(string $tradeId)
    {
        $this->tradeId = $tradeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientTradeId(): string
    {
        return $this->clientTradeId;
    }

    /**
     * @param string $clientTradeId
     * @return $this
     */
    public function setClientTradeId(string $clientTradeId)
    {
        $this->clientTradeId = $clientTradeId;
        return $this;
    }

}