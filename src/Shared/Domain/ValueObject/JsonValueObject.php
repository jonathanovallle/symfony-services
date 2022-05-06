<?php

declare(strict_types=1);

namespace Shared\Domain\ValueObject;

abstract class JsonValueObject
{

    public function __construct(string $value)
    {
        $this->value = json_decode($value, true);
    }

    public function value(): array
    {
        return $this->value;
    }
}
