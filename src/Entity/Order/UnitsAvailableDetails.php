<?php


namespace Coff\OandaWrapper\Entity\Order;


use Coff\OandaWrapper\Entity\Entity;

class UnitsAvailableDetails extends Entity
{
    /** @var string */
    protected $short;

    /** @var string */
    protected $long;

    public function __construct(string $short, string $long)
    {
        $this->short = $short;

        $this->long = $long;
    }

    public static function createFromJson(\stdClass $json): self
    {
        return new static($json->short, $json->long);
    }

    /**
     * @return string
     */
    public function getShort(): string
    {
        return $this->short;
    }

    /**
     * @return string
     */
    public function getLong(): string
    {
        return $this->long;
    }


}