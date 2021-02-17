<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Infrastructure\Id\Sequence;

use Bookkeeper\Accounting\Domain\Operation\OperationIdFactoryInterface;
use Bookkeeper\Accounting\Domain\Operation\OperationIdInterface;
use Bookkeeper\Accounting\Infrastructure\Id\OperationIdGeneric;
use Bookkeeper\Accounting\Infrastructure\Repository\OperationIdSequenceRepositoryInterface;

class OperationIdFactorySequential implements OperationIdFactoryInterface
{
    private OperationIdSequenceRepositoryInterface $repository;

    public function __construct(OperationIdSequenceRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function create(?string $value = null): OperationIdInterface
    {
        if ($value === null) {
            return new OperationIdGeneric($this->repository->nextId());
        }

        return new OperationIdGeneric($value);
    }
}
