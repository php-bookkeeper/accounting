<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Domain\Operation;

use DateTimeImmutable;

final class Operation
{
    private OperationIdInterface $id;
    private DateTimeImmutable $creationTime;

    /**
     * @var Transaction[]
     */
    private array $transactions;

    public function __construct(
        OperationIdInterface $id,
        DateTimeImmutable $creationTime,
        Transaction ...$transactions
    ) {
        $this->id = $id;
        $this->creationTime = $creationTime;
        $this->transactions = $transactions;
    }

    public function getId(): OperationIdInterface
    {
        return $this->id;
    }

    public function getCreationTime(): DateTimeImmutable
    {
        return $this->creationTime;
    }

    /**
     * @return Transaction[]
     */
    public function getTransactions(): array
    {
        return $this->transactions;
    }
}
