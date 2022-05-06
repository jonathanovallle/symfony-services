<?php

declare(strict_types=1);

namespace Shared\Domain\ValueObject;

abstract class BoolValueObject
{

    public function __construct(bool $value)
    {
        $this->value = $value;
    }

    public function value(): bool
    {
        return $this->value;
    }

    public function equalsTo(BoolValueObject $other): bool
    {
        return $this->value() === $other->value();
    }
}
