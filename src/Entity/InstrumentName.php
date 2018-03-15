<?php


namespace Coff\OandaWrapper\Entity;


use Coff\OandaWrapper\Enum\Currency;
use Coff\OandaWrapper\Exception\OandaException;

class InstrumentName extends Entity
{
    /**
     * @var Currency
     */
    protected $fromCurrency;
    /**
     * @var Currency
     */
    protected $toCurrency;

    public function __construct(Currency $fromCurrency, Currency $toCurrency)
    {
        $this->fromCurrency = $fromCurrency;
        $this->toCurrency = $toCurrency;
    }


    public static function createFromString($str) :InstrumentName
    {
        [$from, $to] = explode("_", $str);

        return new static(Currency::fromValue($from), Currency::fromValue($to));
    }


    public static function createFromJson(\stdClass $json) :Entity
    {
        throw new OandaException('Not implemented!');
    }

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