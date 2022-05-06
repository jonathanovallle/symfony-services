<?php

declare(strict_types=1);

namespace Shared\Domain\ValueObject;

use Stringable;

abstract class StringValueObject implements Stringable
{
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function __toString()
    {
        return $this->value();
    }

}
