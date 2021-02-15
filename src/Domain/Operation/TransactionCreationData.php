<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Domain\Operation;

use Money\Money;
use Bookkeeper\Accounting\Domain\Account\AccountIdInterface;

final class TransactionCreationData
{
    private AccountIdInterface $creditAccountId;
    private AccountIdInterface $debitAccountId;
    private Money $amount;

    public function __construct(
        AccountIdInterface $creditAccountId,
        AccountIdInterface $debitAccountId,
        Money $amount
    ) {
        $this->creditAccountId = $creditAccountId;
        $this->debitAccountId = $debitAccountId;
        $this->amount = $amount;
    }

    public function getCreditAccount(): AccountIdInterface
    {
        return $this->creditAccountId;
    }

    public function getDebitAccount(): AccountIdInterface
    {
        return $this->debitAccountId;
    }

    public function getAmount(): Money
    {
        return $this->amount;
    }
}
