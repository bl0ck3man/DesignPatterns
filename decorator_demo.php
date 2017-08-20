<?php

use Decorator\{AppleDecorator, Apple, MelonDecorator};

function __autoload($className)
{
    $className = str_replace('\\', '/', $className);
    require_once 'src/' . $className .'.php';
}

$apple = new MelonDecorator(new AppleDecorator(new Apple()));

echo $apple->getAnotherProp() . PHP_EOL;
echo $apple->getWeight() . PHP_EOL;
echo $apple->fruit->getPlace() . PHP_EOL;