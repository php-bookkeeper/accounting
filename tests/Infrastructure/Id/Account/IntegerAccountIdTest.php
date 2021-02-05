<?php

declare(strict_types=1);

namespace Vjik\Accounting\Tests\Infrastructure\Id\Account;

use PHPUnit\Framework\TestCase;
use Vjik\Accounting\Infrastructure\Id\Account\IntegerAccountId;

final class IntegerAccountIdTest extends TestCase
{
    public function testGetId(): void
    {
        $id = new IntegerAccountId(42);

        $this->assertSame(42, $id->getId());
    }

    public function testCastToString(): void
    {
        $id = new IntegerAccountId(42);

        $this->assertSame('42', (string)$id);
    }
}
