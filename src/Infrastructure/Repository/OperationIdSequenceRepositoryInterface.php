<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Infrastructure\Repository;

interface OperationIdSequenceRepositoryInterface
{
    public function nextId(): string;
}
