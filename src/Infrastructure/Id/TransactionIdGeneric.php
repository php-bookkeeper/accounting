<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Infrastructure\Id;

use Bookkeeper\Accounting\Domain\Operation\TransactionIdInterface;

final class TransactionIdGeneric implements TransactionIdInterface
{
    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }
}
