<?php

declare(strict_types=1);

namespace Vjik\Accounting\Domain\Operation;

use Money\Money;
use Vjik\Accounting\Domain\Account\AccountId;

final class CreateTransactionData
{
    public TransactionId $id;
    public AccountId $debitAccountId;
    public AccountId $creditAccountId;
    public Money $amount;

    public function __construct(
        TransactionId $id,
        AccountId $debitAccountId,
        AccountId $creditAccountId,
        Money $amount
    ) {
        $this->id = $id;
        $this->debitAccountId = $debitAccountId;
        $this->creditAccountId = $creditAccountId;
        $this->amount = $amount;
    }
}
