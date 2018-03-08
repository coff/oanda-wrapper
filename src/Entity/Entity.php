<?php

namespace Coff\OandaWrapper\Entity;

abstract class Entity implements EntityInterface
{
    public function toJson(): string
    {
        return '{}';
    }

    public function fromJson(\stdClass $json)
    {
        return $this;
    }
}