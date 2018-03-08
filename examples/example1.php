#!/usr/bin/php
<?php

include (__DIR__ . '/../vendor/autoload.php');

/* bootstrap start */

$oanda = new \Coff\OandaWrapper\OandaApiClient();
$oanda
    ->setStage(\Coff\OandaWrapper\OandaApiClient::STAGE_DEV)
    ->setAuthToken('xxx')
    ->setAccount('xxx');

$caller = new \Coff\OandaWrapper\Caller\GuzzleHttpCaller();

$caller
    ->setRequestClass(\GuzzleHttp\Psr7\Request::class)
    ->setHttpClient(new \GuzzleHttp\Client())
    ->setClient($oanda);

/* bootstrap end */


/* calling code */
$endpoint = new \Coff\OandaWrapper\Endpoint\AccountEndpoint();

try {
    $caller->call($endpoint);

    $resultData = $endpoint->getResult();

   var_dump($resultData);

} catch (\Exception $e) {
    echo $e->getMessage();
}


