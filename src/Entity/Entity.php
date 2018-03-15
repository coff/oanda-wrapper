<?php

namespace Coff\OandaWrapper\Entity;

abstract class Entity implements EntityInterface
{
    public function toJson(): string
    {
        return '{}';
    }
}