#!/usr/bin/php
<?php

namespace Coff\OandaWrapper\Examples;

use Coff\OandaWrapper\Endpoint\AccountEndpoint;

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

$endpoint = new AccountEndpoint();
/*$endpoint
    ->setResponseClass(...)*/

try {

    /** @var \Coff\OandaWrapper\EndpointResponse\EndpointResponseInterface $response */
    $response = $caller
        ->call($endpoint)
        ->getResponse();

    var_dump($response);

}  catch (\Exception $e) {
    echo $e->getMessage() . PHP_EOL;
    echo $e->getTraceAsString() . PHP_EOL;
}


