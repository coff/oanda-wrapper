<?php


namespace Coff\OandaWrapper\Enum;

/**
 * Specification of how Positions in the AccountEndpoint are modified when the Order is filled.
 *
 * Class OrderPositionFill
 * @package Coff\OandaWrapper\Enum
 */
class OrderPositionFill extends Enum
{
    const
        __default = self::DEFAULT,
        OPEN_ONLY = "OPEN_ONLY",    // When the Order is filled, only allow Positions to be opened or extended.
        REDUCE_FIRST = "REDUCE_FIRST", // When the Order is filled, always fully reduce an existing Position
        // before opening a new Position.
        REDUCE_ONLY = "REDUCE_ONLY",  // When the Order is filled, only reduce an existing Position.
        DEFAULT = "DEFAULT";       // When the Order is filled, use REDUCE_FIRST behaviour for non-client
                                    // hedging Accounts, and OPEN_ONLY behaviour for client hedging Accounts.
}