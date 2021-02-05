<?php

declare(strict_types=1);

namespace Vjik\Accounting\Domain\Operation;

interface OperationRepositoryInterface
{
    public function nextOperationIdentity(): OperationIdInterface;

    public function nextTransactionIdentity(): TransactionIdInterface;

    public function getById(OperationIdInterface $id): ?Operation;

    public function save(Operation $operation): void;
}
