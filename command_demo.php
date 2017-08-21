<?php

use Command\{User, StartCommand, StopCommand, ResetCommand, Computer};

function __autoload($className)
{
    $className = str_replace('\\', '/', $className);
    require_once 'src/' . $className .'.php';
}

$computer = new Computer();
$user = new User((new StartCommand($computer)), (new StopCommand($computer)), (new ResetCommand($computer)));

echo $user->startComputer() . PHP_EOL;
echo $user->resetComputer() . PHP_EOL;
echo $user->stopComputer() . PHP_EOL;