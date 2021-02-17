<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Infrastructure\Repository;

interface AccountIdSequenceRepositoryInterface
{
    public function nextId(): string;
}
