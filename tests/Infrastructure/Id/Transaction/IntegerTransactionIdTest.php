<?php

declare(strict_types=1);

namespace Vjik\Accounting\Tests\Infrastructure\Id\Transaction;

use PHPUnit\Framework\TestCase;
use Vjik\Accounting\Infrastructure\Id\Transaction\IntegerTransactionId;

final class IntegerTransactionIdTest extends TestCase
{
    public function testGetId(): void
    {
        $id = new IntegerTransactionId(42);

        $this->assertSame(42, $id->getId());
    }

    public function testCastToString(): void
    {
        $id = new IntegerTransactionId(42);

        $this->assertSame('42', (string)$id);
    }
}
