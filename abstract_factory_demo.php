<?php

use Abstract_Factory\{EnDeviceFactory, RuDeviceFactory};

function __autoload($className)
{
    $className = str_replace('\\', '/', $className);
    require_once 'src/' . $className .'.php';
}


function getDevice(string $country_code)
{
    switch ($country_code) {
        case 'RU' : return new RuDeviceFactory();
        case 'EN' : return new EnDeviceFactory();
        default: throw new Exception($country_code . ' is not valid');
    }
}

$device = getDevice('RU');
echo $device->getMouse()->click() . PHP_EOL;

$device = getDevice('EN');
echo $device->getMouse()->click() . PHP_EOL;

