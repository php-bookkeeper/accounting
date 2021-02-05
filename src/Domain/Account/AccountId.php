<?php

declare(strict_types=1);

namespace Vjik\Accounting\Domain\Account;

interface AccountId
{
    public function __toString(): string;
}
