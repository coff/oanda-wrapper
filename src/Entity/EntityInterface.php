<?php


namespace Coff\OandaWrapper\Entity;


interface EntityInterface
{
    public static function createFromJson(\stdClass $json): Entity;

    public function toJson(): string;
}