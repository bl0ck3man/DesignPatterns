<?php

use Flexible_Object\Composite\{Army, Archer, LaserCannonUnit};

function __autoload($className)
{
    $className = str_replace('\\', '/', $className);
    require_once 'src/' . $className .'.php';
}

$main_army = new Army();
$main_army->addUnit(new Archer());
$main_army->addUnit(new LaserCannonUnit());

$sub_army = new Army();
$sub_army->addUnit(new Archer());
$sub_army->addUnit(new Archer());
$sub_army->addUnit(new Archer());
$main_army->addUnit($sub_army);

print "attacking with strength: {$main_army->bombardStrength()}\n";

