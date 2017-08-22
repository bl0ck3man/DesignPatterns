<?php

use Bridge\{Sedan, Kia};

function __autoload($className)
{
    $className = str_replace('\\', '/', $className);
    require_once 'src/' . $className .'.php';
}


$car = new Sedan(new Kia());

echo $car->getDetails() . PHP_EOL;
