<?php


namespace Coff\OandaWrapper\Entity;


interface EntityInterface
{
    /**
     * @param \stdClass $json
     * @return $this
     */
    public static function createFromJson(\stdClass $json);

    /**
     * @return \stdClass
     */
    public function toJson(): \stdClass;
}