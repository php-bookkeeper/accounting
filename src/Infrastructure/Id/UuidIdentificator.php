<?php

declare(strict_types=1);

namespace Vjik\Accounting\Infrastructure\Id;

use Ramsey\Uuid\Uuid;
use Vjik\Accounting\Domain\Account\AccountIdInterface;
use Vjik\Accounting\Domain\Operation\OperationIdInterface;
use Vjik\Accounting\Domain\Operation\TransactionIdInterface;

final class UuidIdentificator implements
    AccountIdInterface,
    OperationIdInterface,
    TransactionIdInterface
{
    private Uuid $id;

    public function __construct(Uuid $id)
    {
        $this->id = $id;
    }

    public function getId(): Uuid
    {
        return $this->id;
    }

    public function __toString(): string
    {
        return $this->id->toString();
    }
}
