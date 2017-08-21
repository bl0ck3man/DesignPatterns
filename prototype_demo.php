<?php

use Prototype\{TerrainFactory, EarthSea, EarthPlains, EarthForest};

function __autoload($className)
{
    $className = str_replace('\\', '/', $className);
    require_once 'src/' . $className .'.php';
}

$factory = new TerrainFactory(new EarthSea(-1),
    new EarthPlains(), new EarthForest());

print_r($factory->getForest());
print_r($factory->getPlains());
print_r($factory->getSea());

