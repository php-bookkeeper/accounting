<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Domain\Operation\OperationService;

use Bookkeeper\Accounting\Domain\Operation\Operation;
use Bookkeeper\Accounting\Domain\Operation\OperationRepositoryInterface;
use Bookkeeper\Accounting\Domain\Operation\CreateTransactionData;

final class OperationService
{
    private OperationRepositoryInterface $operations;

    public function __construct(OperationRepositoryInterface $operations)
    {
        $this->operations = $operations;
    }

    public function create(CreateTransactionData ...$transactionDtos): Operation
    {
        $createTransactionData = [];
        foreach ($transactionDtos as $transactionDto) {
            $createTransactionData[] = new CreateTransactionData(
                $this->operations->nextTransactionIdentity(),
                $transactionDto->debitAccountId,
                $transactionDto->creditAccountId,
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
