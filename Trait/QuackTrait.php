<?php

namespace Trait;

trait QuackTrait
{
    public function quack(string $type): void
    {
        echo "$type крякает" . PHP_EOL;
    }
}
