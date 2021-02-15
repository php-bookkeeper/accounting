<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Domain\Operation;

interface TransactionIdInterface
{
    public function __toString(): string;
}
