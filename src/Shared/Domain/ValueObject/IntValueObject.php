<?php

declare(strict_types=1);

namespace Shared\Domain\ValueObject;

abstract class IntValueObject
{
    public function __construct(int $value)
    {
    }

    public function value(): int
    {
        return $this->value;
    }

    public function isBiggerThan(IntValueObject $other): bool
    {
        return $this->value() > $other->value();
    }
}
