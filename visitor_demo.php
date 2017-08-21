<?php

use Visitor\{Body, Wheel, CarElementVisitor};

function __autoload($className)
{
    $className = str_replace('\\', '/', $className);
    require_once 'src/' . $className .'.php';
}

$body    = new Body();
$wheel   = new Wheel();
$visitor = new CarElementVisitor();

echo $visitor->visit($body) . PHP_EOL;
echo $visitor->visit($wheel) . PHP_EOL;