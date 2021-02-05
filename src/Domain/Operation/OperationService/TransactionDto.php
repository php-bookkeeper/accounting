<?php

declare(strict_types=1);

namespace Vjik\Accounting\Domain\Operation\OperationService;

use Money\Money;
use Vjik\Accounting\Domain\Account\AccountId;

final class TransactionDto
{
    public AccountId $debitAccountId;
    public AccountId $creditAccountId;
    public Money $amount;

    public function __construct(
        AccountId $debitAccountId,
        AccountId $creditAccountId,
        Money $amount
    ) {
        $this->debitAccountId = $debitAccountId;
        $this->creditAccountId = $creditAccountId;
        $this->amount = $amount;
    }
}
