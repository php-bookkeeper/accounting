<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Infrastructure\Repository;

use Bookkeeper\Accounting\Domain\Operation\Operation;
use Bookkeeper\Accounting\Domain\Operation\OperationIdInterface;

interface OperationRepositoryInterface
{
    public function getById(OperationIdInterface $id): ?Operation;

    public function save(Operation $operation): void;
}
