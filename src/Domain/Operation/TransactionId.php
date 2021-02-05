<?php

declare(strict_types=1);

namespace Vjik\Accounting\Domain\Operation;

interface TransactionId
{
    public function __toString(): string;
}
