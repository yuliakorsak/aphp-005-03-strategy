<?php

namespace Strategy;

class DecoyDuckStrategy extends DuckStrategy
{
    public function __construct()
    {
        parent::__construct('Деревянная утка');
    }

    public function startAction(): void
    {
        $this->display();
        $this->swim();
    }
}
