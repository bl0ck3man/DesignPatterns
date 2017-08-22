<?php

use Proxy\{ProxyImage};

function __autoload($className)
{
    $className = str_replace('\\', '/', $className);
    require_once 'src/' . $className .'.php';
}

$file = 'who.png';

$image = new ProxyImage($file);
echo $image->display() . PHP_EOL;
