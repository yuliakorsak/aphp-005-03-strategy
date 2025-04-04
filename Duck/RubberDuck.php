<?php

namespace Duck;
use Strategy\RubberDuckStrategy;

class RubberDuck extends Duck
{
    public function __construct()
    {
        $this->strategy = new RubberDuckStrategy();
    }
}
