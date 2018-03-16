<?php


namespace Coff\OandaWrapper\Entity\OrderRequest;


use Coff\OandaWrapper\Entity\ClientExtensions;

trait TradeClientExtensionsTrait
{
    /**
     * Client Extensions to add to the Trade created when the Order is filled
     * (if such a Trade is created). Do not set, modify, or delete
     * tradeClientExtensions if your account is associated with MT4.
     *
     * @var ClientExtensions
     */
    protected $tradeClientExtensions;


    /**
     * @param \stdClass $obj
     */
    public function fillTradeClientExtensions(\stdClass $obj) {
        if (null !== $this->tradeClientExtensions) {
            $obj->tradeClientExtensions = $this->tradeClientExtensions->toJson();
        }
    }

    /**
     * @return ClientExtensions
     */
    public function getTradeClientExtensions(): ClientExtensions
    {
        return $this->tradeClientExtensions;
    }

    /**
     * @param ClientExtensions $tradeClientExtensions
     * @return $this
     */
    public function setTradeClientExtensions(ClientExtensions $tradeClientExtensions)
    {
        $this->tradeClientExtensions = $tradeClientExtensions;
        return $this;
    }
}