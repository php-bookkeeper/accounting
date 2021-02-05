<?php

declare(strict_types=1);

namespace Vjik\Accounting\Domain\Account;

final class Account
{
    private AccountId $id;
    private AccountType $type;
    private ?string $name;

    public function __construct(
        AccountId $id,
        AccountType $type,
        string $name = null
    ) {
        $this->id = $id;
        $this->type = $type;
        $this->name = $name;
    }

    public function getId(): AccountId
    {
        return $this->id;
    }

    public function getType(): AccountType
    {
        return $this->type;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function rename(?string $name): void
    {
        $this->name = $name;
    }
}
