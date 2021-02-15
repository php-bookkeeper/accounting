<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Domain\Operation;

use DateTimeImmutable;
use Money\Money;
use Bookkeeper\Accounting\Domain\Account\AccountIdInterface;

final class Transaction
{
    private TransactionIdInterface $id;
    private Entry $debit;
    private Entry $credit;
    private Money $amount;
    private DateTimeImmutable $dateTime;

    public function __construct(
        TransactionIdInterface $id,
        AccountIdInterface $debitAccountId,
        AccountIdInterface $creditAccountId,
        Money $amount,
        DateTimeImmutable $dateTime
    ) {
        $this->id = $id;

        $this->debit = new Entry(
            $debitAccountId,
            $amount,
            $dateTime
        );

        $this->credit = new Entry(
            $creditAccountId,
            $amount,
            $dateTime
        );

        $this->amount = $amount;
        $this->dateTime = $dateTime;
    }

    public function getId(): TransactionIdInterface
    {
        return $this->id;
    }

    public function getDebit(): Entry
    {
        return $this->debit;
    }

    public function getCredit(): Entry
    {
        return $this->credit;
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
