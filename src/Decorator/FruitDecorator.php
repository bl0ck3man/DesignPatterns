<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 20/08/2017
 * Time: 12:07
 */

namespace Decorator;


abstract class FruitDecorator extends Fruit
{
    public $fruit;

    public function __construct(Fruit $fruit)
    {
        $this->fruit = $fruit;
    }
}