<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Domain\Operation;

use Bookkeeper\Accounting\Infrastructure\Id\OperationIdFactoryInterface;
use Bookkeeper\Accounting\Infrastructure\Id\TransactionIdFactoryInterface;
use DateTimeImmutable;

final class OperationFactory
{
    private OperationIdFactoryInterface $operationIdFactory;
    private TransactionIdFactoryInterface $transactionIdFactory;

    public function __construct(
        OperationIdFactoryInterface $operationIdFactory,
        TransactionIdFactoryInterface $transactionIdFactory
    ) {
        $this->operationIdFactory = $operationIdFactory;
        $this->transactionIdFactory = $transactionIdFactory;
    }

    public function create(TransactionCreationData ...$transactionData): Operation
    {
        $time = new DateTimeImmutable();
        $transactions = [];
        foreach ($transactionData as $data) {
            $transactions[] = new Transaction(
                $this->transactionIdFactory->create(),
                $data->getCreditAccount(),
                $data->getDebitAccount(),
                $data->getAmount(),
                $time
            );
        }

        return new Operation($this->operationIdFactory->create(), $time, ...$transactions);
    }
}
