<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Domain\Operation\Transaction;

use Bookkeeper\Accounting\Domain\Account\AccountIdInterface;
use DateTimeImmutable;
use Money\Money;

final class Transaction
{
    private TransactionIdInterface $id;
    private Entry $credit;
    private Entry $debit;
    private Money $amount;
    private DateTimeImmutable $dateTime;

    public function __construct(
        TransactionIdInterface $id,
        AccountIdInterface $creditAccountId,
        AccountIdInterface $debitAccountId,
        Money $amount,
        DateTimeImmutable $dateTime
    ) {
        $this->id = $id;

        $this->credit = new Entry(
            $creditAccountId,
            $amount,
            $dateTime
        );

        $this->debit = new Entry(
            $debitAccountId,
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

    public function getCredit(): Entry
    {
        return $this->credit;
    }

    public function getDebit(): Entry
    {
        return $this->debit;
    }

    public function getAmount(): Money
    {
        return $this->amount;
    }

    public function getCreationTime(): DateTimeImmutable
    {
        return $this->dateTime;
    }
}
