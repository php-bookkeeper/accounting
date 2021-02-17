<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Domain\Operation;

interface OperationIdInterface
{
    public function value(): string;
}
