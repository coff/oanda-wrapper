<?php


namespace Coff\OandaWrapper\Entity;


interface EntityInterface
{
    /**
     * @param \stdClass $json
     * @return $this
     */
    public static function createFromJson(\stdClass $json);

    public function toJson(): string;
}