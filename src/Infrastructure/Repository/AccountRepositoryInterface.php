<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Infrastructure\Repository;

use Bookkeeper\Accounting\Domain\Account\Account;
use Bookkeeper\Accounting\Domain\Account\AccountIdInterface;

interface AccountRepositoryInterface
{
    public function getById(AccountIdInterface $id): ?Account;

    public function save(Account $account): void;

}
