<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Infrastructure\Id\Uuid;

use Bookkeeper\Accounting\Domain\Account\AccountIdInterface;
use Bookkeeper\Accounting\Infrastructure\Id\AccountIdFactoryInterface;

final class AccountIdFactoryUuid implements AccountIdFactoryInterface
{
    private UuidFactory $uuidFactory;

    public function __construct(UuidFactory $uuidFactory)
    {
        $this->uuidFactory = $uuidFactory;
    }

    public function create(?string $value = null): AccountIdInterface
    {
        return new AccountIdUuid($this->uuidFactory->create($value));
    }
}
