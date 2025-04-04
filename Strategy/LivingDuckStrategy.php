<?php

namespace Strategy;
use Trait\QuackTrait;
use Trait\FlyTrait;

class LivingDuckStrategy extends DuckStrategy
{
    use QuackTrait, FlyTrait;

    public function startAction(): void
    {
        $this->display();
        $this->quack($this->type);
        $this->fly($this->type);
        $this->swim();
    }
}
