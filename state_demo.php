<?php

use State\{Human};

function __autoload($className)
{
    $className = str_replace('\\', '/', $className);
    require_once 'src/' . $className .'.php';
}

$human = new Human();
$human->setState(new \State\Working());

for ($i = 0; $i < 10; $i++){
  $human->doSomething();
}




