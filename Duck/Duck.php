<?php

namespace Duck;
use Strategy\DuckStrategy;

abstract class Duck
{
    protected DuckStrategy $strategy;

    public function startAction()
    {
        $this->strategy->startAction();
    }
}
