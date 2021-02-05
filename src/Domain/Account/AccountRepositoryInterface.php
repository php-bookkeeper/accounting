<?php

declare(strict_types=1);

namespace Vjik\Accounting\Domain\Account;

interface AccountRepositoryInterface
{
    public function getById(AccountIdInterface $id): ?Account;

    public function save(Account $account): void;

}
