<?php

declare(strict_types=1);

namespace Vjik\Accounting\Domain\Account;

final class AccountType
{
    private const ACTIVE = 1;
    private const PASSIVE = 2;
    private const ACTIVE_PASSIVE = 3;

    private int $current;

    private function __construct(int $current)
    {
        $this->current = $current;
    }

    public function isActive(): bool
    {
        return $this->current === self::ACTIVE;
    }

    public function isPassive(): bool
    {
        return $this->current === self::PASSIVE;
    }

    public function isActivePassive(): bool
    {
        return $this->current === self::ACTIVE_PASSIVE;
    }

    public static function active(): self
    {
        return new self(self::ACTIVE);
    }

    public static function passive(): self
    {
        return new self(self::PASSIVE);
    }

    public static function activePassive(): self
    {
        return new self(self::ACTIVE_PASSIVE);
    }
}
