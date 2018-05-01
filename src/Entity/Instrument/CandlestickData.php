<?php

namespace Coff\OandaWrapper\Entity\Instrument;

use Coff\OandaWrapper\Entity\Entity;

class CandlestickData extends Entity
{
    /** @var string opening, highest, lowest, closing prices */
    protected $o, $h, $l, $c;

    /**
     * @param stdClass $json
     * @return CandlestickData
     */
    public static function createFromJson(\stdClass $json)
    {
        $entity = new static();

        $entity->o = $json->o;
        $entity->h = $json->h;
        $entity->l = $json->l;
        $entity->c = $json->c;

        return $entity;
    }

    /**
     * @return string
     */
    public function getO(): string
    {
        return $this->o;
    }

    /**
     * @return string
     */
    public function getH(): string
    {
        return $this->h;
    }

    /**
     * @return string
     */
    public function getL(): string
    {
        return $this->l;
    }

    /**
     * @return string
     */
    public function getC(): string
    {
        return $this->c;
    }

}