<?php


namespace Coff\OandaWrapper\Entity;


use Coff\OandaWrapper\Enum\Currency;

class InstrumentName
{
    /**
     * @var Currency
     */
    protected $fromCurrency;
    /**
     * @var Currency
     */
    protected $toCurrency;

    /**
     * @return Currency
     */
    public function getFromCurrency(): Currency
    {
        return $this->fromCurrency;
    }

    /**
     * @param Currency $fromCurrency
     * @return InstrumentName
     */
    public function setFromCurrency(Currency $fromCurrency): InstrumentName
    {
        $this->fromCurrency = $fromCurrency;
        return $this;
    }

    /**
     * @return Currency
     */
    public function getToCurrency(): Currency
    {
        return $this->toCurrency;
    }

    /**
     * @param Currency $toCurrency
     * @return InstrumentName
     */
    public function setToCurrency(Currency $toCurrency): InstrumentName
    {
        $this->toCurrency = $toCurrency;
        return $this;
    }

    public function __toString()
    {
        return $this->fromCurrency . '_' . $this->toCurrency;
    }


}