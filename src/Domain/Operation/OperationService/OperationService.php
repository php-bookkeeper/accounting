<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Domain\Operation\OperationService;

use Bookkeeper\Accounting\Domain\Operation\Operation;
use Bookkeeper\Accounting\Domain\Operation\OperationRepositoryInterface;
use Bookkeeper\Accounting\Domain\Operation\TransactionCreationData;

final class OperationService
{
    private OperationRepositoryInterface $operations;

    public function __construct(OperationRepositoryInterface $operations)
    {
        $this->operations = $operations;
    }

    public function create(TransactionCreationData ...$transactions): Operation
    {
        $createTransactionData = [];
        foreach ($transactions as $transactionDto) {
            $createTransactionData[] = new TransactionCreationData(
                $this->operations->nextTransactionIdentity(),
                $transactionDto->creditAccountId,
                $transactionDto->debitAccountId,
                $transactionDto->amount
            );
        }

        $operation = new Operation(
            $this->operations->nextOperationIdentity(),
            ...$createTransactionData
        );

        $this->operations->save($operation);

        return $operation;
    }
}
