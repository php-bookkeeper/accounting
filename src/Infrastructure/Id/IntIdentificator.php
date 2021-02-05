<?php

declare(strict_types=1);

namespace Vjik\Accounting\Infrastructure\Id;

use Vjik\Accounting\Domain\Account\AccountIdInterface;
use Vjik\Accounting\Domain\Operation\OperationIdInterface;
use Vjik\Accounting\Domain\Operation\TransactionIdInterface;

final class IntIdentificator implements
    AccountIdInterface,
    OperationIdInterface,
    TransactionIdInterface
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
