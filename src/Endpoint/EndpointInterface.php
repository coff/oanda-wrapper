<?php


namespace Coff\OandaWrapper\Endpoint;


interface EndpointInterface
{
    public function getPath();

    public function getMethod();

    public function getHeaders();

    public function setResponseClass(string $class): EndpointInterface;

    public function getResponseClass(): string;
}