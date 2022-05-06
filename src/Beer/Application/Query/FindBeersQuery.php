<?php

namespace Beer\Application\Query;

class FindBeersQuery
{
    private array $params;

    public function __construct(array $params)
    {
        $this->params = $params;
    }

    public function params(): array
    {
        return $this->params;
    }
}