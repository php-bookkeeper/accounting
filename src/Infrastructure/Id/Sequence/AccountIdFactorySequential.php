<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Infrastructure\Id\Sequence;

use Bookkeeper\Accounting\Domain\Account\AccountIdInterface;
use Bookkeeper\Accounting\Infrastructure\Id\AccountIdFactoryInterface;
use Bookkeeper\Accounting\Infrastructure\Id\AccountIdGeneric;
use Bookkeeper\Accounting\Infrastructure\Repository\AccountIdSequenceRepositoryInterface;

class AccountIdFactorySequential implements AccountIdFactoryInterface
{
    private AccountIdSequenceRepositoryInterface $repository;

    public function __construct(AccountIdSequenceRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function create(?string $value = null): AccountIdInterface
    {
        if ($value === null) {
            return new AccountIdGeneric($this->repository->nextId());
        }

        return new AccountIdGeneric($value);
    }
}
