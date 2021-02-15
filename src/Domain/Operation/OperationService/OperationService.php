<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Domain\Operation\OperationService;

use Bookkeeper\Accounting\Domain\Operation\CreateTransactionData;
use Bookkeeper\Accounting\Domain\Operation\Operation;
use Bookkeeper\Accounting\Infrastructure\Id\OperationIdFactoryInterface;
use Bookkeeper\Accounting\Infrastructure\Id\TransactionIdFactoryInterface;
use Bookkeeper\Accounting\Infrastructure\Repository\OperationRepositoryInterface;

final class OperationService
{
    private OperationIdFactoryInterface $operationIdFactory;
    private TransactionIdFactoryInterface $transactionIdFactory;
    private OperationRepositoryInterface $operationRepository;

    public function __construct(
        OperationIdFactoryInterface $operationIdFactory,
        TransactionIdFactoryInterface $transactionIdFactory,
        OperationRepositoryInterface $operationRepository
    ) {
        $this->operationIdFactory = $operationIdFactory;
        $this->transactionIdFactory = $transactionIdFactory;
        $this->operationRepository = $operationRepository;
    }

    public function create(CreateTransactionData ...$transactions): Operation
    {
        $createTransactionData = [];
        foreach ($transactions as $transactionDto) {
            $createTransactionData[] = new CreateTransactionData(
                $this->transactionIdFactory->create(),
                $transactionDto->debitAccountId,
                $transactionDto->creditAccountId,
                $transactionDto->amount
            );
        }

        $operation = new Operation(
            $this->operationIdFactory->create(),
            ...$createTransactionData
        );

        $this->operationRepository->save($operation);

        return $operation;
    }
}
