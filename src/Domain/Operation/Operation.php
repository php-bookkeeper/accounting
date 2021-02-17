<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Domain\Operation;

use Bookkeeper\Accounting\Domain\Operation\OperationService\OperationService;
use DateTimeImmutable;

final class Operation
{
    private OperationIdInterface $id;
    private DateTimeImmutable $creationTime;

    /**
     * @var Transaction[]
     */
    private array $transactions;

    /**
     * @param OperationIdInterface $id
     * @param DateTimeImmutable $creationTime
     * @param Transaction ...$transactions
     *
     * @internal Don't create it directly, use {@see OperationService::create()} instead
     */
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
