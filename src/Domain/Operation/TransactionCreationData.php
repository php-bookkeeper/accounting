<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Domain\Operation;

use Bookkeeper\Accounting\Domain\Account\AccountIdInterface;
use Bookkeeper\Accounting\Domain\Operation\Transaction\TransactionIdInterface;
use Money\Money;

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
