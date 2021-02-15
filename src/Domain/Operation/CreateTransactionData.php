<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Domain\Operation;

use Money\Money;
use Bookkeeper\Accounting\Domain\Account\AccountIdInterface;

final class CreateTransactionData
{
    public TransactionIdInterface $id;
    public AccountIdInterface $debitAccountId;
    public AccountIdInterface $creditAccountId;
    public Money $amount;

    public function __construct(
        TransactionIdInterface $id,
        AccountIdInterface $debitAccountId,
        AccountIdInterface $creditAccountId,
        Money $amount
    ) {
        $this->id = $id;
        $this->debitAccountId = $debitAccountId;
        $this->creditAccountId = $creditAccountId;
        $this->amount = $amount;
    }
}
