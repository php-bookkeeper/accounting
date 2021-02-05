<?php

declare(strict_types=1);

namespace Vjik\Accounting\Domain\Operation;

interface TransactionIdInterface
{
    public function __toString(): string;
}
