<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Domain\Operation\OperationService;

use Bookkeeper\Accounting\Domain\Operation\Operation;
use Bookkeeper\Accounting\Domain\Operation\OperationIdFactoryInterface;
use Bookkeeper\Accounting\Domain\Operation\OperationRepositoryInterface;
use Bookkeeper\Accounting\Domain\Operation\TransactionCreationData;

final class OperationService
{
    private OperationIdFactoryInterface $operationIdFactory;
    private OperationRepositoryInterface $operationRepository;

    public function __construct(
        OperationIdFactoryInterface $operationIdFactory,
        OperationRepositoryInterface $operationRepository
    ) {
        $this->operationIdFactory = $operationIdFactory;
        $this->operationRepository = $operationRepository;
    }

    public function create(TransactionCreationData ...$transactions): Operation
    {
        $operation = new Operation(
            $this->operationIdFactory->create(),
            ...$transactions
        );

        $this->operationRepository->save($operation);

        return $operation;
    }
}
