<?php

use Observer\Login;
use Observer\SecurityMonitor;

function __autoload($className)
{
    $className = str_replace('\\', '/', $className);
    require_once 'src/' . $className .'.php';
}

$login = new Login();
new SecurityMonitor($login);

$login->setStatus(Login::LOGIN_WRONG_PASS);
$login->notify();
