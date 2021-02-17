<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Domain\Operation;

interface OperationRepositoryInterface
{
    public function getById(OperationIdInterface $id): ?Operation;

    public function save(Operation $operation): void;
}
