<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Domain\Operation\OperationService;

use Money\Money;
use Bookkeeper\Accounting\Domain\Account\AccountIdInterface;

final class TransactionDto
{
    public AccountIdInterface $debitAccountId;
    public AccountIdInterface $creditAccountId;
    public Money $amount;

    public function __construct(
        AccountIdInterface $debitAccountId,
        AccountIdInterface $creditAccountId,
        Money $amount
    ) {
        $this->debitAccountId = $debitAccountId;
        $this->creditAccountId = $creditAccountId;
        $this->amount = $amount;
    }
}
