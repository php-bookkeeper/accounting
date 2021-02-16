<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Domain\Operation;

use Money\Money;
use Bookkeeper\Accounting\Domain\Account\AccountIdInterface;

final class TransactionCreationData
{
    public TransactionIdInterface $id;
    public AccountIdInterface $creditAccountId;
    public AccountIdInterface $debitAccountId;
    public Money $amount;

    public function __construct(
        TransactionIdInterface $id,
        AccountIdInterface $creditAccountId,
        AccountIdInterface $debitAccountId,
        Money $amount
    ) {
        $this->id = $id;
        $this->creditAccountId = $creditAccountId;
        $this->debitAccountId = $debitAccountId;
        $this->amount = $amount;
    }
}
