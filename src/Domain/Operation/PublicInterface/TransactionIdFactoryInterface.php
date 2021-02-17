<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Domain\Operation\PublicInterface;

use Bookkeeper\Accounting\Domain\Operation\TransactionIdInterface;

interface TransactionIdFactoryInterface
{
    /**
     * Creates a transaction id object from the given string.
     * If value is not provided, it generates a new unique one.
     *
     * @param string|null $value String id representation to be converted
     *
     * @return TransactionIdInterface
     */
    public function create(?string $value = null): TransactionIdInterface;
}
