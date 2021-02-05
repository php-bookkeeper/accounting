<?php

declare(strict_types=1);

namespace Vjik\Accounting\Domain\Operation;

use DateTimeImmutable;
use Money\Money;
use Vjik\Accounting\Domain\Account\AccountId;

final class Entry
{
    private AccountId $accountId;
    private DateTimeImmutable $dateTime;
    private Money $amount;

    public function __construct(
        AccountId $accountId,
        Money $amount,
        DateTimeImmutable $dateTime
    ) {
        $this->accountId = $accountId;
        $this->amount = $amount;
        $this->dateTime = $dateTime;
    }

    public function getAccountId(): AccountId
    {
        return $this->accountId;
    }

    public function getAmount(): Money
    {
        return $this->amount;
    }

    public function getDateTime(): DateTimeImmutable
    {
        return $this->dateTime;
    }
}
