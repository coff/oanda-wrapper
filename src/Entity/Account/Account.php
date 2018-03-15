<?php


namespace Coff\OandaWrapper\Entity\Account;


use Coff\OandaWrapper\Entity\Entity;
use Coff\OandaWrapper\Entity\Order\Order;
use Coff\OandaWrapper\Entity\Position\Position;
use Coff\OandaWrapper\Entity\Trade\TradeSummary;
use Coff\OandaWrapper\Enum\Currency;

/**
 * The full details of a client’s Account. This includes full open Trade, open Position and pending Order representation.
 *
 * Class Account
 * @package Coff\OandaWrapper\Entity
 */
class Account extends Entity
{
    /**
     * @var string $id Account Identifier
     */
    protected $id;

    /**
     * @var string $alias Client-assigned alias for the Account. Only provided if the Account has an alias set
     */
    protected $alias;

    /**
     * @var Currency $currency Home currency of the account
     */
    protected $currency;

    /**
     * @var string $balance The current balance of the Account. Represented in the Account's home currency (decimal).
     */
    protected $balance;

    /**
     * @var int $createdByUserId ID of the user that created the Account
     */
    protected $createdByUserId;

    /**
     * @var \DateTime The date/time when the Account was created.
     */
    protected $createdTime;

    /**
     * @var string $pl profit/loss realized over the lifetime of the Account (decimal)
     */
    protected $pl;

    /**
     * @var string $resettablePL The total realized profit/loss for the Account since it was last reset by the client.
     *                              Represented in the Account’s home currency.
     */
    protected $resettablePL;

    /**
     * @var \DateTime $resettabledPLTime The date/time that the Account’s resettablePL was last reset
     */
    protected $resettabledPLTime;

    /**
     * @var string $commission The total amount of commission paid over the lifetime of the Account. Represented in the
     *                          Account’s home currency.
     */
    protected $commission;

    /**
     * @var string $marginRate Client-provided margin rate override for the Account. The effective
     *                          margin rate of the Account is the lesser of this value and the OANDA
     *                          margin rate for the Account’s division. This value is only provided if a
     *                          margin rate override exists for the Account.
     */
    protected $marginRate;

    /**
     * @var \DateTime $marginCallEnterTime The date/time when the Account entered a margin call state. Only provided
     *                                      if the Account is in a margin call.
     */
    protected $marginCallEnterTime;

    /**
     * @var int $marginCallExtensionCount The number of times that the Account’s current margin call was extended.
     */
    protected $marginCallExtensionCount;

    /**
     * @var \DateTime $lastMarginCallExtensionTime The date/time of the Account’s last margin call extension.
     */
    protected $lastMarginCallExtensionTime;

    /**
     * @var int $openTradeCount The number of Trades currently open in the Account.
     */
    protected $openTradeCount;

    /**
     * @var int $openPositionCount The number of Positions currently open in the Account.
     */
    protected $openPositionCount;

    /**
     * @var int $pendingOrderCount The number of Orders currently pending in the Account.
     */
    protected $pendingOrderCount;

    /**
     * @var bool $hedgingEnabled Flag indicating that the Account has hedging enabled.
     */
    protected $hedgingEnabled;

    /**
     * @var string $unrealizedPL The total unrealized profit/loss for all Trades currently open in the
     *                              Account. Represented in the Account’s home currency.
     */
    protected $unrealizedPL;

    /**
     * @var string $nav The net asset value of the Account. Equal to Account balance +
     *                      unrealizedPL. Represented in the Account’s home currency.
     */
    protected $nav;

    /**
     * @var string $marginUsed Margin currently used for the Account. Represented in the Account’s home currency.
     */
    protected $marginUsed;

    /**
     * @var string $marginAvailable Margin available for Account. Represented in the Account’s home currency.
     */
    protected $marginAvailable;

    /**
     * @var string $positionValue The value of the Account’s open positions represented in the Account’s home currency.
     */
    protected $positionValue;

    /**
     * @var string $marginCloseoutUnrealizedPL The Account’s margin closeout unrealized PL.
     */
    protected $marginCloseoutUnrealizedPL;

    /**
     * @var string $marginCloseoutNAV The Account’s margin closeout NAV.
     */
    protected $marginCloseoutNAV;

