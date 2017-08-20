<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 20/08/2017
 * Time: 12:05
 */

namespace Decorator;

require_once 'src/Decorator/Fruit.php';

class Apple extends Fruit
{
    private $weight = 100;

    public function getWeight()
    {
       return $this->weight;
    }
}