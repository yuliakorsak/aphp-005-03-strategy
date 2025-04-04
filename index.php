<?php

declare(strict_types=1);

trait FlyTrait
{
    public function fly(string $type): void
    {
        echo "$type летит" . PHP_EOL;
    }
}

trait QuackTrait
{
    public function quack(string $type): void
    {
        echo "$type крякает" . PHP_EOL;
    }
}

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

abstract class Duck
{
    protected DuckStrategy $strategy;

    public function startAction()
    {
        $this->strategy->startAction();
    }
}

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->strategy = new LivingDuckStrategy('Обычная утка');
    }
}

class RedheadDuck extends Duck
{
    public function __construct()
    {
        $this->strategy = new LivingDuckStrategy('Красноголовая утка');
    }
}

class RubberDuck extends Duck
{
    public function __construct()
    {
        $this->strategy = new RubberDuckStrategy();
    }
}

class DecoyDuck extends Duck
{
    public function __construct()
    {
        $this->strategy = new DecoyDuckStrategy();
    }
}

$ducks = [new MallardDuck(), new RedheadDuck(), new RubberDuck(), new DecoyDuck()];
foreach ($ducks as $duck) {
    $duck->startAction();
    echo PHP_EOL;
}
