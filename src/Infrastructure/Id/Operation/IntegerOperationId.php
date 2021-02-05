<?php

declare(strict_types=1);

namespace Vjik\Accounting\Infrastructure\Id\Operation;

use Vjik\Accounting\Domain\Operation\OperationIdInterface;

final class IntegerOperationId implements OperationIdInterface
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
