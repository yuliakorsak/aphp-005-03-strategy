<?php

namespace Duck;
use Strategy\DecoyDuckStrategy;

class DecoyDuck extends Duck
{
    public function __construct()
    {
        $this->strategy = new DecoyDuckStrategy();
    }
}