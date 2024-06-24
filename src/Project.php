<?php

declare(strict_types=1);

namespace Danilocgsilva\ProjectsCatalog;

class Project
{
    public function __construct(
        public readonly string $name,
        public readonly string $location
    ) {}
}
