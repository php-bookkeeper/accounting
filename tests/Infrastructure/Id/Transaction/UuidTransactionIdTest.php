<?php

declare(strict_types=1);

namespace Vjik\Accounting\Tests\Infrastructure\Id\Transaction;

use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;
use Vjik\Accounting\Infrastructure\Id\Transaction\UuidTransactionId;

final class UuidTransactionIdTest extends TestCase
{
    public function testGetId(): void
    {
        $uuid = Uuid::uuid4();
        $id = new UuidTransactionId($uuid);

        $this->assertSame($uuid, $id->getId());
    }

    public function testCastToString(): void
    {
        $uuid = Uuid::uuid4();
        $id = new UuidTransactionId($uuid);

        $this->assertSame($uuid->toString(), (string)$id);
    }
}
