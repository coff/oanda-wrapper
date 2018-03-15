<?php


namespace Coff\OandaWrapper\Entity\OrderRequest;


use Coff\OandaWrapper\Entity\Entity;
use Coff\OandaWrapper\Enum\OrderType;

abstract class OrderRequest extends Entity
{
    /** @var OrderType */
    protected $type;


}