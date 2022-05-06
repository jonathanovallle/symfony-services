<?php

declare(strict_types=1);

namespace Beer\Domain;

use Nominapress\Shared\Domain\Aggregate\AggregateRoot;

final class Beer
{

    private function __construct(
        private BeerId $id,
        private BeerName $name,
        private BeerDescription $description,
        private BeerImage $image,
        private BeerTagLine $tagLine,
        private BeerFirstBrewed $firstBrewed,
    ) {
    }

    public function id(): BeerId
    {
        return $this->id;
    }

    public function name(): BeerName
    {
        return $this->name;
    }

    public function description(): BeerDescription
    {
        return $this->description;
    }

    public function image(): BeerImage
    {
        return $this->image;
    }

    public function tagLine(): BeerTagLine
    {
        return $this->tagLine;
    }

    public function firstBrewed(): BeerFirstBrewed
    {
        return $this->firstBrewed;
    }
}
