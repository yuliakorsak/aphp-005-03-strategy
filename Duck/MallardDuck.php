<?php

namespace Duck;
use Strategy\LivingDuckStrategy;

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->strategy = new LivingDuckStrategy('Обычная утка');
    }
}
