<?php

declare(strict_types=1);

namespace Vjik\Accounting\Domain\Operation;

interface OperationIdInterface
{
    public function __toString(): string;
}
