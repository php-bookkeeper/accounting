<?php

declare(strict_types=1);

namespace Vjik\Accounting\Infrastructure\Id\Operation;

use Ramsey\Uuid\UuidInterface;
use Vjik\Accounting\Domain\Operation\OperationIdInterface;

final class UuidOperationId implements OperationIdInterface
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
