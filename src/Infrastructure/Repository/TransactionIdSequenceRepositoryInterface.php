<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Infrastructure\Repository;

interface TransactionIdSequenceRepositoryInterface
{
    public function nextId(): string;
}
