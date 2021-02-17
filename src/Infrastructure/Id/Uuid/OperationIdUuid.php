<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Infrastructure\Id\Uuid;

use Bookkeeper\Accounting\Domain\Operation\OperationIdInterface;
use Ramsey\Uuid\UuidInterface;

final class OperationIdUuid implements OperationIdInterface
{
    private UuidInterface $value;

    public function __construct(UuidInterface $uuid)
    {
        $this->value = $uuid;
    }

    public function value(): string
    {
        return $this->value->toString();
    }
}
