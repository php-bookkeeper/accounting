<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Infrastructure\Id\Uuid;

use Bookkeeper\Accounting\Domain\Account\AccountIdInterface;
use Ramsey\Uuid\UuidInterface;

final class AccountIdUuid implements AccountIdInterface
{
    private UuidInterface $value;

    public function __construct(UuidInterface $uuid)
    {
        $this->value = $uuid;
    }

    public function value(): string
    {
        return $this->value->toString();
    }
}
