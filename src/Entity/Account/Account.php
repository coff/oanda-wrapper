<?php


namespace Coff\OandaWrapper\Entity;


use Coff\OandaWrapper\Enum\Currency;

/**
 * The full details of a client’s Account. This includes full open Trade, open Position and pending Order representation.
 *
 * Class Account
 * @package Coff\OandaWrapper\Entity
 */
class Account extends Entity
{
    /** @var string $id Account Identifier */
    protected $id;

    /** @var string $alias Client-assigned alias for the Account. Only provided if the Account has an alias set */
    protected $alias;

    /** @var Currency $currency Home currency of the account */
    protected $currency;

    /** @var string $balance The current balance of the Account. Represented in the Account's home currency (decimal). */
    protected $balance;

    /** @var int $createdByUserId ID of the user that created the Account */
    protected $createdByUserId;

    /** @var \DateTime The date/time when the Account was created. */
    protected $createdTime;

    /** @var string $pl profit/loss realized over the lifetime of the Account (decimal) */
    protected $pl;

    /**
     * @var string $resettablePL    The total realized profit/loss for the Account since it was last reset by the client.
     *                              Represented in the Account’s home currency.
     */
    protected $resettablePL;

    /** @var \DateTime $resettabledPLTime  The date/time that the Account’s resettablePL was last reset */
    protected $resettabledPLTime;

    /**
     * @var string $commission  The total amount of commission paid over the lifetime of the Account. Represented in the
     *                          Account’s home currency.
     */
    protected $commission;

    /**
     * @var string $marginRate  Client-provided margin rate override for the Account. The effective
     *                          margin rate of the Account is the lesser of this value and the OANDA
     *                          margin rate for the Account’s division. This value is only provided if a
     *                          margin rate override exists for the Account.
     */
    protected $marginRate;

    /**
     * @var \DateTime $marginCallEnterTime  The date/time when the Account entered a margin call state. Only provided
     *                                      if the Account is in a margin call.
     */
    protected $marginCallEnterTime;

    /** @var int $marginCallExtensionCount The number of times that the Account’s current margin call was extended. */
    protected $marginCallExtensionCount;

    /** @var \DateTime $lastMarginCallExtensionTime  The date/time of the Account’s last margin call extension. */
    protected $lastMarginCallExtensionTime;

    /** @var int $openTradeCount The number of Trades currently open in the Account. */
    protected $openTradeCount;

    /** @var int $openPositionCount The number of Positions currently open in the Account. */
    protected $openPositionCount;

    /** @var int $pendingOrderCount The number of Orders currently pending in the Account. */
    protected $pendingOrderCount;

    /** @var bool $hedgingEnabled Flag indicating that the Account has hedging enabled. */
    protected $hedgingEnabled;

    /**
     * @var string $unrealizedPL    The total unrealized profit/loss for all Trades currently open in the
     *                              Account. Represented in the Account’s home currency.
     */
    protected $unrealizedPL;

    /**
     * @var string $nav     The net asset value of the Account. Equal to Account balance +
     *                      unrealizedPL. Represented in the Account’s home currency.
     */
    protected $nav;

    /** @var string $marginUsed Margin currently used for the Account. Represented in the Account’s home currency. */
    protected $marginUsed;

    /** @var string $marginAvailable Margin available for Account. Represented in the Account’s home currency. */
    protected $marginAvailable;

    /** @var string $positionValue The value of the Account’s open positions represented in the Account’s home currency. */
    protected $positionValue;

    /** @var string $marginCloseoutUnrealizedPL The Account’s margin closeout unrealized PL. */
    protected $marginCloseoutUnrealizedPL;

    /** @var string $marginCloseoutNAV The Account’s margin closeout NAV. */
    protected $marginCloseoutNAV;

    /** @var string $marginCloseoutMarginUsed The Account’s margin closeout margin used. */
    protected $marginCloseoutMarginUsed;

    /**
     * @var string $marginCloseoutPercent   The Account’s margin closeout percentage. When this value is 1.0 or above
     *                                      the Account is in a margin closeout situation.
     */
    protected $marginCloseoutPercent;

    /**
     * @var string $marginCloseoutPositionValue     The value of the Account’s open positions as used for margin closeout
     *                                              calculations represented in the Account’s home currency. */
    protected $marginCloseoutPositionValue;

    /**
     * @var string $withdrawalLimit     The current WithdrawalLimit for the account which will be zero or a
     *                                  positive value indicating how much can be withdrawn from the account.
     */
    protected $withdrawalLimit;

    /**
     * @param \stdClass $json
     * @return $this|void
     */
    public function fromJson(\stdClass $json)
    {
        $this->id = $json->id;
        $this->alias = isset($json->alias) ? $json->alias : null;
        $this->currency = Currency::fromValue($json->currency);
        $this->balance = $json->balance;
        $this->createdByUserId = $json->createdByUserID;
        $this->createdTime = new \DateTime($json->createdTime);
        $this->pl = $json->pl;
        $this->resettablePL = $json->resettablePL;
        $this->resettabledPLTime = new \DateTime($json->resettablePLTime);
    }
}