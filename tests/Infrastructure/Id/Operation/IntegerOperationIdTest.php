<?php

declare(strict_types=1);

namespace Vjik\Accounting\Tests\Infrastructure\Id\Operation;

use PHPUnit\Framework\TestCase;
use Vjik\Accounting\Infrastructure\Id\Operation\IntegerOperationId;

final class IntegerOperationIdTest extends TestCase
{
    public function testGetId(): void
    {
        $id = new IntegerOperationId(42);

        $this->assertSame(42, $id->getId());
    }

    public function testCastToString(): void
    {
        $id = new IntegerOperationId(42);

        $this->assertSame('42', (string)$id);
    }
}
