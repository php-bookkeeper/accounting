<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Infrastructure\Id;

use Bookkeeper\Accounting\Domain\Account\AccountIdInterface;

interface AccountIdFactoryInterface
{
    /**
     * Creates an operation id object from the given string.
     * If value is not provided, it generates a new unique id.
     *
     * @param string|null $value String id representation to be converted
     *
     * @return AccountIdInterface
     */
    public function create(?string $value = null): AccountIdInterface;
}
