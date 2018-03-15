#!/usr/bin/php
<?php

namespace Coff\OandaWrapper\Examples;

use Coff\OandaWrapper\Enum\Currency;

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

$instrumentName = new \Coff\OandaWrapper\Entity\InstrumentName(Currency::EUR(), Currency::USD());

$endpoint = new \Coff\OandaWrapper\Endpoint\PricingEndpoint();
$endpoint->addInstrument($instrumentName);

try {
    $response = $caller
        ->call($endpoint)
        ->getResponse();

    var_dump($response);

} catch (\Exception $e) {
    echo $e->getMessage() . PHP_EOL;
    echo $e->getTraceAsString() . PHP_EOL;
}