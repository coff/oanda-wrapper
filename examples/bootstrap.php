<?php

$config = include (__DIR__ . '/../app/config.php');

/* bootstrap start */

/**
 * -------------------------------------------------------------------------
 * Remark:
 *
 * Use only practice (demo) account for running example scripts and testing!
 * Some of them may open trade positions for you!
 * -------------------------------------------------------------------------
 */

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

/* bootstrap end */
