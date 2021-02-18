<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Infrastructure\Id\Sequence;

use Bookkeeper\Accounting\Infrastructure\Id\TransactionIdGeneric;
use Bookkeeper\Accounting\Domain\Operation\Transaction\TransactionIdFactoryInterface;
use Bookkeeper\Accounting\Domain\Operation\Transaction\TransactionIdInterface;
use Bookkeeper\Accounting\Infrastructure\Repository\TransactionIdSequenceRepositoryInterface;

class TransactionIdFactorySequential implements TransactionIdFactoryInterface
{
    private TransactionIdSequenceRepositoryInterface $repository;

    public function __construct(TransactionIdSequenceRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function create(?string $value = null): TransactionIdInterface
    {
        if ($value === null) {
            return new TransactionIdGeneric($this->repository->nextId());
        }

        return new TransactionIdGeneric($value);
    }
}