    /**
     * @var string $marginCloseoutMarginUsed The Account’s margin closeout margin used.
     */
    protected $marginCloseoutMarginUsed;

    /**
     * @var string $marginCloseoutPercent The Account’s margin closeout percentage. When this value is 1.0 or above
     *                                      the Account is in a margin closeout situation.
     */
    protected $marginCloseoutPercent;

    /**
     * @var string $marginCloseoutPositionValue The value of the Account’s open positions as used for margin closeout
     *                                              calculations represented in the Account’s home currency. */
    protected $marginCloseoutPositionValue;

    /**
     * @var string $withdrawalLimit The current WithdrawalLimit for the account which will be zero or a
     *                                  positive value indicating how much can be withdrawn from the account.
     */
    protected $withdrawalLimit;

    /**
     * @var string $marginCallMarginUsed The Account’s margin call margin used.
     */
    protected $marginCallMarginUsed;

    /**
     * @var string $marginCallPercent The Account’s margin call percentage. When this value is 1.0 or above the
     *                                  Account is in a margin call situation.
     */
    protected $marginCallPercent;

    /**
     * @var string $lastTransactionId The ID of the last Transaction created for the Account.
     */
    protected $lastTransactionId;

    /**
     * @var TradeSummary[] $trades The details of the Trades currently open in the Account.
     */
    protected $trades;

    /**
     * @var Position[] $positions The details all Account Positions.
     */
    protected $positions;

    /**
     * @var Order[] $orders The details of the Orders currently pending in the Account.
     */
    protected $orders;

