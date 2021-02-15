<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Domain\Account;

interface AccountIdInterface
{
    public function __toString(): string;
}
