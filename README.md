# oanda-wrapper

Oanda API Wrapper for PHP

Not fully implemented yet! Wanna help? Let me know!

# Remarks

I take absolutely no responsibility for consequences of using this
software. Some example scripts and tests may open trade positions
on your account causing real financial losses! Run test scripts with 
your DEMO ACCOUNT ONLY! You're using this software on your own risk!

# Examples

Usage example:

```php
/* bootstrapping */
$oanda = new \Coff\OandaWrapper\OandaApiClient();
$oanda
    ->setStage(\Coff\OandaWrapper\OandaApiClient::STAGE_DEV)
    ->setAuthToken($config['token'])
    ->setAccount($config['account']);

$caller = new \Coff\OandaWrapper\Caller\GuzzleHttpCaller();

$caller
    ->setHttpRequestClass(\GuzzleHttp\Psr7\Request::class)
    ->setHttpClient(new \GuzzleHttp\Client())
    ->setClient($oanda);

/* usage */
$instrumentName = new InstrumentName(Currency::EUR(), Currency::USD());

$endpoint = new PricingEndpoint();
$endpoint->addInstrument($instrumentName);

$response = $caller
    ->call($endpoint)
    ->getResponse();

```

# Implementation state

## General 

- [x] API Caller
- [x] API client
- [x] Entities
- [x] Error handling
- [ ] tests

## Endpoints

- [x] account endpoint (partially)
- [x] instrument endpoint (partially)
- [x] order endpoint (partially)
- [ ] trade endpoint
- [ ] position endpoint
- [x] pricing endpoint (50%)
- [ ] transaction endpoint
- [ ] Oanda ForexLabs (not planned)
