#!/usr/bin/php
<?php

namespace Coff\OandaWrapper\Examples;

use Coff\OandaWrapper\Endpoint\OrderEndpoint;
use Coff\OandaWrapper\Entity\ClientExtensions;
use Coff\OandaWrapper\Entity\Details\StopLossDetails;
use Coff\OandaWrapper\Entity\InstrumentName;
use Coff\OandaWrapper\Entity\OrderRequest\MarketOrderRequest;

include(__DIR__ . '/../vendor/autoload.php');

include(__DIR__ . '/bootstrap.php');

/**
 * -------------------------------------------------------------------------
 * Remark:
 *
 * Use only practice (demo) account for running example scripts and testing!
 * Some of them may open trade positions for you!
 * -------------------------------------------------------------------------
 */

$endpoint = new OrderEndpoint();
$endpoint->setOrderRequest($marketOrder = new MarketOrderRequest());

$marketOrder
    ->setInstrument(InstrumentName::createFromString("EUR_PLN"))
    ->setUnits(1)
    ->setPriceBound(10)
    ->setStopLossOnFill($stopLossDet = new StopLossDetails())
    ->setClientExtensions( $extensions = new ClientExtensions());

$extensions
    ->setComment('This is a comment')
    ->setTag('#example3');

$stopLossDet
    ->setPrice(9);

try {
    $response = $caller
        ->call($endpoint)
        ->getResponse();

    var_dump($response);

} catch (\Exception $e) {
    echo $e->getMessage() . PHP_EOL;
    echo $e->getTraceAsString() . PHP_EOL;
}