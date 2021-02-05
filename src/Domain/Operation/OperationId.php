<?php

declare(strict_types=1);

namespace Vjik\Accounting\Domain\Operation;

interface OperationId
{
    public function __toString(): string;
}
