<?php

declare(strict_types=1);

abstract class Enum
{

    protected mixed $scalar;

    protected function __construct(mixed $scalar)
    {
        $this->scalar = $scalar;
    }
}
