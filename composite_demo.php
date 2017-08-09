<?php

require_once 'src/Flexible_Object/Composite/Archer.php';
require_once 'src/Flexible_Object/Composite/LaserCannonUnit.php';
require_once 'src/Flexible_Object/Composite/Army.php';

$main_army = new \Flexible_Object\Composite\Army();
$main_army->addUnit(new \Flexible_Object\Composite\Archer());
$main_army->addUnit(new \Flexible_Object\Composite\LaserCannonUnit());

$sub_army = new \Flexible_Object\Composite\Army();
$sub_army->addUnit(new \Flexible_Object\Composite\Archer());
$sub_army->addUnit(new \Flexible_Object\Composite\Archer());
$sub_army->addUnit(new \Flexible_Object\Composite\Archer());
$main_army->addUnit($sub_army);

print "attacking with strength: {$main_army->bombardStrength()}\n";

?>