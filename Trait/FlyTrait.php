<?php

namespace Trait;

trait FlyTrait
{
    public function fly(string $type): void
    {
        echo "$type летит" . PHP_EOL;
    }
}