    /**
     * @param \stdClass $json
     * @return Account
     */
    public static function createFromJson(\stdClass $json): self
    {
        $entity = new static();

        $json = $json->account;

        $entity->id = $json->id;
        $entity->alias = isset($json->alias) ? $json->alias : null;
        $entity->currency = Currency::fromValue($json->currency);
        $entity->balance = $json->balance;
        $entity->createdByUserId = $json->createdByUserID;
        $entity->createdTime = \DateTime::createFromFormat('U.u', substr($json->createdTime, 0, 17));
        $entity->pl = $json->pl;
        $entity->resettablePL = $json->resettablePL;
        $entity->resettabledPLTime = \DateTime::createFromFormat('U.u', substr($json->resettablePLTime, 0, 17));
        $entity->commission = $json->commission;
        $entity->marginRate = $json->marginRate;
        $entity->marginCallEnterTime = $json->marginCallEnterTime;
        $entity->marginCallExtensionCount = $json->marginCallExtensionCount;
        $entity->lastMarginCallExtensionTime = $json->lastMarginCallExtensionTime;
        $entity->openTradeCount = $json->openTradeCount;
        $entity->openPositionCount = $json->openPositionCount;
        $entity->pendingOrderCount = $json->pendingOrderCount;
        $entity->hedgingEnabled = $json->hedgingEnabled;
        $entity->unrealizedPL = $json->unrealizedPL;
        $entity->nav = $json->NAV;
        $entity->marginUsed = $json->marginUsed;
        $entity->marginAvailable = $json->marginAvailable;
        $entity->positionValue = $json->positionValue;
        $entity->marginCloseoutUnrealizedPL = $json->marginCloseoutUnrealizedPL;
        $entity->marginCloseoutNAV = $json->marginCloseoutNAV;
        $entity->marginCloseoutMarginUsed = $json->marginCloseoutMarginUsed;
        $entity->marginCloseoutPercent = $json->marginCloseoutPercent;
        $entity->marginCloseoutPositionValue = $json->marginCloseoutPositionValue;
        $entity->withdrawalLimit = $json->withdrawalLimit;
        $entity->marginCallMarginUsed = $json->marginCallMarginUsed;
        $entity->marginCallPercent = $json->marginCallPercent;
        $entity->lastTransactionId = $json->lastTransactionId;

        foreach ($json->trades as $jsonItem) {
            $subEntity = TradeSummary::createFromJson($jsonItem);
            $entity->trades[] = $subEntity;
        }

        foreach ($json->positions as $jsonItem) {
            $subEntity = Position::createFromJson($jsonItem);
            $entity->positions[] = $subEntity;
        }

        foreach ($json->orders as $jsonItem) {
            $subEntity = Order::createFromJson($jsonItem);
            $entity->orders[] = $subEntity;
        }

        return $entity;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getAlias(): string
    {
        return $this->alias;
    }

    /**
     * @return Currency
     */
    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    /**
     * @return string
     */
    public function getBalance(): string
    {
        return $this->balance;
    }

    /**
     * @return int
     */
    public function getCreatedByUserId(): int
    {
        return $this->createdByUserId;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedTime(): \DateTime
    {
        return $this->createdTime;
    }

    /**
     * @return string
     */
    public function getPl(): string
    {
        return $this->pl;
    }

    /**
     * @return string
     */
    public function getResettablePL(): string
    {
        return $this->resettablePL;
    }

    /**
     * @return \DateTime
     */
    public function getResettabledPLTime(): \DateTime
    {
        return $this->resettabledPLTime;
    }

    /**
     * @return string
     */
    public function getCommission(): string
    {
        return $this->commission;
    }

    /**
     * @return string
     */
    public function getMarginRate(): string
    {
        return $this->marginRate;
    }

    /**
     * @return \DateTime
     */
    public function getMarginCallEnterTime(): \DateTime
    {
        return $this->marginCallEnterTime;
    }

    /**
     * @return int
     */
    public function getMarginCallExtensionCount(): int
    {
        return $this->marginCallExtensionCount;
    }

    /**
     * @return \DateTime
     */
    public function getLastMarginCallExtensionTime(): \DateTime
    {
        return $this->lastMarginCallExtensionTime;
    }

    /**
     * @return int
     */
    public function getOpenTradeCount(): int
    {
        return $this->openTradeCount;
    }

    /**
     * @return int
     */
    public function getOpenPositionCount(): int
    {
        return $this->openPositionCount;
    }

    /**
     * @return int
     */
    public function getPendingOrderCount(): int
    {
        return $this->pendingOrderCount;
    }

    /**
     * @return bool
     */
    public function isHedgingEnabled(): bool
    {
        return $this->hedgingEnabled;
    }

    /**
     * @return string
     */
    public function getUnrealizedPL(): string
    {
        return $this->unrealizedPL;
    }

    /**
     * @return string
     */
    public function getNav(): string
    {
        return $this->nav;
    }

    /**
     * @return string
     */
    public function getMarginUsed(): string
    {
        return $this->marginUsed;
    }

    /**
     * @return string
     */
    public function getMarginAvailable(): string
    {
        return $this->marginAvailable;
    }

    /**
     * @return string
     */
    public function getPositionValue(): string
    {
        return $this->positionValue;
    }

    /**
     * @return string
     */
    public function getMarginCloseoutUnrealizedPL(): string
    {
        return $this->marginCloseoutUnrealizedPL;
    }

    /**
     * @return string
     */
    public function getMarginCloseoutNAV(): string
    {
        return $this->marginCloseoutNAV;
    }

    /**
     * @return string
     */
    public function getMarginCloseoutMarginUsed(): string
    {
        return $this->marginCloseoutMarginUsed;
    }

    /**
     * @return string
     */
    public function getMarginCloseoutPercent(): string
    {
        return $this->marginCloseoutPercent;
    }

    /**
     * @return string
     */
    public function getMarginCloseoutPositionValue(): string
    {
        return $this->marginCloseoutPositionValue;
    }

    /**
     * @return string
     */
    public function getWithdrawalLimit(): string
    {
        return $this->withdrawalLimit;
    }

    /**
     * @return string
     */
    public function getMarginCallMarginUsed(): string
    {
        return $this->marginCallMarginUsed;
    }

    /**
     * @return string
     */
    public function getMarginCallPercent(): string
    {
        return $this->marginCallPercent;
    }

    /**
     * @return string
     */
    public function getLastTransactionId(): string
    {
        return $this->lastTransactionId;
    }

    /**
     * @return TradeSummary[]
     */
    public function getTrades(): array
    {
        return $this->trades;
    }

    /**
     * @return Position[]
     */
    public function getPositions(): array
    {
        return $this->positions;
    }

    /**
     * @return Order[]
     */
    public function getOrders(): array
    {
        return $this->orders;
    }


}