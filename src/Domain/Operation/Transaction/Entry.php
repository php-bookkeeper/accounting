<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Domain\Operation\Transaction;

use Bookkeeper\Accounting\Domain\Account\AccountIdInterface;
use DateTimeImmutable;
use Money\Money;

final class Entry
{
    private AccountIdInterface $accountId;
    private DateTimeImmutable $dateTime;
    private Money $amount;

    public function __construct(
        AccountIdInterface $accountId,
        Money $amount,
        DateTimeImmutable $dateTime
    ) {
        $this->accountId = $accountId;
        $this->amount = $amount;
        $this->dateTime = $dateTime;
    }

    public function getAccountId(): AccountIdInterface
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
