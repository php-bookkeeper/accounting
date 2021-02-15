<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Domain\Operation;

use DateTimeImmutable;

final class Operation
{
    private OperationIdInterface $id;
    private DateTimeImmutable $dateTime;

    /**
     * @var Transaction[]
     */
    private array $transactions;

    public function __construct(
        OperationIdInterface $id,
        CreateTransactionData ...$createTransactionData
    ) {
        $this->id = $id;
        $this->dateTime = new DateTimeImmutable();

        $this->transactions = [];
        foreach ($createTransactionData as $data) {
            $this->transactions[] = new Transaction(
                $data->id,
                $data->debitAccountId,
                $data->creditAccountId,
                $data->amount,
                $this->dateTime,
            );
        }
    }

    public function getId(): OperationIdInterface
    {
        return $this->id;
    }

    public function getCreationTime(): DateTimeImmutable
    {
        return $this->dateTime;
    }

    /**
     * @return Transaction[]
     */
    public function getTransactions(): array
    {
        return $this->transactions;
    }
}
