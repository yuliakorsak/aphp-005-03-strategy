<?php

declare(strict_types=1);

require_once('autoload.php');
use Duck\MallardDuck;
use Duck\RedheadDuck;
use Duck\RubberDuck;
use Duck\DecoyDuck;

$ducks = [new MallardDuck(), new RedheadDuck(), new RubberDuck(), new DecoyDuck()];
foreach ($ducks as $duck) {
    $duck->startAction();
    echo PHP_EOL;
}
