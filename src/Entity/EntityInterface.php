<?php


namespace Coff\OandaWrapper\Entity;


interface EntityInterface
{
    public function toJson(): string;

    public function fromJson(\stdClass $json);
}