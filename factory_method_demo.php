<?php

use Factory_method\{RuFactoryWatch, EnFactoryWatch};

function __autoload($className)
{
    $className = str_replace('\\', '/', $className);
    require_once 'src/' . $className .'.php';
}

function getWatch(string $vendor)
{
    switch ($vendor) {
        case 'RU' : return new RuFactoryWatch();
        case 'EN' : return new EnFactoryWatch();
        default: throw new Exception($vendor . ' is not valid');
    }
}

$factory_watch = getWatch('RU');

echo $factory_watch->getWatch()->tick() . PHP_EOL;

$factory_watch = getWatch('EN');
echo $factory_watch->getWatch()->tick() . PHP_EOL;

