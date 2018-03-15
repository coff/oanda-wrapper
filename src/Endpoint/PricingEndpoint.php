<?php


namespace Coff\OandaWrapper\Endpoint;

use Coff\OandaWrapper\Entity\InstrumentName;
use Coff\OandaWrapper\EndpointResponse\PricingEndpointRespose;

/**
 * Get pricing information for a specified list of Instruments within an Account.
 *
 * Class PricingEndpoint
 * @package Coff\OandaWrapper\Endpoint
 */
class PricingEndpoint extends AccountEndpoint
{
    protected $responseClass = PricingEndpointRespose::class;

    protected $path = '/pricing';

    /** @var InstrumentName[] */
    protected $instruments;

    /** @var \DateTime */
    protected $since;

    public function __construct()
    {
        $this->since = \DateTime::createFromFormat('U', 0);
    }

    public function addInstrument(InstrumentName $instrument): PricingEndpoint
    {
        $this->instruments[] = $instrument;

        return $this;
    }

    public function setInstruments(array $instruments): PricingEndpoint
    {
        $this->instruments = $instruments;

        return $this;
    }

    public function setSince(\DateTime $dateTime): PricingEndpoint
    {
        $this->since = $dateTime;

        return $this;
    }

    public function getPath()
    {

        $instrumentsArg = 'instruments=' . implode(',', $this->instruments);
        $sinceArg = 'since=' . $this->since->format('U.u');

        return parent::getPath() . $this->path . '?' . $instrumentsArg . '&' . $sinceArg;
    }
}