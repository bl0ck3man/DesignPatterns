<?php

require_once 'src/Prototype/TerrainFactory.php';
require_once 'src/Prototype/EarthForest.php';
require_once 'src/Prototype/EarthSea.php';
require_once 'src/Prototype/EarthPlains.php';

$factory = new \Prototype\TerrainFactory(new \Prototype\EarthSea(-1),
    new \Prototype\EarthPlains(), new \Prototype\EarthForest());

print_r($factory->getForest());
print_r($factory->getPlains());
print_r($factory->getSea());

?>