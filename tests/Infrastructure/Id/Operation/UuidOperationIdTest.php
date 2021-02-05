<?php

declare(strict_types=1);

namespace Vjik\Accounting\Tests\Infrastructure\Id\Operation;

use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;
use Vjik\Accounting\Infrastructure\Id\Operation\UuidOperationId;

final class UuidOperationIdTest extends TestCase
{
    public function testGetId(): void
    {
        $uuid = Uuid::uuid4();
        $id = new UuidOperationId($uuid);

        $this->assertSame($uuid, $id->getId());
    }

    public function testCastToString(): void
    {
        $uuid = Uuid::uuid4();
        $id = new UuidOperationId($uuid);

        $this->assertSame($uuid->toString(), (string)$id);
    }
}
