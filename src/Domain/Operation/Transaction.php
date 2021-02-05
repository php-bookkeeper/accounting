<?php

declare(strict_types=1);

namespace Vjik\Accounting\Domain\Operation;

use DateTimeImmutable;
use Money\Money;
use Vjik\Accounting\Domain\Account\AccountId;

final class Transaction
{
    private TransactionId $id;
    private Entry $debit;
    private Entry $credit;
    private Money $amount;
    private DateTimeImmutable $dateTime;

    public function __construct(
        TransactionId $id,
        AccountId $debitAccountId,
        AccountId $creditAccountId,
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

    public function getId(): TransactionId
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
