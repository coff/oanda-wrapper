#!/usr/bin/php
<?php

namespace Coff\OandaWrapper\Examples;

include(__DIR__ . '/../vendor/autoload.php');

include(__DIR__ . '/bootstrap.php');

$endpoint = new \Coff\OandaWrapper\Endpoint\AccountEndpoint();
/*$endpoint
    ->setResponseClass(...)*/

try {

    /** @var \Coff\OandaWrapper\Response\ResponseInterface $response */
    $response = $caller
        ->call($endpoint)
        ->getResponse();

    var_dump($response);

}  catch (\Exception $e) {
    echo $e->getMessage() . PHP_EOL;
    echo $e->getTraceAsString() . PHP_EOL;
}


