<?php

declare(strict_types=1);

namespace Vjik\Accounting\Infrastructure\Id\Account;

use Ramsey\Uuid\Uuid;
use Vjik\Accounting\Domain\Account\AccountIdInterface;

final class UuidAccountId implements AccountIdInterface
{
    private Uuid $id;

    public function __construct(Uuid $id)
    {
        $this->id = $id;
    }

    public function getId(): Uuid
    {
        return $this->id;
    }

    public function __toString(): string
    {
        return $this->id->toString();
    }
}
