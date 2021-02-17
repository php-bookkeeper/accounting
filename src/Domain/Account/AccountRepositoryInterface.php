<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Domain\Account;

interface AccountRepositoryInterface
{
    public function getById(AccountIdInterface $id): ?Account;

    public function save(Account $account): void;
}
