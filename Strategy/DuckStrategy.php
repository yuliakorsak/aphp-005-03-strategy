<?php

namespace Strategy;

abstract class DuckStrategy
{
    protected string $type;
    public function __construct($type)
    {
        $this->type = $type;
    }

    public function display(): void
    {
        echo "$this->type отображается" . PHP_EOL;
    }

    public function swim(): void
    {
        echo "$this->type плывёт" . PHP_EOL;
    }

    public abstract function startAction(): void;
}
