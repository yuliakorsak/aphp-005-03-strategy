<?php

namespace Strategy;
use Trait\QuackTrait;

class RubberDuckStrategy extends DuckStrategy
{
    use QuackTrait;

    public function __construct()
    {
        parent::__construct('Резиновая уточка');
    }

    public function startAction(): void
    {
        $this->display();
        $this->quack($this->type);
        $this->swim();
    }
}
