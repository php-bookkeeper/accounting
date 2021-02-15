<?php

declare(strict_types=1);

namespace Bookkeeper\Accounting\Domain\Account;

final class Account
{
    private AccountIdInterface $id;
    private AccountType $type;
    private ?string $name;

    public function __construct(
        AccountIdInterface $id,
        AccountType $type,
        string $name = null
    ) {
        $this->id = $id;
        $this->type = $type;
        $this->name = $name;
    }

    public function getId(): AccountIdInterface
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
