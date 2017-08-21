<?php

use Builder\{PersonBuilder, Person};

function __autoload($className)
{
    $className = str_replace('\\', '/', $className);
    require_once 'src/' . $className .'.php';
}

$person = (new PersonBuilder())
                    ->name('Иван')
                    ->surname('Иванов')
                    ->email('ivanov@mail.ru')
                    ->phone('253311')
                    ->build();

echo $person->getName() . PHP_EOL;
echo $person instanceof Person . PHP_EOL;