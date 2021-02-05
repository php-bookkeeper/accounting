<?php

declare(strict_types=1);

namespace Vjik\Accounting\Infrastructure\Id\Account;

use Vjik\Accounting\Domain\Account\AccountIdInterface;

final class IntegerAccountId implements AccountIdInterface
{
    private int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function __toString(): string
    {
        return (string)$this->id;
    }
}
