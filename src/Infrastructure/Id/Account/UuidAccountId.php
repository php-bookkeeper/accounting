<?php

declare(strict_types=1);

namespace Vjik\Accounting\Infrastructure\Id\Account;

use Ramsey\Uuid\UuidInterface;
use Vjik\Accounting\Domain\Account\AccountIdInterface;

final class UuidAccountId implements AccountIdInterface
{
    private UuidInterface $id;

    public function __construct(UuidInterface $id)
    {
        $this->id = $id;
    }

    public function getId(): UuidInterface
    {
        return $this->id;
    }

    public function __toString(): string
    {
        return $this->id->toString();
    }
}
