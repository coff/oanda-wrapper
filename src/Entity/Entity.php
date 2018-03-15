<?php

namespace Coff\OandaWrapper\Entity;

use Coff\OandaWrapper\Exception\OandaException;

abstract class Entity implements EntityInterface
{
    /**
     * @param \stdClass $json
     * @throws OandaException
     */
    public static function createFromJson(\stdClass $json)
    {
        throw new OandaException('Method ' . __METHOD__ . ' not implemented for class ' . get_called_class());
    }

    /**
     * @return \stdClass
     * @throws OandaException
     */
    public function toJson(): \stdClass
    {
        throw new OandaException('Method ' . __METHOD__ . ' not implemented for class ' . get_called_class());
    }
}