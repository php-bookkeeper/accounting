<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Domain\Operation\Transaction;

interface TransactionIdInterface
{
    public function value(): string;
}
