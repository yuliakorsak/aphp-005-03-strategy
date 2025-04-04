<?php

namespace Duck;
use Strategy\LivingDuckStrategy;

class RedheadDuck extends Duck
{
    public function __construct()
    {
        $this->strategy = new LivingDuckStrategy('Красноголовая утка');
    }
}
