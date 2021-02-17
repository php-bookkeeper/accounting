<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Domain\Operation\OperationService;

use Bookkeeper\Accounting\Domain\Operation\Operation;
use Bookkeeper\Accounting\Domain\Operation\OperationFactory;
use Bookkeeper\Accounting\Domain\Operation\TransactionCreationData;
use Bookkeeper\Accounting\Infrastructure\Repository\OperationRepositoryInterface;

final class OperationService
{
    private OperationFactory $operationFactory;
    private OperationRepositoryInterface $operationRepository;

    public function __construct(
        OperationFactory $operationFactory,
        OperationRepositoryInterface $operationRepository
    ) {
        $this->operationFactory = $operationFactory;
        $this->operationRepository = $operationRepository;
    }

    public function create(TransactionCreationData ...$transactions): Operation
    {
        $operation = $this->operationFactory->create(...$transactions);
        $this->operationRepository->save($operation);

        return $operation;
    }
}
