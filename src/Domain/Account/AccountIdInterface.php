<?php

declare(strict_types=1);

namespace Vjik\Accounting\Domain\Account;

interface AccountIdInterface
{
    public function __toString(): string;
}
