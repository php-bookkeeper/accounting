<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Domain\Operation\PublicInterface;

use Bookkeeper\Accounting\Domain\Operation\OperationIdInterface;

interface OperationIdFactoryInterface
{
    /**
     * Creates an operation id object from the given string.
     * If value is not provided, it generates a new unique id.
     *
     * @param string|null $value String id representation to be converted
     *
     * @return OperationIdInterface
     */
    public function create(?string $value = null): OperationIdInterface;
}
